<?php include("header.php"); ?>
<section class="prof-top page1">
<div class="container-fluid min-page">

<div class="col-xs-12 bot20">
  <div class="panel">
   <div class="panel-body">
                   <div class="row">
                   <div class="col-xs-12 col-sm-3 col-md-3">
                    <img class="avatar1" src="images/avatar.png"/>
                   </div>
                   <div class="col-xs-12 col-sm-4 col-md-6 fa2">
                   <br>
                    <h2><b>Namehere</b></h2>
<br>
PSN: <a href="#">xReeeLowx</a><br>
Steam: <a href="#">xReeeLowx</a><br>
Epic ID: <a href="#">xReeeLowx</a><br>
XBL: <a href="#">xBeeeL0wx</a><br><br>
<a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitch"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> 
<br>

                   </div>

                   <div class="col-xs-12 col-sm-5 col-md-3 prof1 center">
                   <br><br>
                     <img src="images/gold.png"> <b>3</b> &nbsp;&nbsp;&nbsp; <img src="images/silver.png"> <b>5</b> &nbsp;&nbsp;&nbsp; <img src="images/bronze.png"> <b>7</b><br>
                     <br>
                     <h3 style="font-weight:300;">Rank: <b>74th</b></h3>
                     <br>
                      <h3 style="font-weight:300;">Earnings: <b>$1,543</b></h3>
                   </div>
                   
                   </div>
          </div>
         </div>
    </div>
</div>
</section>

<div class="container-fluid min-page">
<div class="col-xs-12">
           <div class="panel">
              <div class="panel-body">
                  <div class="row">
                   <div style="padding:10px;">
                    <div class="col-xs-12 col-sm-6">
    					<div class="panel-title">Create a Ticket</div>
                           <form role="form" id="create-ticket" enctype="multipart/form-data" action="" method="POST">
                       
<input type="hidden" name="_token" value="68051ad88f7d063ca4728751fc29fee78fb5b26f9b93c5fcb21a8d14e56c8e88">
                         <div class="form-group">
                           <label for="text" style="font-size:14px;"><br>Subject</label>
                           <select name="subject" class="form-control">
                             <option value="" id="hide">Select a Subject</option>
                             <option value="general-support">Support</option>
                           </select>
                         </div>
                         
                         <div class="form-group">
                           <label for="text" style="font-size:14px;">Match ID</label>
                               <input type="text" class="form-control" id="inputEmail" placeholder="M-114543">
                         </div>
                      
                         <div class="form-group">
                           <label for="text" style="font-size:14px;">Issue</label>
                               <textarea class="form-control" name="content" rows="4" cols="40"></textarea>
                         </div>

                         <div style="float:right;">
                           <input type="submit" value="Create Ticket" name="create-ticket" class="btn btn-primary">
                           </div>


                       </form>
                        </div>
                    
                    <div class="col-xs-12 col-sm-6">
    					<div class="panel-title">My Tickets</div>
                                <div class="table-responsive">
     <table class="table table-hover">
     <thead>
      <tr>
        <th width="20%">ID</th>
        <th width="20%">SUBJECT</th>
        <th width="20%">REPLIES</th>
        <th width="20%">CREATED</th>
        <th width="20%">LINK</th>
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <td width="20%" valign="middle">#0090983</td>
        <td width="20%" valign="middle">Login Issues</td>
        <td width="20%" valign="middle">3 Replies</td>
        <td width="20%" valign="middle">November 11th, 2018</td>
        <td width="20%" valign="middle"><a href="#">VIEW</a></td>
      </tr>
      <tr>
        <td width="20%" valign="middle">#0090983</td>
        <td width="20%" valign="middle">Login Issues</td>
        <td width="20%" valign="middle">3 Replies</td>
        <td width="20%" valign="middle">November 11th, 2018</td>
        <td width="20%" valign="middle"><a href="#">VIEW</a></td>
      </tr>
      <tr>
        <td width="20%" valign="middle">#0090983</td>
        <td width="20%" valign="middle">Login Issues</td>
        <td width="20%" valign="middle">3 Replies</td>
        <td width="20%" valign="middle">November 11th, 2018</td>
        <td width="20%" valign="middle"><a href="#">VIEW</a></td>
      </tr>
      <tr>
        <td width="20%" valign="middle">#0090983</td>
        <td width="20%" valign="middle">Login Issues</td>
        <td width="20%" valign="middle">3 Replies</td>
        <td width="20%" valign="middle">November 11th, 2018</td>
        <td width="20%" valign="middle"><a href="#">VIEW</a></td>
      </tr>
    </tbody>
  </table>
  </div>
                        </div>
     	 </div>
        </div>
      </div>
     </div>
   </div>
   
  </div>
<?php include("footer.php"); ?>