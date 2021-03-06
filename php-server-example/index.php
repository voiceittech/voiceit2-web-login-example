<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>VoiceIt Web Example</title>
  <link rel="stylesheet" type="text/css" href="css/semantic.min.css" />
  <link rel="stylesheet" type="text/css" href="css/example.css" />
  <link type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,700" rel="stylesheet">
  <script src="js/voiceit2.min.js"></script>
  <script src="js/index.js"></script>
</head>

<body class='exampleBody'>
  <div id="mainColumn" class="ui middle aligned center aligned grid">
    <div id="mainForm" class="ui large form">
      <h2 class="ui center aligned icon header loginText">
        <img src="images/logo.png" class="ui circular icon loginLogo">
        VoiceIt API 2 Web Example
      </h2>

      <div id="formOverlay">
        <form>
        <div class="ui segment">
          <div class="field" id="emailField">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="email" placeholder="E-mail address">
          </div>
            </div>
            <div class="field" id="passwordField">
              <div class="ui left icon input">
                <i class="lock icon"></i>
                <input type="password" name="password" placeholder="Password" autocomplete="none">
              </div>
              </div>
            </div>
          </form>
        </div>
          <div id="loadingContainer">
            <div class="ui active massive loader" id="loading"></div>
          </div>
          <div id="loginBtn" class="ui fluid large button viBtnStyle viBtnColor">
            Sign in to your account
          </div>
          <div id="messageLabel" class="ui fluid large button viBtnStyle"></div>
          <div id="biometricOptions" class="column">
            <div id='livenessTogglesContainer'>
              <div id='livenessContainer' class="ui toggle checkbox">
                <input id="livenessToggle" type="checkbox" name="public">
                <label for='public'>Liveness Enabled</label>
              </div>
              <div id='livenessAudioContainer' class="ui toggle checkbox">
                <input id="livenessAudioToggle" type="checkbox" name="audioPublic" checked>
                <label for='public'>Liveness Audio Enabled</label>
              </div>
            </div>
            <div class="biometricOptionsContainer">
              <div class="ui compact menu">
                <div class="ui simple dropdown item">
                  Voice
                  <i class="dropdown "></i>
                  <div class="menu">
                    <div class="item voice" id="voiceEnrollmentBtn">Enrollment</div>
                    <div class="item voice" id="voiceVerificationBtn">
                      <span>Verification</span>
                      <div id="enrollVoice" class="enrollmentTooltip ui left pointing label">
                        Please Enroll First
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ui compact menu">
                <div class="ui simple dropdown item">
                  Face
                  <i class="dropdown"></i>
                  <div class="menu">
                    <div class="item face" id="faceEnrollmentBtn">Enrollment</div>
                    <div class="item face" id="faceVerificationBtn">
                      <span>Verification</span>
                      <div id="enrollFace" class="enrollmentTooltip ui left pointing label">
                        Please Enroll First
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="ui compact menu">
                <div class="ui simple dropdown item">
                  Video
                  <i class="dropdown"></i>
                  <div class="menu">
                    <div class="item video" id="videoEnrollmentBtn">Enrollment</div>
                    <div class="item video" id="videoVerificationBtn">
                      <span>Verification</span>
                      <div id="enrollVideo" class="enrollmentTooltip ui right pointing label">
                        Please Enroll First
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body>
