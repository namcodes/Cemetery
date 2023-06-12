
  <div class="modal fade" id="user-settings" style="display: none" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Settings</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form action="actions/users.php" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <input type="text" name="_person-id" value="<?= $user_row['user_id'] ?>" hidden>
            <div class="form-group">
              <label for="avatar">Avatar</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="avatar" class="custom-file-input" />
                  <label class="custom-file-label" for="avatar">Choose file</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="fname">First Name</label>
              <input type="text" class="form-control first-name" name="fname" value="<?= $first_name ?>" required />
            </div>
            <div class="form-group">
              <label for="lname">Last Name</label>
              <input type="text" class="form-control last-name" name="lname" value="<?= $last_name ?>" required />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email_user" type="text" class="form-control email" value="<?= $email ?>" name="email" required />
              <div class="invalid-feedback">
                Enter a valid email address e.g : Sample@gmail.com
              </div>
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" />
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button class="btn btn-danger" data-dismiss="modal">Close</button>
            <button name="user-session" class="btn btn-primary" id="button-submit3" type="submit">
              Save Changess
            </button>
          </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>