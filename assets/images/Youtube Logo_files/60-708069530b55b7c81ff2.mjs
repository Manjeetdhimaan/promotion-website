(window.__LOADABLE_LOADED_CHUNKS__=window.__LOADABLE_LOADED_CHUNKS__||[]).push([[60],{"37no":function(e,t,n){n.d(t,"a",(function(){return s})),n.d(t,"b",(function(){return r})),n.d(t,"c",(function(){return a}));var i=n("7w6Q");const o=.01,s=Object.freeze({OTHER:0,FACEBOOK:1,GPLUS_ONE:2,GSI:3});function r(e){return new Promise((t,n)=>{if(document.querySelector(`script[src="${e}"]`))return void t();const i=document.createElement("script");i.src=e,i.async=!0,i.addEventListener("load",t),i.addEventListener("error",n),document.getElementsByTagName("head")[0].appendChild(i)})}function a(e,t=s.OTHER,n=!1){const r=n?"web":"mweb";return new Promise((n,a)=>{if(document.querySelector(`script[src="${e}"]`)){let e=0;if(t===s.GPLUS_ONE)if(window.gapi)n();else{const t=setInterval(()=>{window.gapi||20===e?(clearInterval(t),n()):(e+=1,i.a.increment(`${r}.loadScript.gplus_one.tries_${e}`,o))},100)}else if(t===s.FACEBOOK)if(window.FB)n();else{const t=setInterval(()=>{window.FB||20===e?(clearInterval(t),n()):(e+=1,i.a.increment(`${r}.loadScript.facebook.tries_${e}`,o))},100)}else if(t===s.GSI)if(window.google)n();else{const t=setInterval(()=>{window.google||20===e?(clearInterval(t),n()):(e+=1,i.a.increment(`${r}.loadScript.gsi.tries_${e}`,o))},100)}else n()}else{const t=document.createElement("script");t.src=e,t.async=!0,t.addEventListener("load",n),t.addEventListener("error",a),document.getElementsByTagName("head")[0].appendChild(t)}})}},"4NNh":function(e,t,n){n.d(t,"a",(function(){return i})),n.d(t,"c",(function(){return o})),n.d(t,"b",(function(){return s}));n("kmwA");const i="https://accounts.google.com/gsi/client",o=e=>{e&&e.cancelLastOperation&&e.cancelLastOperation().then(()=>{})},s=e=>{return JSON.parse(decodeURIComponent(atob((t=e.split(".")[1],(t||"").replace(/-/g,"+").replace(/_/g,"/"))).split("").map(e=>"%"+("00"+e.charCodeAt(0).toString(16)).slice(-2)).join("")));var t}},"4NbJ":function(e,t,n){n.d(t,"a",(function(){return a})),n.d(t,"c",(function(){return l})),n.d(t,"d",(function(){return u})),n.d(t,"f",(function(){return b})),n.d(t,"e",(function(){return p})),n.d(t,"b",(function(){return h}));var i=n("kmwA"),o=n("bKKl"),s=n("37no"),r=n("nKUr");const a="postmessage",c="profile email",l=e=>Object(s.c)("https://accounts.google.com/gsi/client",s.a.GSI).then(()=>{const t=window.google,n=t&&t.accounts&&t.accounts.id;return n?new Promise((t,o)=>{n.initialize({client_id:i.a.settings.GPLUS_CLIENT_ID,auto_select:!0,callback:n=>e({resolve:t,reject:o,response:n}),cancel_on_tap_outside:!1,context:"use"}),n.prompt()}):Promise.reject(new Error("no_account_found"))});function d(e){const t={scope:c,client_id:"694505692171-31closf3bcmlt59aeulg2j81ej68j6hk.apps.googleusercontent.com",app_package_name:"com.pinterest",access_type:"offline",cookie_policy:"single_host_origin"},n=function(t){e&&e(t)};return new Promise((e,i)=>{Object(s.c)("https://apis.google.com/js/client:platform.js",s.a.GPLUS_ONE).then(()=>{n("google_script_load"),"undefined"!=typeof window&&window.gapi?window&&window.gapi&&window.gapi.auth2?(n("google_script_init_onuse"),window.gapi.auth2.init(t).then(t=>{n("google_init_success"),e(t)},({error:e})=>{n("google_init_error"),i("init_onuse_"+e)})):(n("google_script_init_exists"),window.gapi.load("auth2",{callback:()=>{n("google_auth2_load_complete"),window.gapi.auth2.init(t).then(t=>{n("google_init_success"),e(t)},({error:e})=>{n("google_init_error"),i("init_exists_"+e)})},onerror:({error:e})=>{n("google_auth2_script_load_error"),i(e)},timeout:15e3,ontimeout:()=>{n("google_auth2_script_load_timeout"),i("timeout")}})):n("google_init_error")})})}function u(e,t,n,i=!1){return function(e,t,n,i=!1){return new Promise((s,r)=>{if(i&&Object(o.a)())return void r();const l=function(e){n&&n(e)};l("google_button_init"),d(n).then(()=>{l("google_sdk_load"),"undefined"!=typeof window&&window.gapi?t.signin2.render(e,{scope:c,onsuccess:e=>{l("google_button_success");const t=e.getAuthResponse(!0),n={data:{gplus_id_token:t.id_token,gplus_access_token:t.access_token,gplus_expires_at:t.expires_at,gplus_autologin:i||!1},signupOptions:{gplus_code:"",gplus_id_token:t.id_token,gplus_redirect_uri:a}};s(n)},onfailure:()=>{l("google_button_failure"),r("gapi_signin2_render_error")}}):l("google_init_error")},e=>{l("google_auth2_sdk_init_error"),r(e)})})}(e,t,n,i)}function g(){if("undefined"==typeof window)return null;const e=window.google;return e&&e.accounts&&e.accounts.id}function b(e,t){if("undefined"==typeof window)return;const n=g();if(n&&e.current){const t=e.current.offsetWidth;n.renderButton(e.current,{size:"large",shape:"pill",text:"continue_with",theme:"outline",width:t+"px"})}else t("not_initialized")}function p(e,t,n,o){Object(s.b)("https://accounts.google.com/gsi/client").then(()=>{if("undefined"==typeof window)return;const s=g();s&&(s.initialize({client_id:i.a.settings.GPLUS_CLIENT_ID,callback:n,cancel_on_tap_outside:!1,context:"use",itp_support:o}),b(e,t))})}function h({size:e}){return Object(r.jsx)("svg",{height:e,viewBox:"0 0 512 512",width:e,xmlns:"http://www.w3.org/2000/svg",children:Object(r.jsxs)("g",{fill:"none",fillRule:"evenodd",children:[Object(r.jsx)("path",{d:"M482.56 261.36c0-16.73-1.5-32.83-4.29-48.27H256v91.29h127.01c-5.47 29.5-22.1 54.49-47.09 71.23v59.21h76.27c44.63-41.09 70.37-101.59 70.37-173.46z",fill:"#4285f4"}),Object(r.jsx)("path",{d:"M256 492c63.72 0 117.14-21.13 156.19-57.18l-76.27-59.21c-21.13 14.16-48.17 22.53-79.92 22.53-61.47 0-113.49-41.51-132.05-97.3H45.1v61.15c38.83 77.13 118.64 130.01 210.9 130.01z",fill:"#34a853"}),Object(r.jsx)("path",{d:"M123.95 300.84c-4.72-14.16-7.4-29.29-7.4-44.84s2.68-30.68 7.4-44.84V150.01H45.1C29.12 181.87 20 217.92 20 256c0 38.08 9.12 74.13 25.1 105.99l78.85-61.15z",fill:"#fbbc05"}),Object(r.jsx)("path",{d:"M256 113.86c34.65 0 65.76 11.91 90.22 35.29l67.69-67.69C373.03 43.39 319.61 20 256 20c-92.25 0-172.07 52.89-210.9 130.01l78.85 61.15c18.56-55.78 70.59-97.3 132.05-97.3z",fill:"#ea4335"}),Object(r.jsx)("path",{d:"M20 20h472v472H20V20z"})]})})}},"B/oJ":function(e,t,n){n.d(t,"b",(function(){return p})),n.d(t,"a",(function(){return f}));var i=n("q1tI"),o=n("/MKj"),s=n("9Hil"),r=n("CpRl"),a=n("k1Bv"),c=n("o+5w"),l=n("yweb"),d=n("ulr2"),u=n("PmFr"),g=n("n6mq"),b=n("nKUr");const p=e=>new Set([...u.c,...u.b,...u.p]).has(e),h={default:3e3,email:3e3,facebook:5e3,google:4e3,gtap:4500};function f({isReducedHeader:e,platform:t}){const n=Object(l.c)(),u=Object(o.useDispatch)(),f=Object(o.useSelector)(({session:e})=>e.country);Object(i.useEffect)(()=>{"gtap"!==t&&u(Object(d.f)())},[]);const _=p(f);return Object(b.jsx)(i.Fragment,{children:_?Object(b.jsx)(c.a,{viewType:10,viewParameter:259,children:Object(b.jsxs)(g.f,{position:"fixed",top:!0,left:!0,right:!0,bottom:!0,width:"100%",color:"white",children:[Object(b.jsx)(s.a,{color:"darkGray",duration:h[t],finalProgress:95}),Object(b.jsxs)(g.u,{alignItems:"stretch",justifyContent:"start",direction:"column",height:"100%",children:[Object(b.jsxs)(g.f,{margin:10,children:[Object(b.jsx)(g.v,{overflow:"normal",size:e?"md":"lg",children:n._("Your account is being created!","account created heading","account created heading")}),Object(b.jsx)(g.cb,{overflow:"normal",children:n._("You can now save ideas, get personalized recommendations, and more","loading state description while waiting for any sign up registration to complete","loading state description while waiting for any sign up registration to complete")})]}),Object(b.jsx)(g.u,{alignItems:"center",flex:"grow",justifyContent:"center",children:Object(b.jsx)(r.a,{delayOffset:-5,xRadiusAdjustment:40,yRadiusAdjustment:40,children:Object(b.jsx)(g.f,{alignItems:"center",color:"lightWash",direction:"column",display:"flex",height:120,justifyContent:"end",overflow:"hidden",rounding:"circle",width:120,children:Object(b.jsx)(g.w,{accessibilityLabel:n._("Loading","Loading state for any sign up registration","Loading state for any sign up registration"),color:"gray",icon:"person",size:"90"})})})})]})]})}):Object(b.jsx)(a.a,{})})}},CpRl:function(e,t,n){var i=n("q1tI"),o=n("ihsa"),s=n("n6mq"),r=n("4lNu");const a={yellow:"#FAB904",orange:"#FF6400",green:"#0FA573",blue:"#0074e8",purple:"#B469EB"},c="DelightfulBubbles__",l=["DelightfulBubbles__fadeIn {\n  to {\n    opacity: 1;\n  }\n}\n","DelightfulBubbles__growShrink {\n  0% {\n    transform: scale(0);\n  }\n  50% {\n    transform: scale(1);\n  }\n  100% {\n    transform: scale(0);\n  }\n}\n","DelightfulBubbles__swirl {\n  0% {\n    transform: rotate(0deg) translateX(-50%);\n  }\n  100% {\n    transform: rotate(-360deg) translateX(-50%);\n  }\n}\n",...Object.keys(a).map(e=>{const t=((e,t)=>{const n=e.length,i=e.indexOf(t)+1>=n?0:e.indexOf(t)+1;return e[i]})(Object.keys(a),e);return`${c}colorChange_${e} {\n      0% {\n        background-color: ${a[e]};\n      }\n      50% {\n        background-color: ${a[t]};\n      }\n    }\n    `})],d=Object(r.a)(l);var u=n("nKUr");function g(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}const b=e=>{const{delay:t,diameter:n,height:i,initialColor:o,width:r,xOffset:l,yOffset:d}=e,g=((e,t,n,i,o,s,r,l)=>({bubblePositionStyles:{position:"absolute",marginLeft:s/2-o+"px",marginTop:n/2-o+"px",left:r+"px",top:l+"px"},bubbleSwirlStyles:{animation:`${c}swirl 6s ease-in-out ${e}s infinite forwards`,WebkitAnimation:`${c}swirl 6s ease-in-out ${e}s infinite forwards`},bubbleGrowShrinkStyles:{transform:"scale(0)",WebkitTransform:"scale(0)",animation:`${c}growShrink 6s ease-in-out ${e}s infinite alternate`,WebkitAnimation:`${c}growShrink 6s ease-in-out ${e}s infinite alternate`},bubbleShapeStyles:{height:t+"px",width:t+"px",borderRadius:"50%",backgroundColor:a[i],opacity:0,animation:`${c}colorChange_${i} 12s steps(1, start) ${e}s infinite forwards,\n      ${c}fadeIn 3s linear ${e}s 1 forwards`,WebkitAnimation:`${c}colorChange_${i} 12s steps(1, start) ${e}s infinite forwards,\n      ${c}fadeIn 3s linear ${e}s 1 forwards`}}))(t,n,i,o,Math.floor(n/2),r,l,d);return Object(u.jsx)(s.f,{dangerouslySetInlineStyle:{__style:g.bubblePositionStyles},children:Object(u.jsx)(s.f,{dangerouslySetInlineStyle:{__style:g.bubbleSwirlStyles},children:Object(u.jsx)(s.f,{dangerouslySetInlineStyle:{__style:g.bubbleGrowShrinkStyles},children:Object(u.jsx)(s.f,{dangerouslySetInlineStyle:{__style:g.bubbleShapeStyles}})})})})};class p extends i.Component{constructor(...e){super(...e),g(this,"state",{isInitialized:!1})}componentDidMount(){this.requestAnimationFrameId=window.requestAnimationFrame(()=>{this.setState({isInitialized:!0})})}shouldComponentUpdate(e,t){return!e.numBubbles===this.props.numBubbles||!t.isInitialized===this.state.isInitialized}getSize(){const{width:e,height:t}=this.props;return void 0!==e&&void 0!==t?{width:e,height:t}:this.containerElement?{height:this.containerElement.offsetHeight,width:this.containerElement.offsetWidth}:{height:void 0,width:void 0}}createBubbles(e,t){const{bubbleSize:n,delayFactor:i,delayOffset:o,numBubbles:s,xRadiusAdjustment:c,yRadiusAdjustment:l}=this.props,d=e+2*l,g=t+2*c,p=[],h=Object.keys(a);for(let a=0;a<s;a+=1){const s=n+Object(r.c)(-4,4),c=h[a%h.length],{x:l,y:f}=Object(r.b)(d,g);p.push(Object(u.jsx)(b,{delay:a*i+o,diameter:s,initialColor:c,xOffset:l,yOffset:f,height:e,width:t},a))}return p}render(){const{height:e,width:t}=this.getSize();return Object(u.jsxs)(s.f,{height:e,width:t,position:"relative",children:[Object(u.jsx)(o.a,{unsafeCSS:d}),Object(u.jsxs)(s.f,{position:"absolute",ref:e=>this.containerElement=e,children:[this.state.isInitialized&&this.createBubbles(e||0,t||0),Object(u.jsx)(s.f,{position:"relative",children:this.props.children})]})]})}}g(p,"defaultProps",{bubbleSize:16,numBubbles:10,xRadiusAdjustment:0,yRadiusAdjustment:0,delayFactor:1,delayOffset:0});t.a=p},Hgxh:function(e,t,n){n.d(t,"a",(function(){return a}));var i=n("mp1x"),o=n("yweb"),s=n("n6mq"),r=n("nKUr");function a({type:e,onDismiss:t}){const n=Object(o.c)(),a="facebook"===e?n._("Oops! Facebook isn't available","socialAuthDisabled.facebook.title","Title for the modal shown when Facebook services are not working"):n._("Oops! Google isn't available","socialAuthDisabled.google.title","Title for the modal shown when Google services are not working"),c="facebook"===e?n._("Looks like Facebook isn't available right now.\n\nGive another option a try or refresh the page and try again later.","socialAuthDisabled.facebook.description","Description for the modal shown when Facebook services are not working"):n._("Looks like Google isn't available right now.\n\nGive another option a try or refresh the page and try again later.","socialAuthDisabled.google.description","Description for the modal shown when Google services are not working");return Object(r.jsx)(i.a,{accessibilityCloseIconLabel:n._("Close","Close modal window","Close modal window"),hideCloseIcon:!0,isOpen:!0,onDismiss:t,type:"social_auth_disabled_modal",children:Object(r.jsxs)(s.f,{padding:2,children:[Object(r.jsx)(s.f,{marginBottom:3,children:Object(r.jsx)(s.v,{size:"md",accessibilityLevel:1,children:a})}),Object(r.jsx)(s.f,{marginBottom:3,children:Object(r.jsx)(s.cb,{children:c})}),Object(r.jsx)(s.u,{alignItems:"stretch",justifyContent:"start",direction:"column",children:Object(r.jsx)(s.f,{paddingY:1,children:Object(r.jsx)(s.g,{accessibilityLabel:n._("OK","socialAuthDisabled.okButton","Button that closes modal shown when Facebook or Google services are not working"),size:"lg",color:"red",text:n._("OK","socialAuthDisabled.okButton","Button that closes modal shown when Facebook or Google services are not working"),onClick:t})})})]})})}},IAo4:function(e,t,n){n.d(t,"a",(function(){return s})),n.d(t,"b",(function(){return r}));const i=/^(0[1-9]|1[012])\/(0[1-9]|[12][0-9]|3[01])\/((19|20)[0-9]{2})$/,o=/^(19|20)[0-9]{2}$/,s=e=>{if(i.test(e)||o.test(e)){return new Date(e).getTime()/1e3}return-1},r=(e,t)=>{const n=new Date;if(i.test(e)){const i=new Date(n.getFullYear()-t,n.getMonth(),n.getDate());return new Date(e)<=i}if(o.test(e)){const i=n.getFullYear()-t-1;return new Date(e).getFullYear()<=i}return!1}},bKKl:function(e,t,n){n.d(t,"a",(function(){return o}));var i=n("gxu6");const o=()=>!!i.a("logged_out")||!!i.a("fba")},k1Bv:function(e,t,n){var i=n("yweb"),o=n("n6mq"),s=n("nKUr");t.a=({isInModal:e})=>{const t=Object(i.c)();return Object(s.jsx)(o.f,{position:e?"absolute":"fixed",top:!0,left:!0,dangerouslySetInlineStyle:{__style:{backgroundColor:"rgba(255,255,255, .5)",height:"100%",width:"100%",zIndex:1}},display:"flex",alignItems:"center",justifyContent:"center",children:Object(s.jsx)(o.U,{accessibilityLabel:t._("Loading","Full page loading state","Full page loading state"),show:!0})})}},vKjI:function(e,t,n){n.d(t,"a",(function(){return x}));var i=n("gxu6"),o=n("0G5S"),s=n("PmFr");function r(){return function(e){const t={};return e.forEach(e=>{const n=JSON.parse(Object(o.a)(e));n&&(t[e]=n)}),JSON.stringify(t)}([s.l])}var a=n("eOdZ"),c=n("Ptwp"),l=n("lIBN"),d=n("28DW"),u=n("ARZW"),g=n("VL22"),b=n("jUT+"),p=n("vtuW"),h=n("B/oJ"),f=n("eNqV"),_=n("J8m7"),j=n("A+Hl"),m=n("AYc3"),w=n("2y2F"),O=n("2oSX");const x=(e,t)=>(t,n)=>{let x=0;const{session:y}=n(),{country:v}=y,S=Object(h.b)(v),I=new Promise((e,t)=>{S?setTimeout(()=>{e()},3e3):e()}),k=()=>{const n=y.isAuthenticated,h=Object(j.c)(y.origin)&&!1;return(h?Object(j.b)({invite_code:y.inviteCode,locale:y.locale,referrer:y.referrer,...e}):a.a.create("UserRegisterResource",{...e,get_user:!0,user_behavior_data:r(),visited_pages:Object(o.a)(s.g)}).callCreate()).then(i=>I.then(()=>{var r,a,_,j;Object(p.b)("d_pif_invite"),Object(o.b)(s.g),t((r=i.resource_response.data.user,a=i.client_context.placed_experiences,_=i.client_context.active_experiments,j=i.client_context.triggerable_experiments,{type:b.pb,payload:{user:r,experiences:a,active:_,triggerable:j}})),n&&Object(l.a)("registration.signup_success");const x=e.email||e.username||null,y=e.password||null;if(navigator.credentials&&x&&y)try{const e=new window.PasswordCredential({id:x,password:y});Object(d.a)("unauth_mweb.navigatorCredentials.store.attempt"),navigator.credentials&&"function"==typeof navigator.credentials.store&&navigator.credentials.store(e).then(()=>{Object(d.a)("unauth_mweb.navigatorCredentials.store.success")})}catch(S){Object(d.a)("unauth_mweb.navigatorCredentials.store.error")}return Object(O.e)({action:"signup",type:Object(g.b)(e),isCrossDomain:h,isMultipleAccounts:n}),Object(c.a)(),n&&Object(f.j)(),Object(w.a)(v)&&Object(m.g)({id:u.g,eventCategory:"NewUsers",eventName:"Mobile"}),Object(w.f)(v)&&Object(m.k)({id:"flashtalking-m-reg",eventCategory:"NewUsers",eventName:"Mobile"}),Object(w.c)(v)&&Object(m.h)({pixelId:"dpm_pixel_new_user_event",eventCategory:"NewUsers",eventName:"Mobile"}),Object(w.d)(v)&&Object(m.i)({pixelId:"dentsu_pixel_new_user_event",eventCategory:"NewUsers",eventName:"Mobile"}),i})).catch(t=>{const{apiErrorCode:o=null}=t;if(o&&o===_.d&&(Object(d.a)("multi_step_set_age_restrict_cookie"),i.b("r_r","1",4320)),!(x<3)||o&&![_.h,_.g].includes(o))throw Object(O.f)({action:"signup",type:Object(g.b)(e),error:t.message,isCrossDomain:h,isMultipleAccounts:n}),n&&Object(l.a)("registration.signup_error"),t;x+=1,k()})};return k()}},"yep/":function(e,t,n){n.d(t,"a",(function(){return _}));var i=n("q1tI"),o=n("/MKj"),s=n("Hgxh"),r=n("yweb"),a=n("4NbJ"),c=n("n6mq"),l=n("nKUr");function d(){const e=Object(r.c)(),[t,n]=Object(i.useState)();return Object(l.jsxs)(c.f,{position:"relative",children:[Object(l.jsx)(c.bb,{onTap:()=>n(!0),children:Object(l.jsxs)(c.f,{position:"relative",display:"flex",alignItems:"center",justifyContent:"center",height:40,rounding:"pill",color:"lightGray",children:[Object(l.jsx)(c.f,{height:24,width:24,marginTop:1,children:Object(l.jsx)(a.b,{size:20})}),Object(l.jsx)(c.f,{marginStart:2,children:Object(l.jsx)(c.cb,{weight:"bold",children:e._("Connect with Google","googleConnectButtonWithDisabledSDK.buttonText","Connect with Google button text")})})]})}),t&&Object(l.jsx)(s.a,{type:"google",onDismiss:()=>n(!1)})]})}var u=n("QtD7"),g=n("4NNh"),b=n("QAzJ"),p=n("28DW");function h(e,t,n){return t in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}class f extends i.Component{constructor(...e){super(...e),h(this,"gsiButtonRef",Object(i.createRef)()),h(this,"gsiSecondHomepageButtonRef",Object(i.createRef)()),h(this,"handleGoogleConnectSuccess",()=>{const{onTouch:e}=this.props;e&&e(),Object(p.h)("press_google_login")})}componentDidMount(){const{browserType:e,isAuthenticated:t,isGoogleOneTapDisabled:n,isGoogleOneTapInitialized:i,enabledSafariOneTapITPExp:o,enablediOSOneTapITPExp:s,enabledChromeOneTapITPExp:r,platform:c}=this.props;n||t||!i?(Object(a.e)(this.gsiButtonRef,this.logGSIButton.bind(this),this.handleCredentialResponse.bind(this),"ios"===c&&(2===e&&o()||1===e&&r()||s())),t||i||Object(p.a)("mweb.gsi_button_fix.load_and_initialize_gsi_script")):Object(a.f)(this.gsiButtonRef,this.logGSIButton.bind(this))}componentDidUpdate(){const{browserType:e,isGoogleOneTapDisabled:t,isGoogleOneTapInitialized:n,showSecondGoogleButton:i,enabledSafariOneTapITPExp:o,enablediOSOneTapITPExp:s,enabledChromeOneTapITPExp:r,platform:c}=this.props;n?Object(a.f)(i?this.gsiSecondHomepageButtonRef:this.gsiButtonRef,this.logGSIButton.bind(this)):t&&Object(a.e)(i?this.gsiSecondHomepageButtonRef:this.gsiButtonRef,this.logGSIButton.bind(this),this.handleCredentialResponse.bind(this),"ios"===c&&(2===e&&o()||1===e&&r()||s()))}shouldComponentUpdate(e){const{isGoogleOneTapDisabled:t,isGoogleOneTapInitialized:n,showSecondGoogleButton:i}=this.props;return!n&&!!e.isGoogleOneTapInitialized||!t&&!!e.isGoogleOneTapDisabled||!!i}handleCredentialResponse(e){const t=e.credential;this.logGSIButton("select_by."+e.select_by);const n={google_open_id_token:t,autologin:!1},i=Object(g.b)(t),o={google_open_id_token:t,first_name:i.given_name,last_name:i.family_name,image_url:i.picture};this.props.onGoogleConnectSuccess(n,o)}logGSIButton(e){Object(p.a)("unauth_mweb.gsi_button."+e)}render(){const{showSecondGoogleButton:e}=this.props;return Object(l.jsx)(c.f,{position:"relative",children:Object(l.jsx)(c.bb,{onTap:()=>Object(p.a)("gsi_personalized_button.tap"),children:Object(l.jsx)(c.f,{height:44,children:e?Object(l.jsx)(c.f,{ref:this.gsiSecondHomepageButtonRef,position:"absolute",width:"100%"}):Object(l.jsx)(c.f,{ref:this.gsiButtonRef,position:"absolute",width:"100%"})})})})}}function _(e){const{isGoogleOneTapInitialized:t,isGoogleOneTapDisabled:n,browserType:i,platform:s}=Object(o.useSelector)(({session:e})=>({isGoogleOneTapInitialized:e.isGoogleOneTapInitialized,isGoogleOneTapDisabled:e.isGoogleOneTapDisabled,browserType:e.browserType,platform:e.userAgentPlatform})),{anyEnabled:r}=Object(b.b)("mweb_google_disabled"),a=Object(o.useDispatch)();return r?Object(l.jsx)(d,{}):Object(l.jsx)(f,{...e,isGoogleOneTapInitialized:t,isGoogleOneTapDisabled:n,browserType:i,platform:s,enabledSafariOneTapITPExp:()=>a(Object(u.a)("mweb_unauth_safari_one_tap")).startsWith("enabled"),enablediOSOneTapITPExp:()=>a(Object(u.a)("mweb_unauth_ios_one_tap")).startsWith("enabled"),enabledChromeOneTapITPExp:()=>a(Object(u.a)("mweb_unauth_chrome_one_tap")).startsWith("enabled")})}}}]);
//# sourceMappingURL=https://sm.pinimg.com/webapp/60-708069530b55b7c81ff2.mjs.map