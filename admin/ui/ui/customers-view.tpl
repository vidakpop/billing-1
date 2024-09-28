{include file="sections/header.tpl"}

<div class="flex flex-col lg:flex-row">
    <!-- Profile Section -->
    <div class="lg:w-1/3 p-4">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <div class="p-4 flex flex-col items-center">
                <img class="w-24 h-24 rounded-full object-cover"
                    src="https://robohash.org/{$d['id']}?set=set3&size=100x100&bgset=bg1"
                    onerror="this.src='{$UPLOAD_PATH}/user.default.jpg'" alt="avatar">
                <h3 class="mt-2 text-lg font-semibold text-gray-800">{$d['fullname']}</h3>
                <ul class="w-full mt-4 space-y-2">
                    {foreach ['status', 'username', 'phonenumber', 'email', 'address',  'password', 'pppoe_password'] as $item}
                        <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                            <span class="font-medium text-gray-700">{Lang::T(ucfirst($item))}</span>
                            {if $item == 'password' || $item == 'pppoe_password'}
                                <input type="password" value="{$d[$item]}" class="text-right border-0 bg-transparent focus:outline-none"
                                    onmouseenter="this.type='text'" onmouseleave="this.type='password'" onclick="this.select()">
                            {else}
                                <span class="text-gray-600">{$d[$item]}</span>
                            {/if}
                        </li>
                    {/foreach}
                    <!-- Service Details -->
                    <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                        <span class="font-medium text-gray-700">{Lang::T('Service Type')}</span>
                        <span class="text-gray-600">{Lang::T($d['service_type'])}</span>
                    </li>
                    <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                        <span class="font-medium text-gray-700">{Lang::T('Balance')}</span>
                        <span class="text-gray-600">{Lang::moneyFormat($d['balance'])}</span>
                    </li>
                    <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                        <span class="font-medium text-gray-700">{Lang::T('Auto Renewal')}</span>
                        <span class="text-gray-600">{if $d['auto_renewal']}yes{else}no{/if}</span>
                    </li>
                    <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                        <span class="font-medium text-gray-700">{Lang::T('Created On')}</span>
                        <span class="text-gray-600">{Lang::dateTimeFormat($d['created_at'])}</span>
                    </li>
                    <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                        <span class="font-medium text-gray-700">{Lang::T('Last Login')}</span>
                        <span class="text-gray-600">{Lang::dateTimeFormat($d['last_login'])}</span>
                    </li>
                    {if $d['coordinates']}
                        <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                            <span class="font-medium text-gray-700">{Lang::T('Coordinates')}</span>
                            <span class="text-gray-600">
                                <i class="fas fa-map-marker-alt"></i> <a class="text-blue-500 hover:underline"
                                    href="https://www.google.com/maps/dir//{$d['coordinates']}/" target="_blank">Get Directions</a>
                            </span>
                        </li>
                        <div id="map" class="w-full h-64 mt-4"></div>
                    {/if}
                </ul>
                <div class="flex flex-col mt-4">
                    <a href="{$_url}customers/delete/{$d['id']}" id="{$d['id']}"
                        class="bg-red-600 text-white py-2 px-4 rounded shadow hover:bg-red-700 mb-2"
                        onclick="return confirm('{Lang::T('Delete')}?')"><i class="fas fa-trash"></i> {Lang::T('Delete')}</a>
                    <a href="{$_url}customers/edit/{$d['id']}"
                        class="bg-yellow-500 text-white py-2 px-4 rounded shadow hover:bg-yellow-600">{Lang::T('Edit')}</a>
                </div>
            </div>
        </div>
        {foreach $packages as $package}
            <div class="bg-white shadow rounded-lg mt-4 overflow-hidden">
                <div class="p-4">
                    <h4 class="text-center text-lg font-semibold text-gray-800">{$package['type']} - {$package['namebp']}</h4>
                    <ul class="mt-4 space-y-2">
                        {foreach ['status', 'type', 'created_on', 'expires_on', 'routers'] as $item}
                            <li class="flex justify-between items-center px-4 py-2 text-sm bg-gray-100 rounded">
                                <span class="font-medium text-gray-700">{Lang::T(ucfirst($item))}</span>
                                <span class="text-gray-600">
                                    {if $item == 'status'}
                                        {if $package['status']=='on'}yes{else}no{/if}
                                    {elseif $item == 'type'}
                                        {if $package['prepaid'] eq yes}Prepaid{else}<b>Postpaid</b>{/if}
                                    {else}
                                        {Lang::dateAndTimeFormat($package[$item])}
                                    {/if}
                                </span>
                            </li>
                        {/foreach}
                    </ul>
                    <div class="flex mt-4">
                        <a href="{$_url}customers/deactivate/{$d['id']}/{$package['plan_id']}" class="bg-red-600 text-white py-2 px-4 rounded shadow hover:bg-red-700 flex-1 mr-2"
                            onclick="return confirm('This will deactivate Customer Plan, and make it expired')">{Lang::T('Deactivate')}</a>
                        <a href="{$_url}customers/recharge/{$d['id']}/{$package['plan_id']}" class="bg-green-600 text-white py-2 px-4 rounded shadow hover:bg-green-700 flex-1"
                            >{Lang::T('Recharge')}</a>
                    </div>
                </div>
            </div>
        {/foreach}
        <div class="flex mt-4">
            <a href="{$_url}customers/list" class="bg-blue-600 text-white py-2 px-4 rounded shadow hover:bg-blue-700 flex-1 mr-2">{Lang::T('Back')}</a>
            <a href="{$_url}customers/sync/{$d['id']}" onclick="return confirm('This will sync Customer to Mikrotik?')"
                class="bg-teal-600 text-white py-2 px-4 rounded shadow hover:bg-teal-700 flex-1 mr-2">{Lang::T('Sync')}</a>
            <a href="{$_url}message/send/{$d['id']}" class="bg-green-600 text-white py-2 px-4 rounded shadow hover:bg-green-700 flex-1">{Lang::T('Send Message')}</a>
        </div>
    </div>

    <!-- History Section -->
    <div class="lg:w-2/3 p-4">
        <ul class="flex border-b">
            <li class="mr-1">
                <a href="{$_url}customers/view/{$d['id']}/order"
                    class="py-2 px-4 inline-block text-gray-700 {if $v=='order' }border-b-2 border-indigo-600 font-semibold{/if}">30 {Lang::T('Order History')}</a>
            </li>
            <li class="mr-1">
                <a href="{$_url}customers/view/{$d['id']}/activation"
                    class="py-2 px-4 inline-block text-gray-700 {if $v=='activation' }border-b-2 border-indigo-600 font-semibold{/if}">60 {Lang::T('Activation History')}</a>
            </li>
        </ul>
    </div>
</div>

{include file="sections/footer.tpl"}
