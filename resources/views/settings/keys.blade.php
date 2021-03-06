@extends('layouts.app')

@section('content')

    <section class="section">
        <div class="columns">
            <div class="column is-one-quarter">
                <aside class="menu">
                    <p class="menu-label">
                        Profile Settings
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a href="/settings/api">
                                <span class="icon">
                                    <i class="fa fa-fw fa-user-circle-o"></i>
                                </span>
                                API
                            </a>
                        </li>
                    </ul>
                    <p class="menu-label">
                        Solder Settings
                    </p>
                    <ul class="menu-list">
                        <li>
                            <a href="/settings/manage-teams">
                                <span class="icon">
                                    <i class="fa fa-fw fa-users"></i>
                                </span>
                                Teams
                            </a>
                        </li>
                        @can('keys.list')
                        <li>
                            <a href="/settings/keys" class="is-active">
                                <span class="icon">
                                    <i class="fa fa-fw fa-key"></i>
                                </span>
                                Keys
                            </a>
                        </li>
                        @endcan
                        @can('clients.list')
                        <li>
                            <a href="/settings/clients">
                                <span class="icon">
                                    <i class="fa fa-fw fa-window-maximize"></i>
                                </span>
                                Clients
                            </a>
                        </li>
                        @endcan
                        <li>
                            <a href="/settings/users">
                                <span class="icon">
                                    <i class="fa fa-fw fa-user-circle"></i>
                                </span>
                                Users
                            </a>
                        </li>
                        <li>
                            <a href="/settings/permissions">
                            <span class="icon">
                                <i class="fa fa-fw fa-universal-access"></i>
                            </span>
                                Permissions
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>

            <launcher-api-keys inline-template v-cloak>
                <div class="column">

                    @include('settings.keys.create-key')

                    @include('settings.keys.tokens')

                </div>
            </launcher-api-keys>
        </div>
    </section>
@endsection
