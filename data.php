<?php $customCSS = "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css'> <link rel='stylesheet' href='css/data.css'>";
include "inc/html-top.php"; ?>
<section class="section">
  <h1 class="title is-size-1"> New Student Data Entry Form</h1>
    <div class="box">
        <div class="required">*required</div>
        <form method="post" action="form.php" class="data-entry">
			    <div class="field">
				    <label class="label" for="firstName"> First Name: *</label>
				    <div class="control"><input class="input" type = "text" name="firstName" id="firstName" required></div>
			    </div>

          <div class="field">
				    <label class="label" for="lastName"> Last Name: *</label>
				    <div class="control"><input class="input" type="text" name="lastName" id="lastName" required></div>
			    </div>

          <div class="field">
				    <label class="label" for="major"> Major: *</label>
				    <div class="control"><input class="input" type="text" name="major" id="major" required></div>
			    </div>

          <div class="field">
				    <label class="label" for="minor"> Minor: </label>
				    <div class="control"><input class="input" type="text" name="minor" id="minor"></div>
			    </div>

          <div class="field intro">
            <label class="label" for="intro"> Introduction: *</label>
            <div class="control"><textarea class="textarea is-small" rows="5" type="textarea" name="intro" id="intro" required></textarea></div>
          </div>

          <div class="file">
            <label class="file-label">
              <input class="file-input" type="file" name="picture" required>
              <span class="file-cta">
                <span class="file-icon">
                  <i class="fas fa-upload"></i>
                </span>
                <span class="file-label">
                  Upload a picture*
                </span>
              </span>
            </label>
          </div>
          <div class="field level-right">
				    <div class="control"><button class="button create" type="submit" name="Create" > Create Entry</button></div>
			    </div>

        </form>
  </div>
</section>
</body>
</html>
