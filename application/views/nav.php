<nav class="navbar navbar-default">
    <div class="container-fluid">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">Brand</a>
        </div>


        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="<?=base_url('/terminal/list1')?>">Terminal list</a>
                </li>
                <li>
                    <a href="<?=base_url('/preseta/list1')?>">Presete list</a>
                </li>
                <li>
                    <a href="<?=base_url('/mini/list1')?>">miniaplicator list</a>
                </li>
                <li>
                     <a href="<?=base_url('/sez/list1')?>">Section list</a>
                </li>
                <li>
                    <a href="<?=base_url('/terminal_propertis/list1')?>">Terminal propertis list</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?=base_url('/logout')?>">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>