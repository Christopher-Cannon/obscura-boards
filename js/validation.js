// Validates the post form -- Must have either a comment or an image
function post_validation() {
  var post_body = document.forms["create_post_form"]["post_body"].value;
  var post_file = document.getElementById("post_file").files.length;

  if(post_body == "" && post_file == 0) {
    document.getElementById("post-form-error").innerHTML = " - Require a comment or an image";

    return false;
  } else {
    document.getElementById("post-form-error").innerHTML = "";

    return true;
  }
}
