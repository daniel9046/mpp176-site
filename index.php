<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
		<title>Multiplayer Piano</title>
		<meta name="description" content="An online piano you can play alone or with others in real-time. MIDI support, 88 keys, velocity sensitive.  You can show off your skill or chat while listening to others play."/>
		<link id="IMPORTANTUPDATER" rel="stylesheet" href="/screen.css?v=<?php echo date("h.s.ms-m.d.y") ?>"/>
	</head>
	<body>
    <div id="ownerxss">
    </div>
		<div id="social">
            <div id="discord-btn" class="ugly-button" onclick="window.location.href = 'https://discord.gg/ecbeCPzXZR'">Discord</div>
        
		</div>


	<div id="chat">
    <ul></ul>
    <input id="chat-input" placeholder="You can chat with this thing." class="translate" maxlength="512"
      autocomplete="off" />
  </div>

  <div id="room-notice"></div>

  <div id="names"></div>

  <div id="piano"></div>

  <div id="cursors"></div>

		<noscript>
			<center>
				<p>
					Multiplayer Piano is an online, full 88-key piano you can play alone or with others in real-time.  Plug up your MIDI keyboard, MIDI in and out are supported.  You should be able to hear some seriously talented piano players performing here!  Join in or just chat and listen.
				</p>
				<p>
					For good performance, Chrome is highly recommended.  Firefox also supports the requisite Web Audio API, but performance may not be as good.  Chrome has Web MIDI.
				</p>
				<p>
					Of course, first you need to <a href="http://www.enable-javascript.com/" class="link">Enable Javascript</a> or it won't do anything...!
				</p>
			</center>
		</noscript>

		<div id="bottom">
			<div class="relative">
				<div id="room">
					<div class="info"></div>
					<div class="expand"></div>
					<div class="more">
						<div class="new translate">New Room...</div>
					</div>
				</div>
 <div id="new-room-btn" class="ugly-button translate">New Room...</div>
      <div id="play-alone-btn" class="ugly-button">Play Alone</div>
      <div id="room-settings-btn" class="ugly-button">Room Settings</div>
      <div id="midi-btn" class="ugly-button translate">MIDI In/Out</div>
      <div id="record-btn" class="ugly-button translate">Record MP3</div>
      <div id="synth-btn" class="ugly-button translate">Synth</div>
      <div id="sound-btn" class="ugly-button sound-btn">Sound Select</div>
      <div id="client-settings-btn" class="ugly-button client-settings-btn">Client Settings</div>
      <div id="setev1-btn" class="ugly-button setev1-btn" style="display: none;">Set everyone</div>
      <div id="clearchat-btn" class="ugly-button clearchat-btn" style="display: none;">Clear Chat</div>
      <div id="getcrown-btn" class="ugly-button getcrown-btn" style="display: none;">Get Crown</div>
      <div id="vanish-btn" class="ugly-button vanish-btn" style="display: none;">Vanish</div>
				<div id="status"></div>
				<div id="volume">
					<input type="range" id="volume-slider" min="0.0" max="1.0" step="0.01">
				</div>
				<div id="volume-label">volume</div>
				<div id="quota">
					<div class="value"></div>
				</div>
			</div>
		</div>

  <div id="modal">
    <div class="bg"></div>
    <div id="modals">
      <div id="sound-warning" class="dialog">
        <p>This site makes a lot of sound! You may want to adjust the volume before continuing.</p>
        <button class="submit">PLAY</button>
      </div>
      <div id="set-everyone" class="dialog">
        <p>Set everyone's Name.</p>
        <p><input type="text" placeholder="Name" id="namesetok"></p>
        <button class="submit">PLAY</button>
      </div>
      <div id="new-room" class="dialog">
        <p><input type="text" name="name" placeholder="room name" class="text translate" maxlength="512" /></p>
        <p><label><input type="checkbox" name="visible" class="checkbox translate" checked>Visible (open to everyone)</label></p>
        <button class="submit">go</button>
      </div>
      <div id="room-settings" class="dialog">
        <p>
        <div class="ugly-button drop-crown">Drop crown</div>
        </p>
        <p><label><input type="checkbox" name="visible" class="checkbox translate" checked>Visible (open to everyone)</label></p>
        <p><label><input type="checkbox" name="chat" class="checkbox translate" checked>Enable Chat</label></p>
        <p><label><input type="checkbox" name="crownsolo" class="checkbox">Only Owner can Play</label></p>
        <p><label><input type="checkbox" name="nocussing" class="checkbox">No Cussing</label></p>
        <p><label>Inner color: &nbsp;<input type="color" name="color" placeholder="" maxlength="7" class="color"></label></p>
        <p><label>Outer color: &nbsp;<input type="color" name="color2" placeholder="" maxlength="7" class="color"></label></p>
        <p><label>Player limit: &nbsp;<input type="text" name="limit" maxlength="2" value="50"></label></p>
        <button class="submit">APPLY</button>
      </div>
      <div id="rename" class="dialog">
        <p><input type="text" name="name" placeholder="My Fancy New Name" maxlength="40" class="text" />
          <input type="color" name="color" placeholder="" maxlength="7" class="color" />
        </p>
        <button class="submit">USER SET</button>
      </div>
      <div id="siteban" class="dialog">
        <p><label>User ID: <input type="text" name="id" placeholder="User's ID" maxlength="24" class="text" /></label></p>
        <p><label>Reason: <select name="reasonSelect">
              <option value="Discrimination against others">Discrimination</option>
              <option value="Discussion of inappropriate topics">Inappropriate discussion</option>
              <option value="Sharing or advertising inappropriate content">Inappropriate content</option>
              <option value="Discussing self-harm or very negative topics">Discussing self-harm</option>
              <option value="Spamming the piano in lobbies">Piano spam in lobbies</option>
              <option value="Spamming chat in lobbies">Chat spam in lobbies</option>
              <option value="Evading site-wide punishments">Evading site-wide punishments</option>
              <option value="Evading user's mutes or kickbans">Evading mutes or kickbans</option>
              <option value="Exploiting bugs">Exploiting bugs</option>
              <option value="Phishing or IP grabbing">Phishing/IP grabbing</option>
              <option value="Abusing bots or scripts">Abusing bots or scripts</option>
              <option value="Promoting violence or illegal activities">Promoting violence/illegal activities</option>
              <option value="Promoting breaking the rules">Promoting breaking the rules</option>
              <option value="Giving out another user's personal information without their consent">Giving other user's personal information</option>
              <option value="Sending the same or similar messages throughout multiple rooms">Sending the same message in many rooms</option>
              <option value="Holding the crown in a room that does not belong to you">Holding the crown in someone else's room</option>
              <option value="Abusing permissions or higher quotas">Abusing permissions/quotas</option>
              <option value="Misleading others through impersonation">Impersonation</option>
              <option value="Lying about users on the site in a way that negatively affects them">Lying about other users</option>
              <option value="custom">Custom...</option>
            </select>
            <input type="text" name="reasonText" placeholder="Ban reason..." maxlength="512" class="text" style="width: 100%;" /></label>
          </label></p>
        <p><label>Duration: <br><input type="number" name="durationNumber" placeholder="Amount of unit..." value="5" class="text" style="width: 60%" />
            <select name="durationUnit">
              <option value="seconds">Seconds</option>
              <option value="minutes">Minutes</option>
              <option value="hours">Hours</option>
              <option value="days">Days</option>
              <option value="weeks">Weeks</option>
              <option value="months">Months</option>
              <option value="years">Years</option>
              <option value="permanent">Permanent</option>
            </select>
          </label>
          </label>
        </p>
        <p><label>Note: <textarea name="note" cols="49" rows="5" maxlength="512" placeholder="Optional note for staff..."></textarea></label></p>
        <p name="errorText" style="color:red; font-size: 16px;"></p>
        <button class="submit">BAN</button>
      </div>
      <div id="account" class="dialog">
        <p>
          <label>Log in: <div class="ugly-button login-discord">Discord</div></label>
        </p>
        <div id="account-info">
          <div id="logged-in-text" class="text logged-in-text">Logged in as</div>
          <img id="avatar-image" class="avatar-image"></img>
          <div id="logged-in-user-text" class="logged-in-user-text"></div>
        </div>
        <div id="logout-btn" class="ugly-button logout-btn">Log out</div>
      </div>
      <div id="client-settings" class="dialog">
        <div class="client-settings-tablink client-settings-button" onclick="changeClientSettingsTab(event, 'Chat')">Chat</div>
        <div class="client-settings-tablink client-settings-button" onclick="changeClientSettingsTab(event, 'MIDI')">MIDI</div>
        <div class="client-settings-tablink client-settings-button" onclick="changeClientSettingsTab(event, 'Piano')">Piano</div>
        <div class="client-settings-tablink client-settings-button" onclick="changeClientSettingsTab(event, 'Misc')">Misc</div>
        <br>
        <div id="client-settings-content"></div>
        <div id="client-settings-ok-btn" class="client-settings-button">Ok</div>
      </div>
    </div>
  </div>


		<script src="/jquery.min.js"></script>
		<script src="/util.js"></script>
		<script id="IMPORTANTUPDATER" src="/Client.js?v=<?php echo date("h.s.ms-m.d.y") ?>"></script>
		<script src="/NoteQuota.js"></script>
		<script src="/lame.min.js"></script>
		<script src="/Color.js"></script>
		<script src="/ebsprite.js"></script>
		<script id="IMPORTANTUPDATER" src="/script.js?v=<?php echo date("h.s.ms-m.d.y") ?>"></script>
		<script src="drawing.js?v=<?php echo date("h.s.ms-m.d.y") ?>"></script>
		<script src="extbinary.js?v=<?php echo date("h.s.ms-m.d.y") ?>"></script>
		<script src="curssettings.js?v=<?php echo date("h.s.ms-m.d.y") ?>"></script>
		<script src="addon.js?v=<?php echo date("h.s.ms-m.d.y") ?>"></script>
	</body>
</html>
