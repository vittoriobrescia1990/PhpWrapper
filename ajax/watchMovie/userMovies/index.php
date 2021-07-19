<!-- this php html file is the template file to insert your movie link and id in there by the text. this file is ment to stay here in order for this file to work. -->
<div class="modal-dialog" id="export_overlay">
    <div class="modal-content">
        <div class="modal-header">
            <button class="close" type="button" data-dismiss="modal" aria-hidden="true">&times;</button>
               <h3 class="modal-title">Watch Movie</h3>
                  <iframe scrolling="no" allowTransparency="true" allowfullscreen frameborder="0" width="540" height="360" src="insert your lvm link here except for localhost lvms./player?movieOwner=African+Vulture%E2%84%A2&movieOwnerId=0uWOI2JiCdHU&movieId=insert your movie id here.&movieLid=0&movieTitle=Test&movieDesc=This+video+is+ment+for+testing+out+this+video+player.&userId=&username=&uemail=&ut=-1&numContact=&apiserver=insert your lvm link here except for localhost lvms./&duration=27&playcount=0&thumbnailURL=https://phpwrapper.herokuapp.com/_user-files/videos/video-thumb-<?php if (isset($_GET["videothumb"])) { echo $_GET["videothumb"]; } else { echo "2"; } ?>.png&copyable=0&isPublished=0&ctc=go&tlang=en_US&is_private_shared=1&autostart=0&appCode=go&is_slideshow=0&originalId=0zEt_fo4L-5k&is_emessage=0&animationPath=https://josephcrosmanplays532.github.io/animation/66453a3ba2cc5e1b/&isEmbed=1&&&&isTemplate=0&showButtons=1&chain_mids=&averageRating=5&ratingCount=48&fb_app_url=insert your lvm link here except for localhost lvms./&ad=0&endStyle=0&isWide=0&pwm=1&s3base=https://s3.amazonaws.com/fs.goanimate.com/,https://assets.vyond.com/"></iframe>
        </div>
        <div class="modal-footer">
            <button class="btn btn-default text-uppercase text-center" type="button" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
