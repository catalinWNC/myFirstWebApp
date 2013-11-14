<?php $this->load->view('admin/components/page_head'); ?>
  <body>
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo site_url('admin/dashboard') ?>"><?php echo $meta_title; ?></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="<?php echo site_url('admin/dashboard') ?>">Dashboard</a></li>
          <li><?php echo anchor('admin/pages', 'pages') ?></li>
          <li><?php echo anchor('admin/users', 'users') ?></li>
          <li><a href="#">Link</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <section>
            <h2>Page Name</h2>
          </section>
        </div>
        <div class="col-md-3">
          <aside>
            <?php echo mailto('trinca.alex@gmail.com', '<span class="glyphicon glyphicon-user"></span> trinca.alex@gmail.com'); ?><br>
            <?php echo anchor('admin/user/logout', '<span class="glyphicon glyphicon-off"></span> logout'); ?>
          </aside>
        </div>
      </div>
    </div>
<?php $this->load->view('admin/components/page_tail'); ?>
