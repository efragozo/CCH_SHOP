ropped_count",e.length,e[0].apiKey);break;case o.AWTEventsDroppedReason.MaxRetryLimit:t._addStat("d_retry_limit",e.length,e[0].apiKey),t._addStat("records_dropped_count",e.length,e[0].apiKey);break;case o.AWTEventsDroppedReason.QueueFull:t._addStat("d_queue_full",e.length,e[0].apiKey)}},eventsRejected:function(e,n){switch(n){case o.AWTEventsRejectedReason.InvalidEvent:t._addStat("r_inv",e.length,e[0].apiKey);break;case o.AWTEventsRejectedReason.KillSwitch:t._addStat("r_kl",e.length,e[0].apiKey);break;case o.AWTEventsRejectedReason.SizeLimitExceeded:t._addStat("r_size",e.length,e[0].apiKey)}t._addStat("r_count",e.length,e[0].apiKey)},eventsRetrying:null}),setTimeout((function(){return t.flush()}),6e4)},e.teardown=function(){this._isInitalized&&(this.flush(),this._isInitalized=!1)},e.eventReceived=function(t){e._addStat("records_received_count",1,t)},e.flush=function(){var e=this;if(this._isInitalized){for(var t in this._stats)this._stats.hasOwnProperty(t)&&this._sendStats(this._stats[t],t);this._stats={},setTimeout((function(){return e.flush()}),6e4)}},e._addStat=function(e,t,n){if(this._isInitalized&&n!==i.StatsApiKey){var r=i.getTenantId(n);this._stats[r]||(this._stats[r]={}),this._stats[r][e]?this._stats[r][e]=this._stats[r][e]+t:this._stats[r][e]=t}},e._isInitalized=!1,e._stats={},e}();t.default=s},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0});var i=n(20),r=n(0),o=n(5),s=n(3),a=function(){function e(){}return e.getPayloadBlob=function(e,t){var n,a=!1,u=new i.IO.MemoryStream,c=new i.CompactBinaryProtocolWriter(u);for(var l in c._WriteFieldBegin(i._BondDataType._BT_MAP,3,null),c._WriteMapContainerBegin(t,i._BondDataType._BT_STRING,i._BondDataType._BT_LIST),e)if(a)n||(n={}),n[l]=e[l],delete e[l];else if(e.hasOwnProperty(l)){c._WriteString(l);var d=e[l];c._WriteContainerBegin(1,i._BondDataType._BT_STRUCT),c._WriteFieldBegin(i._BondDataType._BT_STRING,2,null),c._WriteString("act_default_source"),c._WriteFieldBegin(i._BondDataType._BT_STRING,5,null),c._WriteString(s.newGuid()),c._WriteFieldBegin(i._BondDataType._BT_INT64,6,null),c._WriteInt64(s.numberToBondInt64(Date.now())),c._WriteFieldBegin(i._BondDataType._BT_LIST,8,null);var p=u._GetBuffer().length+1;c._WriteContainerBegin(e[l].length,i._BondDataType._BT_STRUCT);for(var f=u._GetBuffer().length-p,_=0;_<d.length;++_){var h=u._GetBuffer().length;if(this.writeEvent(d[_],c),u._GetBuffer().length-h>2936012)o.default.eventsRejected([d[_]],r.AWTEventsRejectedReason.SizeLimitExceeded),d.splice(_--,1),u._GetBuffer().splice(h),this._addNewDataPackageSize(d.length,u,f,p);else if(u._GetBuffer().length>2936012){u._GetBuffer().splice(h),n||(n={}),e[l]=d.splice(0,_),n[l]=d,this._addNewDataPackageSize(e[l].length,u,f,p),a=!0;break}}c._WriteStructEnd(!1)}return c._WriteStructEnd(!1),{payloadBlob:u._GetBuffer(),remainingRequest:n}},e._addNewDataPackageSize=function(e,t,n,r){for(var o=i._Encoding._Varint_GetBytes(i.Number._ToUInt32(e)),s=0;s<n;++s){if(!(s<o.length)){t._GetBuffer().slice(r+s,n-s);break}t._GetBuffer()[r+s]=o[s]}},e.writeEvent=function(e,t){t._WriteFieldBegin(i._BondDataType._BT_STRING,1,null),t._WriteString(e.id),t._WriteFieldBegin(i._BondDataType._BT_INT64,3,null),t._WriteInt64(s.numberToBondInt64(e.timestamp)),t._WriteFieldBegin(i._BondDataType._BT_STRING,5,null),t._WriteString(e.type),t._WriteFieldBegin(i._BondDataType._BT_STRING,6,null),t._WriteString(e.name);var n={},o=0,a={},u=0,c={},l=0,d={},p=0,f={},_=0,h={},v=0,y={},g=0;for(var T in e.properties){if(e.properties.hasOwnProperty(T))if((S=e.properties[T]).cc>0)y[T]=S,g++;else if(S.pii>0)h[T]=S,v++;else switch(S.type){case r.AWTPropertyType.String:n[T]=S.value,o++;break;case r.AWTPropertyType.Int64:a[T]=S.value,u++;break;case r.AWTPropertyType.Double:c[T]=S.value,l++;break;case r.AWTPropertyType.Boolean:d[T]=S.value,p++;break;case r.AWTPropertyType.Date:f[T]=S.value,_++}}if(o)for(var T in t._WriteFieldBegin(i._BondDataType._BT_MAP,13,null),t._WriteMapContainerBegin(o,i._BondDataType._BT_STRING,i._BondDataType._BT_STRING),n)if(n.hasOwnProperty(T)){var m=n[T];t._WriteString(T),t._WriteString(m.toString())}if(v)for(var T in t._WriteFieldBegin(i._BondDataType._BT_MAP,30,null),t._WriteMapContainerBegin(v,i._BondDataType._BT_STRING,i._BondDataType._BT_STRUCT),h)if(h.hasOwnProperty(T)){var S=h[T];t._WriteString(T),t._WriteFieldBegin(i._BondDataType._BT_INT32,1,null),t._WriteInt32(1),t._WriteFieldBegin(i._BondDataType._BT_INT32,2,null),t._WriteInt32(S.pii),t._WriteFieldBegin(i._BondDataType._BT_STRING,3,null),t._WriteString(S.value.toString()),t._WriteStructEnd(!1)}if(