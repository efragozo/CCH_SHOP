.EmailAddress;break;default:i=o.AWTUserIdType.Unknown}this._addContext("UserInfo.IdType",i.toString())}if(isNaN(t)||null===t||t===r.AWTPiiKind.NotSet||t>13)switch(n){case o.AWTUserIdType.Skype:t=r.AWTPiiKind.Identity;break;case o.AWTUserIdType.EmailAddress:t=r.AWTPiiKind.SmtpAddress;break;case o.AWTUserIdType.PhoneNumber:t=r.AWTPiiKind.PhoneNumber;break;case o.AWTUserIdType.SipAddress:t=r.AWTPiiKind.SipAddress;break;default:t=r.AWTPiiKind.NotSet}this._addContextWithPii("UserInfo.Id",e,t)},e.prototype.setUserAdvertisingId=function(e){this._addContext("UserInfo.AdvertisingId",e)},e.prototype.setUserTimeZone=function(e){this._addContext("UserInfo.TimeZone",e)},e.prototype.setUserLanguage=function(e){this._addContext("UserInfo.Language",e)},e.prototype._addContext=function(e,t){"string"==typeof t&&this._properties.setProperty(e,t)},e.prototype._addContextWithPii=function(e,t,n){"string"==typeof t&&this._properties.setPropertyWithPii(e,t,n)},e}();t.default=s},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=n(3),r="MicrosoftApplicationsTelemetryDeviceId",o="MicrosoftApplicationsTelemetryFirstLaunchTime",s="MSIE",a="Chrome",u="Firefox",c="Safari",l="Edge",d="Electron",p="SkypeShell",f="PhantomJS",_="Opera",h="Windows",v="Mac OS X",y="Windows Phone",g="Windows RT",T="iOS",m="Android",S="Linux",A="Chrome OS",E=/(windows|win32)/i,P=/ arm;/i,I=/windows\sphone\s\d+\.\d+/i,W=/(macintosh|mac os x)/i,b=/(iPad|iPhone|iPod)(?=.*like Mac OS X)/i,C=/(linux|joli|[kxln]?ubuntu|debian|[open]*suse|gentoo|arch|slackware|fedora|mandriva|centos|pclinuxos|redhat|zenwalk)/i,w=/android/i,B=/CrOS/i,O={5.1:"XP","6.0":"Vista",6.1:"7",6.2:"8",6.3:"8.1","10.0":"10"},k=function(){function e(){}return e.addPropertyStorageOverride=function(e){return!!e&&(this._propertyStorage=e,!0)},e.autoCollect=function(e,t,n){if(this._semanticContext=e,this._disableCookies=t,this._autoCollect(),n||"undefined"==typeof navigator||(n=navigator.userAgent||""),this._autoCollectFromUserAgent(n),this._disableCookies&&!this._propertyStorage)return this._deleteCookie(r),void this._deleteCookie(o);(this._propertyStorage||this._areCookiesAvailable&&!this._disableCookies)&&this._autoCollectDeviceId()},e.checkAndSaveDeviceId=function(e){if(e){var t=this._getData(r),n=this._getData(o);t!==e&&(n=i.getISOString(new Date)),this._saveData(r,e),this._saveData(o,n),this._setFirstLaunchTime(n)}},e._autoCollectDeviceId=function(){var e=this._getData(r);e||(e=i.newGuid()),this._semanticContext.setDeviceId(e)},e._autoCollect=function(){"undefined"!=typeof document&&document.documentElement&&this._semanticContext.setAppLanguage(document.documentElement.lang),"undefined"!=typeof navigator&&this._semanticContext.setUserLanguage(navigator.userLanguage||navigator.language);var e=(new Date).getTimezoneOffset(),t=e%60,n=(e-t)/60,i="+";n>0&&(i="-"),n=Math.abs(n),t=Math.abs(t),this._semanticContext.setUserTimeZone(i+(n<10?"0"+n:n.toString())+":"+(t<10?"0"+t:t.toString()))},e._autoCollectFromUserAgent=function(e){if(e){var t=this._getBrowserName(e);this._semanticContext.setDeviceBrowserName(t),this._semanticContext.setDeviceBrowserVersion(this._getBrowserVersion(e,t));var n=this._getOsName(e);this._semanticContext.setDeviceOsName(n),this._semanticContext.setDeviceOsVersion(this._getOsVersion(e,n))}},e._getBrowserName=function(e){return this._userAgentContainsString("OPR/",e)?_:this._userAgentContainsString(f,e)?f:this._userAgentContainsString(l,e)||this._userAgentContainsString("Edg",e)?l:this._userAgentContainsString(d,e)?d:this._userAgentContainsString(a,e)?a:this._userAgentContainsString("Trident",e)?s:this._userAgentContainsString(u,e)?u:this._userAgentContainsString(c,e)?c:this._userAgentContainsString(p,e)?p:"Unknown"},e._setFirstLaunchTime=function(e){if(!isNaN(e)){var t=new Date;t.setTime(parseInt(e,10)),e=i.getISOString(t)}this.firstLaunchTime=e},e._userAgentContainsString=function(e,t){return t.indexOf(e)>-1},e._getBrowserVersion=function(e,t){if(t===s)return this._getIeVersion(e);if(t===l){var n=this._getOtherVersion(t,e);return"Unknown"===n?this._getOtherVersion("Edg",e):n}return this._getOtherVersion(t,e)},e._getIeVersion=function(e){var t=e.match(new RegExp(s+" ([\\d,.]+)"));if(t)return t[1];var n=e.match(new RegExp("rv:([\\d,.]+)"));return n?n[1]:void 0},e._getOtherVersion=function(e,t){e===c&&(e="Version");var n=t.match(new RegExp(e+"/([\\d,.]+)"));return n?n[1]:"Unknown"},e._getOsName=function(e){return e.match(I)?y:e.match(P)?g:e.match(b)?T:e.match(w)?m:e.match(C)?S:e.match(W)?v:e.match(E)?h:e.match(B)?A:"Unknown"},e._getOsVersion=function(e,t){return t===h?this._getGenericOsVersion(e,"Windows NT"):t===m?this._getGenericOsVersion(e,t):t===v?this._getMacOsxVersion(e):"Unknown"},e._getGenericOsVersion=function(e,t){var n=e.match(new RegExp(t+" ([\\d,.]+)"));return n?O[n[1]]?O[n[1]]:n[1]:"Unknown"},e._getMacOsxVersion=function(e){var t=e.match(new RegExp(v+" ([\\d,_,.]+)"));if(t){var n=t[1].replace(/_/g,".");if(n){var i=this._getDelimiter(n);return i?n.split(i)[0]:n}}return"Unknown"},e._getDelimiter=function(e){return e.indexOf(".")>-1?".":e.indexOf("_")>-1?"_":null},e._saveData=function(e,t){if(this._propertyStorage)this._propertyStorage.setProperty(e,t);else if(this._areCookiesAvailable){var n=new Date;n.setTime(n.getTime()+31536e6);var i="expires="+n.toUTCString();document.cookie=e+"="+t+"; "+i}},e._getData=function(e){if(this._propertyStorage)return this._propertyStorage.getProperty(e)||"";if(this._areCookiesAvailable){e+="=";for(var t=document.cookie.split(";"),n=0;n<t.length;n++){for(var i=t[n],r=0;" "===i.charAt(r);)r++;if(0===(i=i.substring(r)).indexOf(e))return i.substring(e.length,i.length)}}return""},e._deleteCookie=function(e){this._areCookiesAvailable&&(document.cookie=e+"=;expires=Thu, 01 Jan 1970 00:00:01 GMT;")},e._disableCookies=!1,e._areCookiesAvailable="undefined"!=typeof document&&void 0!==document.cookie,e}();t.default=k},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=n(0),r=n(19),o=n(4),s=n(29