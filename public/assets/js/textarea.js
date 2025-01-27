document.addEventListener("DOMContentLoaded", function () {
  const textarea_auto_resize = document.getElementById("textarea_auto_resize");
  if (!textarea_auto_resize) { 
    return; 
  }
  textarea_auto_resize.addEventListener("input", function () {
    this.style.height = "auto";
    this.style.height = this.scrollHeight + "px";
  });

});
