<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="img/user.png" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>Admin User</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Home', 'icon' => 'dashboard', 'url' => ['/']],
                    ['label' => 'About', 'icon' => 'info-circle', 'url' => ['/site/about']],
                    ['label' => 'Contact', 'icon' => 'phone-square', 'url' => ['/site/contact']],
                    ['label' => 'Student Information', 'icon' => 'users', 'url' => ['/student/student']],
                    ['label' => 'Web Scraping', 'icon' => 'globe', 'url' => ['/site/scrape']]
                ],
            ]
        ) ?>

    </section>

</aside>
