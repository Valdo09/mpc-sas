<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    @php
                        $user = Auth::user();
                    @endphp
                    @if ($user->role==0)
                    <li>
                        <a href="{{route('admin.index')}}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-list menu-icon"></i> <span class="nav-text">Prestations</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('prestations.create') }}">Ajouter</a></li>
                            <li><a href="{{ route('prestations.index') }}">Liste</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-list menu-icon"></i> <span class="nav-text">Service</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('services.create') }}">Ajouter</a></li>
                            <li><a href="{{ route('services.index') }}">Liste</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-tasks"></i> <span class="nav-text">Réalisations</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('realisations.create') }}">Ajouter</a></li>
                            <li><a href="{{route('realisations.index')}}">Liste</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-smile-o"></i> <span class="nav-text">Satisfaction Client</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('admin.satisform.create') }}">Formulaire</a></li>
                            <li><a href="{{ route('admin.satisform.index') }}">Retours</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('avis.index') }}" aria-expanded="false">
                            <i class="fa fa-thumbs-up"></i> <span class="nav-text">Avis Client</span>
                        </a>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="fa fa-at"></i> <span class="nav-text">Newsletter</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('newsletters.index') }}">Liste des Abonnés</a></li>
                            <li><a href="{{ route('news.index') }}">News</a></li>
                        </ul>
                    </li>

                    <li>
                    {{-- <a href="{{ route('admin.visitors') }}" aria-expanded="false">
                            <i class="icon-people menu-icon"></i> <span class="nav-text">  Visiteurs</span>
                        </a>
                    </li> --}}
                    @else
                    {{-- <li>
                    <a href="{{ route('admin.visitors') }}" aria-expanded="false">
                            <i class="icon-user menu-icon"></i> <span class="nav-text"> Visiteurs</span>
                        </a>
                    </li> --}}
                    @endif
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

