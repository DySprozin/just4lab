var firstpost;
var firstfade;
var spoiler_text_off = '<div style="color: orange; float: right;"> (двойной щелчок по тексту свернет его)</div>';
var spoiler_text_on = '<div style="vertical-align: super; font-size: 10pt; color: green; float: right; cursor: pointer;"> раскрывай меня полностью</div>';

function topic() {
 var h;
 topics = gpnrGetClass("topic");
 topic_grads = gpnrGetClass("topic_grad");
 for (var i = 0; i < topics.length; i++) {
  h = topics[i].offsetHeight;
  h = h + '';
  if (h.search("112") != "-1") topic_grads[i].style.top = '-119px';
 }
 
 if (document.forms['kva_form'].antispam) {
  document.forms['kva_form'].antispam.value=md5(getCookie("antispam"));
 }
 
 firstpost = document.getElementById("first_post");
 firstfade = document.getElementById("first_fade");
 if (firstpost) {
  if (firstpost.className == "first_fade") {
   firstpost.style.display="none";
   firstfade.style.display="block";
  }
 }
 
 var spoiler = gpnrGetClass("spoiler_tag_body");
 if (spoiler[0].className != "fake_class_by_anabot_ru") {
  for (var i = 0; i < spoiler.length; i++) {
   spoiler[i].style.display = 'none';
   spoiler[i].previousSibling.innerHTML += spoiler_text_on;
   spoiler[i].ondblclick = function() {
    spoiler_fun(this.previousSibling);
   }
  }
 }
}

function open_post() {
 if (firstpost.style.display=="block") {
  firstpost.style.display = "none";
  firstfade.style.color = "#000000";
 }
 else {
  firstpost.style.display = "block";
  firstfade.style.color = "#999999";
 }
}

function spoiler_fun(title) {
 var body = title.nextSibling;
 if (body.style.display == 'block') {
  title.innerHTML = title.innerHTML.replace(spoiler_text_off, spoiler_text_on);
  body.style.display =  'none';
  title.style.cursor = 'n-resize';
  title.style.borderBottom = '1px dashed #000000';
 }
 else {
  spoiler_fun_title = title.innerHTML;
  title.innerHTML = title.innerHTML.replace(spoiler_text_on, spoiler_text_off);
  body.style.display =  'block';
  title.style.borderBottom = '0px';
 }
}

