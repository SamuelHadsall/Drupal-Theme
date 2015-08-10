if(navigator.appName=='Microsoft Internet Explorer')
WF_ERR_LOG_PREVENT_CATCH=true;
(function(window,document){
"use strict";
window.workface_err_log=window.workface_err_log||{bound:false,dev_env:('WF_DEV_ENV'in window&&window.WF_DEV_ENV===true),force_log:false,debug:false,log_url:('WF_DEV_ENV'in window&&window.WF_DEV_ENV===true)?"http://192.168.1.11:8081":"https://status.workface.com/log-js-error",listen:function(){if(workface_err_log.bound)return;
workface_err_log.bound=true;if('WF_FORCE_ERR_LOGGING'in window)
workface_err_log.force_log=WF_FORCE_ERR_LOGGING;
workface_err_log.debug=('console'in window&&typeof(console.log)=='function'&&workface_err_log.dev_env);var old_f=('onerror'in window&&typeof(window.onerror)=='function')?window.onerror:false;
window.onerror=function(e_msg,file,line){
window.workface_err_log.err(e_msg,file,line);if(old_f!==false)
old_f(e_msg,file,line);return true}},err:function(e_msg,file,line){if(e_msg=='Script error.'||!e_msg||!file){if(workface_err_log.debug)
console.log("WF DEV: JS error - Xdomain, cannot access error details");return};if(workface_err_log._ignore(e_msg,file))return;if(workface_err_log.debug&&workface_err_log.dev_env)
console.log('WF DEV: JS error ('+e_msg+' : '+file+' : '+line+')');if(!workface_err_log.dev_env||workface_err_log.force_log){if(file.toLowerCase().indexOf('workface')===-1)return;var q='?_='+Math.floor((Math.random()*1e6)+1)+'&e_msg='+encodeURIComponent(e_msg)+'&file='+encodeURIComponent(file)+'&line='+encodeURIComponent(line)+'&ua='+encodeURIComponent(navigator.userAgent)+'&src='+encodeURIComponent(window.location),i=new Image();
i.src=workface_err_log.log_url+q}},_ignore:function(e_msg,file){if(e_msg=='Error loading script'&&file.indexOf('.workface.com/user-status?')!=-1)return true}};
window.workface_err_log.listen()})(window,document);
(function(window,document){
"use strict";try{if(typeof window.workface_resource_loader=='undefined')
(function(window,document){
"use strict";if(!window.console)
console={log:function(){}};
window.workface_resource_loader={stylesheets:[],scripts:[],css_onloads:[],css_tests:{'font-family':'fontFamily'},load_js:function(url,load_if_exists,onload_funct,onload_data,conditional_load_funct,onload_cb_if_noload){var cb=function(a,b,c,d,e,f){var aa=a,bb=b,cc=c,dd=d,ee=e,ff=f;return function(){
workface_resource_loader._load_js(aa,bb,cc,dd,ee,ff)}};
workface_resource_loader.DOMready(window,cb(url,load_if_exists,onload_funct,onload_data,conditional_load_funct,onload_cb_if_noload))},_load_js:function(url,load_if_exists,onload_funct,onload_data,conditional_load_funct,onload_cb_if_noload){var found=false;if(!load_if_exists)for(var i=0,l=workface_resource_loader.scripts.length;i<l;i++)if(url==workface_resource_loader.scripts[i]){
found=true;break};if(found&&!onload_cb_if_noload)return;var load_script=true;if(conditional_load_funct!==false&&typeof conditional_load_funct=='function'){
load_script=conditional_load_funct();if(!load_script&&!onload_cb_if_noload)return};if(!found&&load_script){
workface_resource_loader.scripts.push(url);var s=document.createElement('script');
s.src=url;
s.async=true;
s.type='text/javascript';if(onload_funct!==false&&typeof onload_funct=='function'){var workface_resource_loader_script_onload=function(){
onload_funct(onload_data)};if(s.readyState){
s.onreadystatechange=function(){if(s.readyState=='loaded'||s.readyState=='complete'){
s.onreadystatechange=null;
workface_resource_loader_script_onload()}}}else 
s.onload=workface_resource_loader_script_onload};
document.getElementsByTagName('HEAD')[0].appendChild(s)}else if(onload_funct!==false&&typeof onload_funct=='function')
onload_funct(onload_data)},load_css:function(url,onload_params){var cb=function(a,b){var aa=a,bb=b;return function(){
workface_resource_loader._load_css(aa,bb)}};
workface_resource_loader.DOMready(window,cb(url,onload_params))},_load_css:function(url,onload_params){var found=false;for(var i=0,l=workface_resource_loader.stylesheets.length;i<l;i++)if(url==workface_resource_loader.stylesheets[i]){
found=true;break};if(!found){if(document.createStyleSheet){
document.createStyleSheet(url)}else{var link=document.createElement('link');
link.rel='stylesheet';
link.type='text/css';
link.href=url;
document.getElementsByTagName('body')[0].appendChild(link)};
workface_resource_loader.stylesheets.push(url)};if(onload_params!==false){
workface_resource_loader.css_onloads.push(onload_params);
workface_resource_loader.is_stylesheet_loaded(workface_resource_loader.css_onloads.length-1)}},is_stylesheet_loaded:function(onloads_ind){var opts=workface_resource_loader.css_onloads[onloads_ind],testElem=document.createElement('span');
testElem.className=opts.className;
document.getElementsByTagName('body')[0].appendChild(testElem);var style_val=workface_resource_loader.get_specific_style_of_elem(testElem,opts.testStyle);
(typeof style_val!='undefined'&&(style_val===opts.testValue||style_val===opts.testValue+' !important'))?opts.cb(opts.cb_data):setTimeout("window.workface_resource_loader.is_stylesheet_loaded("+onloads_ind+");",250);
document.getElementsByTagName('body')[0].removeChild(testElem)},get_specific_style_of_elem:function(elem,get_style){if(window.getComputedStyle){var value=document.defaultView.getComputedStyle(elem,null).getPropertyValue(get_style)}else if(elem.currentStyle){if(typeof workface_resource_loader.css_tests[get_style]!='undefined'&&workface_resource_loader.css_tests[get_style]!=null)
get_style=workface_resource_loader.css_tests[get_style];var value=elem.currentStyle[get_style]};return value},DOMready:function(win,fn){var done=false,top=true,doc=win.document,root=doc.documentElement,add=doc.addEventListener?'addEventListener':'attachEvent',rem=doc.addEventListener?'removeEventListener':'detachEvent',pre=doc.addEventListener?'':'on',init=function(e){if(e.type=='readystatechange'&&doc.readyState!='complete')return;
(e.type=='load'?win:doc)[rem](pre+e.type,init,false);if(!done&&(done=true))
fn.call(win,e.type||e)},poll=function(){try{
root.doScroll('left')}catch(e){
setTimeout(poll,50);return};
init('poll')};if(doc.readyState=='complete'){
fn.call(win,'lazy')}else{if(doc.createEventObject&&root.doScroll){try{
top=!win.frameElement}catch(e){};if(top)
poll()};
doc[add](pre+'DOMContentLoaded',init,false);
doc[add](pre+'readystatechange',init,false);
win[add](pre+'load',init,false)}},window_onload:function(func){var oldonload=window.onload;if(typeof window.onload!='function'){
window.onload=func}else 
window.onload=function(){
oldonload();
func()}}}})(window,document);if(typeof window.wf_inpage_links=='undefined'){
window.wf_inpage_links={a_elems:[],a_class:'workface-user-conn-anchor',protocol:'http:',css_path:'workface.com/inpage/css/inpage_links.min.css?lastmod=1351180404',stati_path:'workface.com/services/status_updater.min.js?lastmod=1377112902',offline_c:'wf_inpage_status_div_ind',online_c:'wf_inpage_status_div_ind_online',active_rel:'workface_external_connect',status_namespace:'inpage_button_links',resources_needed:2,_data_property:'data-options',_avl_options:{hide_if_offline:true},setup:function(){if(window.location.protocol==='https:')
wf_inpage_links.protocol='https:';
wf_inpage_links.get_inpage_elems();if(wf_inpage_links.a_elems.length==0)return;
wf_inpage_links.get_resources_before_drawing()},get_resources_before_drawing:function(){if(wf_inpage_links.resources_needed==0)return wf_inpage_links.init_button_creation();
workface_resource_loader.load_css(this.protocol+'//'+this.css_path,{className:'workface-inpagea-css-ready',testStyle:'font-family',testValue:"wf-inpagea-cssready",cb_data:null,cb:window.wf_inpage_links.resource_loaded});
workface_resource_loader.load_js(this.protocol+'//'+this.stati_path,false,window.wf_inpage_links.resource_loaded,null,function(){return('workface_stati_upd'in window)?false:true},true)},update:function(){
wf_inpage_links.a_elems=[];
_wfs.remove_indicators_for_namespace(wf_inpage_links.status_namespace);
wf_inpage_links.get_inpage_elems();if(wf_inpage_links.a_elems.length==0)return;
wf_inpage_links.get_resources_before_drawing()},draw_and_subscribe_anchor_button:function(node,udomain){if(node.rel!==wf_inpage_links.active_rel){var h='<div class="wf_inpage_status_div_ind"></div>',d=document.createElement('div');
d.className=wf_inpage_links.offline_c;
node.innerHTML='';
node.appendChild(d);
node.rel=wf_inpage_links.active_rel;
node.href=node.href+(node.href.indexOf('?')!==-1?'&':'?')+'f=1'};
_wfs.add_indicator({type:'inpage_link',user:udomain,namespace:wf_inpage_links.status_namespace,cb_data:null,cb:false})},resource_loaded:function(d){
wf_inpage_links.resources_needed--;if(wf_inpage_links.resources_needed==0)
wf_inpage_links.wait_for_statm()},wait_for_statm:function(){if('workface_stati_upd'in window)return wf_inpage_links.init_button_creation();
setTimeout(wf_inpage_links.wait_for_statm,100)},init_button_creation:function(){for(var i=0,l=wf_inpage_links.a_elems.length;i<l;i++)
wf_inpage_links.draw_and_subscribe_anchor_button(wf_inpage_links.a_elems[i]['node'],wf_inpage_links.a_elems[i]['user']);
_wfs.subscribe_to_digest_cb(wf_inpage_links.update_statuses,wf_inpage_links.status_namespace);
_wfs.check_now()},update_statuses:function(statuses){for(var i=0,l=wf_inpage_links.a_elems.length;i<l;i++){var e=wf_inpage_links.a_elems[i];if(!(e.user in statuses))continue;var d=e.node.children[0];
d.className=statuses[e.user]?wf_inpage_links.online_c:wf_inpage_links.offline_c;if('hide_if_offline'in e.options)
e.node.style.visibility=statuses[e.user]?'visible':'hidden'}},get_inpage_elems:function(){if(typeof document.getElementsByClassName=='function'){var els=document.getElementsByClassName(wf_inpage_links.a_class)}else{var els=[],all=document.getElementsByTagName('*'),pattern=new RegExp("(^|\\s)"+wf_inpage_links.a_class+"(\\s|$)");for(var i=0,l=all.length;i<l;i++)if(pattern.test(all[i].className))
els.push(all[i])};for(var j=0,l=els.length;j<l;j++){if(els[j].tagName.toUpperCase()!='A')return;try{var opt_str=els[j].getAttribute(wf_inpage_links._data_property),opt_arr=(opt_str&&opt_str.length>0)?opt_str.split(' '):[]}catch(e){var opt_arr=[]};var opts={};for(var k=0;k<opt_arr.length;k++)if(opt_arr[k]in wf_inpage_links._avl_options)
opts[opt_arr[k]]=true;
wf_inpage_links.a_elems.push({node:els[j],user:els[j].href.split('/').pop().split('?')[0],options:opts});if(typeof els[j].title=='undefined'||els[j].title==null||els[j].title=='')
els[j].title='Connect with me!';
els[j].target='_blank'}}};
window._wfip=wf_inpage_links;
workface_resource_loader.DOMready(window,function(){
wf_inpage_links.setup()})}}catch(e){if('workface_err_log'in window)if('WF_ERR_LOG_PREVENT_CATCH'in window){throw e}else 
workface_err_log.err(e.name+' - '+e.message,e.fileName||false,e.lineNumber||false)}})(window,document)
