ice.WebExtension.Parameters.CoercionType]!=OSF.DDA.DataCoercion.getCoercionDefaultForBinding(b.type)&&(a[Microsoft.Office.WebExtension.Parameters.StartRow]||a[Microsoft.Office.WebExtension.Parameters.StartColumn]))throw OSF.DDA.ErrorCodeManager.errorCodes.ooeCoercionTypeNotMatchBinding;return a},privateStateCallbacks:[{name:Microsoft.Office.WebExtension.Parameters.Id,value:b}]})})();OSF.OUtil.augmentList(OSF.DDA.BindingProperties,{RowCount:"BindingRowCount",ColumnCount:"BindingColumnCount",HasHeaders:"HasHeaders"});OSF.DDA.MatrixBinding=function(d,c,b,a){OSF.DDA.MatrixBinding.uber.constructor.call(this,d,c);OSF.OUtil.defineEnumerableProperties(this,{type:{value:Microsoft.Office.WebExtension.BindingType.Matrix},rowCount:{value:b?b:0},columnCount:{value:a?a:0}})};OSF.OUtil.extend(OSF.DDA.MatrixBinding,OSF.DDA.Binding);OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.PropertyDescriptors.BindingProperties,fromHost:[{name:OSF.DDA.BindingProperties.Id,value:0},{name:OSF.DDA.BindingProperties.Type,value:1},{name:OSF.DDA.SafeArray.UniqueArguments.BindingSpecificData,value:2}],isComplexType:true});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:Microsoft.Office.WebExtension.Parameters.BindingType,toHost:[{name:Microsoft.Office.WebExtension.BindingType.Text,value:0},{name:Microsoft.Office.WebExtension.BindingType.Matrix,value:1},{name:Microsoft.Office.WebExtension.BindingType.Table,value:2}],invertible:true});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.MethodDispId.dispidAddBindingFromSelectionMethod,fromHost:[{name:OSF.DDA.PropertyDescriptors.BindingProperties,value:OSF.DDA.SafeArray.Delegate.ParameterMap.self}],toHost:[{name:Microsoft.Office.WebExtension.Parameters.Id,value:0},{name:Microsoft.Office.WebExtension.Parameters.BindingType,value:1}]});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.MethodDispId.dispidAddBindingFromNamedItemMethod,fromHost:[{name:OSF.DDA.PropertyDescriptors.BindingProperties,value:OSF.DDA.SafeArray.Delegate.ParameterMap.self}],toHost:[{name:Microsoft.Office.WebExtension.Parameters.ItemName,value:0},{name:Microsoft.Office.WebExtension.Parameters.Id,value:1},{name:Microsoft.Office.WebExtension.Parameters.BindingType,value:2},{name:Microsoft.Office.WebExtension.Parameters.FailOnCollision,value:3}]});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.MethodDispId.dispidReleaseBindingMethod,toHost:[{name:Microsoft.Office.WebExtension.Parameters.Id,value:0}]});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.MethodDispId.dispidGetBindingMethod,fromHost:[{name:OSF.DDA.PropertyDescriptors.BindingProperties,value:OSF.DDA.SafeArray.Delegate.ParameterMap.self}],toHost:[{name:Microsoft.Office.WebExtension.Parameters.Id,value:0}]});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.MethodDispId.dispidGetAllBindingsMethod,fromHost:[{name:OSF.DDA.ListDescriptors.BindingList,value:OSF.DDA.SafeArray.Delegate.ParameterMap.self}]});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.MethodDispId.dispidGetBindingDataMethod,fromHost:[{name:Microsoft.Office.WebExtension.Parameters.Data,value:OSF.DDA.SafeArray.Delegate.ParameterMap.self}],toHost:[{name:Microsoft.Office.WebExtension.Parameters.Id,value:0},{name:Microsoft.Office.WebExtension.Parameters.CoercionType,value:1},{name:Microsoft.Office.WebExtension.Parameters.ValueFormat,value:2},{name:Microsoft.Office.WebExtension.Parameters.FilterType,value:3},{name:OSF.DDA.PropertyDescriptors.Subset,value:4}]});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.MethodDispId.dispidSetBindingDataMethod,toHost:[{name:Microsoft.Office.WebExtension.Parameters.Id,value:0},{name:Microsoft.Office.WebExtension.Parameters.CoercionType,value:1},{name:Microsoft.Office.WebExtension.Parameters.Data,value:2},{name:OSF.DDA.SafeArray.UniqueArguments.Offset,value:3}]});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.SafeArray.UniqueArguments.BindingSpecificData,fromHost:[{name:OSF.DDA.BindingProperties.RowCount,value:0},{name:OSF.DDA.BindingProperties.ColumnCount,value:1},{name:OSF.DDA.BindingProperties.HasHeaders,value:2}],isComplexType:true});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.PropertyDescriptors.Subset,toHost:[{name:OSF.DDA.SafeArray.UniqueArguments.Offset,value:0},{name:OSF.DDA.SafeArray.UniqueArguments.Run,value:1}],canonical:true,isComplexType:true});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.SafeArray.UniqueArguments.Offset,toHost:[{name:Microsoft.Office.WebExtension.Parameters.StartRow,value:0},{name:Microsoft.Office.WebExtension.Parameters.StartColumn,value:1}],canonical:true,isComplexType:true});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.SafeArray.UniqueArguments.Run,toHost:[{name:Microsoft.Office.WebExtension.Parameters.RowCount,value:0},{name:Microsoft.Office.WebExtension.Parameters.ColumnCount,value:1}],canonical:true,isComplexType:true});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.MethodDispId.dispidAddRowsMethod,toHost:[{name:Microsoft.Office.WebExtension.Parameters.Id,value:0},{name:Microsoft.Office.WebExtension.Parameters.Data,value:1}]});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.MethodDispId.dispidAddColumnsMethod,toHost:[{name:Microsoft.Office.WebExtension.Parameters.Id,value:0},{name:Microsoft.Office.WebExtension.Parameters.Data,value:1}]});OSF.DDA.SafeArray.Delegate.ParameterMap.define({type:OSF.DDA.MethodDispId.dispidClearAllRowsMethod,toHost:[{name:Microsoft.Office.WebExtension.Parameters.Id,value:0}]});OSF.OUtil.augmentList(OSF.DDA.PropertyDescriptors,{TableDataProperties:"TableDataProperties"});OSF.OUtil.augmentList(OSF.DDA.BindingProperties,{RowCount:"BindingRowCount",ColumnCount:"BindingColumnCount",HasHeaders:"HasHeaders"});OSF.DDA.TableDataProperties={TableRows:"TableRows",TableHeaders:"TableHeaders"};OSF.DDA.TableBinding=function(f,e,d,c,b){OSF.DDA.TableBinding.uber.constructor.call(this,f,e);OSF.OUtil.defineEnumerableProperties(this,{type:{value:Microsoft.Office.WebExtension.BindingType.Table},rowCount:{value:d?d:0},columnCount:{value:c?c:0},hasHeaders:{value:b?b:false}});var a=OSF.DDA.AsyncMethodNames;OSF.DDA.DispIdHost.addAsyncMethods(this,[a.AddRowsAsync,a.AddColumnsAsync,a.DeleteAllDataValuesAsync])};OSF.OUtil.extend(OSF.DDA.TableBinding,OSF.DDA.Binding);OSF.DDA.AsyncMethodNames.addNames({AddRowsAsync:"addRowsAsync",AddColumnsAsync:"addColumnsAsync",DeleteAllDataValuesAsync:"deleteAllDataValuesAsync"});(function(){function a(a){return a.id}OS