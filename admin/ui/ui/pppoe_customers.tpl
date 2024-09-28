{include file="sections/header.tpl"}

<!-- Include Tailwind CSS CDN -->
<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
<!-- Include FontAwesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;600&display=swap');

    body {
        font-family: 'Mulish', sans-serif;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        display: inline-block;
        padding: 5px 10px;
        margin-right: 5px;
        border: 1px solid #ccc;
        background-color: #fff;
        color: #333;
        cursor: pointer;
    }

    .no-package {
        font-size: 0.75rem; /* Adjusted font size */
    }

    .action-icons a {
        margin-right: 0.5rem; /* Spacing between icons */
    }

    .username {
        color: #4f46e5; /* Tailwind's indigo-600 */
        font-weight: bold;
    }
</style>

<div class="container mx-auto mt-8">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <div class="mb-4">
            <form id="site-search" method="post" action="{$_url}customers?type=pppoe" class="flex flex-wrap items-center justify-between space-y-4 md:space-y-0">
                <div class="flex items-center relative">
                    <input type="text" name="search" class="form-control border border-gray-300 rounded-md p-2 pl-10" placeholder="{Lang::T('Search')}..." value="{$search}">
                    <span class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.41-1.41l4.1 4.1a1 1 0 01-1.42 1.42l-4.1-4.1zM8 14A6 6 0 108 2a6 6 0 000 12z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </div>
                <div class="flex space-x-4">
                    <button class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">{Lang::T('Query')}</button>
                    <button class="btn btn-primary bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit" name="export" value="csv">
                        <i class="fas fa-download"></i> CSV
                    </button>
                    <a href="{$_url}customers/add" class="btn btn-success bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                        <i class="fas fa-plus mr-2"></i> {Lang::T('Add Client')}
                    </a>
                </div>
            </form>
        </div>

        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
            <table id="customerTable" class="min-w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b border-gray-200 text-left">{Lang::T('Username')}</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left">{Lang::T('Full Name')}</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left">{Lang::T('Balance')}</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left">{Lang::T('Service Type')}</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left">{Lang::T('Status')}</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-left">{Lang::T('Created On')}</th>
                        <th class="py-2 px-4 border-b border-gray-200 text-center">{Lang::T('Manage')}</th>
                    </tr>
                </thead>
                <tbody>
                    {foreach $customers as $customer}
                        <tr class="{if $customer['status'] != 'Active'}bg-red-100{/if} hover:bg-gray-100">
                            <td class="py-2 px-4 border-b border-gray-200 cursor-pointer username" onclick="window.location.href = '{$_url}customers/view/{$customer['id']}'">{$customer['username']}</td>
                            <td class="py-2 px-4 border-b border-gray-200 cursor-pointer" onclick="window.location.href = '{$_url}customers/view/{$customer['id']}'">{$customer['fullname']}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{Lang::moneyFormat($customer['balance'])}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{$customer['service_type']}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{Lang::T($customer['status'])}</td>
                            <td class="py-2 px-4 border-b border-gray-200">{Lang::dateTimeFormat($customer['created_at'])}</td>
                            <td class="py-2 px-4 border-b border-gray-200 text-center action-icons flex ">
                                <a href="{$_url}customers/view/{$customer['id']}" class="text-white bg-green-500 hover:bg-green-700 rounded-md px-2 py-1 mx-1">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                    {/foreach}
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    var $j = jQuery.noConflict();

    $j(document).ready(function() {
        $j('#customerTable').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
            "pageLength": 25
        });
    });
</script>

{include file="sections/footer.tpl"}
