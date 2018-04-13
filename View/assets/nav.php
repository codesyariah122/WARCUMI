<div class="container-fluid main">

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" href="#"><?=Text::HEADER;?></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="#"><?=Text::ABOUT;?></a></li>
          <li><a href="<?=$data_contact['contact'];?>"><?=Text::CONTACT;?></a></li>
        </ul>
      </div>
    </div>
  </nav>
