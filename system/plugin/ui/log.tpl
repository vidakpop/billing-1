<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log UI</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
{include file="sections/header.tpl"}
<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="container mx-auto mt-8 bg-white rounded-lg shadow-lg p-6">
        <form class="mb-4" method="post" role="form" action="{$_url}plugin/log_ui">
            <ul class="nav nav-tabs flex border-b">
                {foreach $routers as $r}
                    <li class="mr-1" role="presentation" {if $r['id']==$router}class="active"{/if}>
                        <a class="bg-white inline-block py-2 px-4 text-blue-500 hover:text-blue-800 font-semibold" href="{$_url}plugin/log_ui/{$r['id']}">{$r['name']}</a>
                    </li>
                {/foreach}
            </ul>
        </form>

        <div class="flex flex-wrap mb-4">
            <div class="w-full md:w-8/12">
                <label class="block">
                    Show entries
                    <select name="data_length" aria-controls="data" class="form-control form-control-sm" onchange="updatePerPage(this.value)">
                        <option value="5" {if $per_page == 5}selected{/if}>5</option>
                        <option value="10" {if $per_page == 10}selected{/if}>10</option>
                        <option value="25" {if $per_page == 25}selected{/if}>25</option>
                        <option value="50" {if $per_page == 50}selected{/if}>50</option>
                        <option value="100" {if $per_page == 100}selected{/if}>100</option>
                    </select>
                </label>
            </div>
            <div class="w-full md:w-4/12">
                <label class="block">
                    Search:
                    <input type="search" id="logSearch" class="form-control form-control-sm" placeholder="Search logs" aria-controls="data" onkeyup="filterLogs()">
                </label>
            </div>
        </div>

        <table class="min-w-full bg-white table-auto">
            <thead>
                <tr class="bg-gray-200">
                    <th class="w-1/3 py-2 px-4">Time</th>
                    <th class="w-1/3 py-2 px-4">Topic</th>
                    <th class="w-1/3 py-2 px-4">Message</th>
                </tr>
            </thead>
            <tbody id="logTableBody">
                {assign var=current_page value=$smarty.get.page|default:1}
                {assign var=per_page value=$smarty.get.per_page|default:10}
                {assign var=start_index value=($current_page - 1) * $per_page}
                
                {foreach from=$logs|array_reverse item=log name=logLoop}
                    {if $smarty.foreach.logLoop.index >= $start_index && $smarty.foreach.logLoop.index < ($start_index + $per_page)}
                        <tr class="log-entry">
                            <td class="border px-4 py-2">{$log.time}</td>
                            <td class="border px-4 py-2">{$log.topics}</td>
                            <td class="border px-4 py-2 log-message">
                                {if $log.message|lower|strpos:'failed' !== false}
                                    <span class="text-red-700 text-bold">{$log.message}</span>
                                {elseif $log.message|lower|strpos:'trying' !== false}
                                    <span class="text-yellow-700">{$log.message}</span>
                                {elseif $log.message|lower|strpos:'logged in' !== false}
                                    <span class="text-green-700">{$log.message}</span>
                                {elseif $log.message|lower|strpos:'login failed' !== false}
                                    <span class="text-blue-700">{$log.message}</span>
                                {else}
                                    <span class="text-gray-700">{$log.message}</span>
                                {/if}
                            </td>
                        </tr>
                    {/if}
                {/foreach}
            </tbody>
        </table>

        {assign var=total_logs value=$logs|@count}
        {assign var=last_page value=ceil($total_logs / $per_page)}

        <nav class="mt-4">
            <ul class="pagination flex justify-center">
                {if $current_page > 1}
                    <li>
                        <a class="page-link border py-2 px-4 mx-1" href="index.php?_route=plugin/log_ui&page=1&per_page={$per_page}" aria-label="First">&laquo;&laquo;</a>
                    </li>
                    <li>
                        <a class="page-link border py-2 px-4 mx-1" href="index.php?_route=plugin/log_ui&page={$current_page-1}&per_page={$per_page}" aria-label="Previous">&laquo;</a>
                    </li>
                {/if}

                {assign var=max_links value=5}
                {assign var=start_page value=max(1, $current_page - floor($max_links / 2))}
                {assign var=end_page value=min($last_page, $start_page + $max_links - 1)}

                {if $start_page > 1}
                    <li>
                        <a class="page-link border py-2 px-4 mx-1" href="index.php?_route=plugin/log_ui&page={$start_page-1}&per_page={$per_page}" aria-label="Previous">&hellip;</a>
                    </li>
                {/if}

                {foreach from=range($start_page, $end_page) item=page}
                    <li>
                        <a class="page-link border py-2 px-4 mx-1 {if $page == $current_page}bg-blue-500 text-white{/if}" href="index.php?_route=plugin/log_ui&page={$page}&per_page={$per_page}">{$page}</a>
                    </li>
                {/foreach}

                {if $end_page < $last_page}
                    <li>
                        <a class="page-link border py-2 px-4 mx-1" href="index.php?_route=plugin/log_ui&page={$end_page+1}&per_page={$per_page}" aria-label="Next">&hellip;</a>
                    </li>
                {/if}

                {if $current_page < $last_page}
                    <li>
                        <a class="page-link border py-2 px-4 mx-1" href="index.php?_route=plugin/log_ui&page={$current_page+1}&per_page={$per_page}" aria-label="Next">&raquo;</a>
                    </li>
                    <li>
                        <a class="page-link border py-2 px-4 mx-1" href="index.php?_route=plugin/log_ui&page={$last_page}&per_page={$per_page}" aria-label="Last">&raquo;&raquo;</a>
                    </li>
                {/if}
            </ul>
        </nav>
    </div>

    <script>
        function updatePerPage(value) {
            var urlParams = new URLSearchParams(window.location.search);
            urlParams.set('per_page', value);
            urlParams.set('page', 1); // Reset to first page
            window.location.search = urlParams.toString();
        }

        function filterLogs() {
            var input = document.getElementById('logSearch').value.toLowerCase();
            var table = document.getElementById('logTableBody');
            var tr = table.getElementsByClassName('log-entry');

            for (var i = 0; i < tr.length; i++) {
                var logMessage = tr[i].getElementsByClassName('log-message')[0].textContent || tr[i].getElementsByClassName('log-message')[0].innerText;
                if (logMessage.toLowerCase().indexOf(input) > -1) {
                    tr[i].style.display = '';
                } else {
                    tr[i].style.display = 'none';
                }
            }
        }
    </script>

    {include file="sections/footer.tpl"}
</body>
</html>
