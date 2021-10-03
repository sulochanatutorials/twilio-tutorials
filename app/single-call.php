<?php include('header.php');?>

    <div class="row">
    <div class="col-md-6">
       <p class="instructions">Twilio Client</p>
          <div id="client-name"></div>
       <div id="call-controls">
          <p class="instructions">Make a Call:</p>


           <div class="form-group mb-2">
             <label for="phone-number"></label>
             <input id="phone-number" class="form-control" type="text" placeholder="Enter a phone # or client name" autocomplete="off" />
           </div>
         
          <button id="button-call" class="btn btn-success">Call</button>
          <button id="button-hangup" class="btn btn-danger" style="display: none;">Hangup</button>



          <div id="volume-indicators">
            <label>Mic Volume</label>
            <div id="input-volume"></div><br/><br/>
            <label>Speaker Volume</label>
            <div id="output-volume"></div>
          </div>
        </div>
        <div id="log"></div>

      <div id="controls">
        <div id="info">
          
          <div id="output-selection">
            <label>Ringtone Devices</label>
            <select id="ringtone-devices" multiple></select>
            <label>Speaker Devices</label>
            <select id="speaker-devices" multiple></select><br/>
            <a id="get-devices">Seeing unknown devices?</a>
          </div>
        </div>
       
      </div>
    </div>
    <div class="col-md-6">
      
    </div>
  </div>
  </div>
  

<?php include('footer.php');?>
<script>
  setActiveLink('single');
</script>