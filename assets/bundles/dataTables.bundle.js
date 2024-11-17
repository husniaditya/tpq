!function(n){var i,r;"function"==typeof define&&define.amd?define(["jquery","datatables.net"],function(e){return n(e,window,document)}):"object"==typeof exports?(i=require("jquery"),r=function(e,t){t.fn.dataTable||require("datatables.net")(e,t)},"undefined"==typeof window?module.exports=function(e,t){return e=e||window,t=t||i(e),r(e,t),n(t,0,e.document)}:(r(window,i),module.exports=n(i,window,window.document))):n(jQuery,window,document)}(function(s,e,t){var n=s.fn.dataTable;return s.extend(!0,n.defaults,{renderer:"bootstrap"}),s.extend(!0,n.ext.classes,{container:"dt-container dt-bootstrap5",search:{input:"form-control form-control-sm"},length:{select:"form-select form-select-sm"},processing:{container:"dt-processing card"},layout:{row:"row mt-2 justify-content-between",cell:"d-md-flex justify-content-between align-items-center",tableCell:"col-12",start:"dt-layout-start col-md-auto me-auto",end:"dt-layout-end col-md-auto ms-auto",full:"dt-layout-full col-md"}}),n.ext.renderer.pagingButton.bootstrap=function(e,t,n,i,r){var o=["dt-paging-button","page-item"],i=(i&&o.push("active"),r&&o.push("disabled"),s("<li>").addClass(o.join(" ")));return{display:i,clicker:s("<button>",{class:"page-link",role:"link",type:"button"}).html(n).appendTo(i)}},n.ext.renderer.pagingContainer.bootstrap=function(e,t){return s("<ul/>").addClass("pagination").append(t)},n}),function(n){var i,r;"function"==typeof define&&define.amd?define(["jquery","datatables.net"],function(e){return n(e,window,document)}):"object"==typeof exports?(i=require("jquery"),r=function(e,t){t.fn.dataTable||require("datatables.net")(e,t)},"undefined"==typeof window?module.exports=function(e,t){return e=e||window,t=t||i(e),r(e,t),n(t,e,e.document)}:(r(window,i),module.exports=n(i,window,window.document))):n(jQuery,window,document)}(function(b,y,d){function a(e,t){if(!i.versionCheck||!i.versionCheck("2"))throw"DataTables Responsive requires DataTables 2 or newer";this.s={childNodeStore:{},columns:[],current:[],dt:new i.Api(e)},this.s.dt.settings()[0].responsive||(t&&"string"==typeof t.details?t.details={type:t.details}:t&&!1===t.details?t.details={type:!1}:t&&!0===t.details&&(t.details={type:"inline"}),this.c=b.extend(!0,{},a.defaults,i.defaults.responsive,t),(e.responsive=this)._constructor())}var i=b.fn.dataTable,e=(b.extend(a.prototype,{_constructor:function(){var o=this,r=this.s.dt,t=b(y).innerWidth(),e=(r.settings()[0]._responsive=this,b(y).on("orientationchange.dtr",i.util.throttle(function(){var e=b(y).innerWidth();e!==t&&(o._resize(),t=e)})),r.on("row-created.dtr",function(e,t,n,i){-1!==b.inArray(!1,o.s.current)&&b(">td, >th",t).each(function(e){e=r.column.index("toData",e);!1===o.s.current[e]&&b(this).css("display","none").addClass("dtr-hidden")})}),r.on("destroy.dtr",function(){r.off(".dtr"),b(r.table().body()).off(".dtr"),b(y).off("resize.dtr orientationchange.dtr"),r.cells(".dtr-control").nodes().to$().removeClass("dtr-control"),b(r.table().node()).removeClass("dtr-inline collapsed"),b.each(o.s.current,function(e,t){!1===t&&o._setColumnVis(e,!0)})}),this.c.breakpoints.sort(function(e,t){return e.width<t.width?1:t.width<e.width?-1:0}),this._classLogic(),this._resizeAuto(),this.c.details);!1!==e.type&&(o._detailsInit(),r.on("column-visibility.dtr",function(){o._timer&&clearTimeout(o._timer),o._timer=setTimeout(function(){o._timer=null,o._classLogic(),o._resizeAuto(),o._resize(!0),o._redrawChildren()},100)}),r.on("draw.dtr",function(){o._redrawChildren()}),b(r.table().node()).addClass("dtr-"+e.type)),r.on("column-reorder.dtr",function(e,t,n){o._classLogic(),o._resizeAuto(),o._resize(!0)}),r.on("column-sizing.dtr",function(){o._resizeAuto(),o._resize()}),r.on("column-calc.dt",function(e,t){for(var n=o.s.current,i=0;i<n.length;i++){var r=t.visible.indexOf(i);!1===n[i]&&0<=r&&t.visible.splice(r,1)}}),r.on("preXhr.dtr",function(){var e=[];r.rows().every(function(){this.child.isShown()&&e.push(this.id(!0))}),r.one("draw.dtr",function(){o._resizeAuto(),o._resize(),r.rows(e).every(function(){o._detailsDisplay(this,!1)})})}),r.on("draw.dtr",function(){o._controlClass()}).on("init.dtr",function(e,t,n){"dt"===e.namespace&&(o._resizeAuto(),o._resize())}),this._resize()},_colGroupAttach:function(e,t,n){var i=null;if(t[n].get(0).parentNode!==e[0]){for(var r=n+1;r<t.length;r++)if(e[0]===t[r].get(0).parentNode){i=r;break}null!==i?t[n].insertBefore(t[i][0]):e.append(t[n])}},_childNodes:function(e,t,n){var i=t+"-"+n;if(this.s.childNodeStore[i])return this.s.childNodeStore[i];for(var r=[],o=e.cell(t,n).node().childNodes,s=0,d=o.length;s<d;s++)r.push(o[s]);return this.s.childNodeStore[i]=r},_childNodesRestore:function(e,t,n){var i=t+"-"+n;if(this.s.childNodeStore[i]){var r=e.cell(t,n).node(),e=this.s.childNodeStore[i];if(0<e.length){for(var o=e[0].parentNode.childNodes,s=[],d=0,a=o.length;d<a;d++)s.push(o[d]);for(var l=0,c=s.length;l<c;l++)r.appendChild(s[l])}this.s.childNodeStore[i]=void 0}},_columnsVisiblity:function(n){for(var i=this.s.dt,e=this.s.columns,t=e.map(function(e,t){return{columnIdx:t,priority:e.priority}}).sort(function(e,t){return e.priority!==t.priority?e.priority-t.priority:e.columnIdx-t.columnIdx}),r=b.map(e,function(e,t){return!1===i.column(t).visible()?"not-visible":(!e.auto||null!==e.minWidth)&&(!0===e.auto?"-":-1!==b.inArray(n,e.includeIn))}),o=0,s=0,d=r.length;s<d;s++)!0===r[s]&&(o+=e[s].minWidth);var a=i.settings()[0].oScroll,a=a.sY||a.sX?a.iBarWidth:0,l=i.table().container().offsetWidth-a-o;for(s=0,d=r.length;s<d;s++)e[s].control&&(l-=e[s].minWidth);var c=!1;for(s=0,d=t.length;s<d;s++){var u=t[s].columnIdx;"-"===r[u]&&!e[u].control&&e[u].minWidth&&(c||l-e[u].minWidth<0?r[u]=!(c=!0):r[u]=!0,l-=e[u].minWidth)}var p=!1;for(s=0,d=e.length;s<d;s++)if(!e[s].control&&!e[s].never&&!1===r[s]){p=!0;break}for(s=0,d=e.length;s<d;s++)e[s].control&&(r[s]=p),"not-visible"===r[s]&&(r[s]=!1);return-1===b.inArray(!0,r)&&(r[0]=!0),r},_classLogic:function(){function d(e,t,n,i){var r,o,s;if(n){if("max-"===n)for(r=a._find(t).width,o=0,s=l.length;o<s;o++)l[o].width<=r&&u(e,l[o].name);else if("min-"===n)for(r=a._find(t).width,o=0,s=l.length;o<s;o++)l[o].width>=r&&u(e,l[o].name);else if("not-"===n)for(o=0,s=l.length;o<s;o++)-1===l[o].name.indexOf(i)&&u(e,l[o].name)}else c[e].includeIn.push(t)}var a=this,l=this.c.breakpoints,c=this.s.dt.columns().eq(0).map(function(e){var e=this.column(e),t=e.header().className,n=e.init().responsivePriority,e=e.header().getAttribute("data-priority");return void 0===n&&(n=null==e?1e4:+e),{className:t,includeIn:[],auto:!1,control:!1,never:!!t.match(/\b(dtr\-)?never\b/),priority:n}}),u=function(e,t){e=c[e].includeIn;-1===b.inArray(t,e)&&e.push(t)};c.each(function(e,r){for(var t=e.className.split(" "),o=!1,n=0,i=t.length;n<i;n++){var s=t[n].trim();if("all"===s||"dtr-all"===s)return o=!0,void(e.includeIn=b.map(l,function(e){return e.name}));if("none"===s||"dtr-none"===s||e.never)return void(o=!0);if("control"===s||"dtr-control"===s)return o=!0,void(e.control=!0);b.each(l,function(e,t){var n=t.name.split("-"),i=new RegExp("(min\\-|max\\-|not\\-)?("+n[0]+")(\\-[_a-zA-Z0-9])?"),i=s.match(i);i&&(o=!0,i[2]===n[0]&&i[3]==="-"+n[1]?d(r,t.name,i[1],i[2]+i[3]):i[2]!==n[0]||i[3]||d(r,t.name,i[1],i[2]))})}o||(e.auto=!0)}),this.s.columns=c},_controlClass:function(){var e,t,n;"inline"===this.c.details.type&&(e=this.s.dt,t=this.s.current,n=b.inArray(!0,t),e.cells(null,function(e){return e!==n},{page:"current"}).nodes().to$().filter(".dtr-control").removeClass("dtr-control"),e.cells(null,n,{page:"current"}).nodes().to$().addClass("dtr-control"))},_detailsDisplay:function(t,n){function e(e){b(t.node()).toggleClass("dtr-expanded",!1!==e),b(o.table().node()).triggerHandler("responsive-display.dt",[o,t,e,n])}var i,r=this,o=this.s.dt,s=this.c.details;s&&!1!==s.type&&(i="string"==typeof s.renderer?a.renderer[s.renderer]():s.renderer,"boolean"==typeof(s=s.display(t,n,function(){return i.call(r,o,t[0][0],r._detailsObj(t[0]))},function(){e(!1)})))&&e(s)},_detailsInit:function(){var n=this,i=this.s.dt,e=this.c.details,r=("inline"===e.type&&(e.target="td.dtr-control, th.dtr-control"),i.on("draw.dtr",function(){n._tabIndexes()}),n._tabIndexes(),b(i.table().body()).on("keyup.dtr","td, th",function(e){13===e.keyCode&&b(this).data("dtr-keyboard")&&b(this).click()}),e.target),e="string"==typeof r?r:"td, th";void 0===r&&null===r||b(i.table().body()).on("click.dtr mousedown.dtr mouseup.dtr",e,function(e){if(b(i.table().node()).hasClass("collapsed")&&-1!==b.inArray(b(this).closest("tr").get(0),i.rows().nodes().toArray())){if("number"==typeof r){var t=r<0?i.columns().eq(0).length+r:r;if(i.cell(this).index().column!==t)return}t=i.row(b(this).closest("tr"));"click"===e.type?n._detailsDisplay(t,!1):"mousedown"===e.type?b(this).css("outline","none"):"mouseup"===e.type&&b(this).trigger("blur").css("outline","")}})},_detailsObj:function(n){var i=this,r=this.s.dt;return b.map(this.s.columns,function(e,t){if(!e.never&&!e.control)return{className:r.settings()[0].aoColumns[t].sClass,columnIndex:t,data:r.cell(n,t).render(i.c.orthogonal),hidden:r.column(t).visible()&&!i.s.current[t],rowIndex:n,title:r.column(t).title()}})},_find:function(e){for(var t=this.c.breakpoints,n=0,i=t.length;n<i;n++)if(t[n].name===e)return t[n]},_redrawChildren:function(){var n=this,i=this.s.dt;i.rows({page:"current"}).iterator("row",function(e,t){n._detailsDisplay(i.row(t),!0)})},_resize:function(n){for(var e,i=this,r=this.s.dt,t=b(y).innerWidth(),o=this.c.breakpoints,s=o[0].name,d=this.s.columns,a=this.s.current.slice(),l=o.length-1;0<=l;l--)if(t<=o[l].width){s=o[l].name;break}var c=this._columnsVisiblity(s),u=(this.s.current=c,!1);for(l=0,e=d.length;l<e;l++)if(!1===c[l]&&!d[l].never&&!d[l].control&&!1==!r.column(l).visible()){u=!0;break}b(r.table().node()).toggleClass("collapsed",u);var p=!1,h=0,f=r.settings()[0],m=b(r.table().node()).children("colgroup"),v=f.aoColumns.map(function(e){return e.colEl});r.columns().eq(0).each(function(e,t){r.column(e).visible()&&(!0===c[t]&&h++,!n&&c[t]===a[t]||(p=!0,i._setColumnVis(e,c[t])),c[t]?i._colGroupAttach(m,v,t):v[t].detach())}),p&&(r.columns.adjust(),this._redrawChildren(),b(r.table().node()).trigger("responsive-resize.dt",[r,this._responsiveOnlyHidden()]),0===r.page.info().recordsDisplay)&&b("td",r.table().body()).eq(0).attr("colspan",h),i._controlClass()},_resizeAuto:function(){var t=this.s.dt,n=this.s.columns,r=this,o=t.columns().indexes().filter(function(e){return t.column(e).visible()});if(this.c.auto&&-1!==b.inArray(!0,b.map(n,function(e){return e.auto}))){for(var e=t.table().node().cloneNode(!1),i=b(t.table().header().cloneNode(!1)).appendTo(e),s=b(t.table().footer().cloneNode(!1)).appendTo(e),d=b(t.table().body()).clone(!1,!1).empty().appendTo(e),a=(e.style.width="auto",t.table().header.structure(o).forEach(e=>{e=e.filter(function(e){return!!e}).map(function(e){return b(e.cell).clone(!1).css("display","table-cell").css("width","auto").css("min-width",0)});b("<tr/>").append(e).appendTo(i)}),b("<tr/>").appendTo(d)),l=0;l<o.count();l++)a.append("<td/>");t.rows({page:"current"}).every(function(n){var i,e=this.node();e&&(i=e.cloneNode(!1),t.cells(n,o).every(function(e,t){t=r.s.childNodeStore[n+"-"+t];(t?b(this.node().cloneNode(!1)).append(b(t).clone()):b(this.node()).clone(!1)).appendTo(i)}),d.append(i))}),d.find("th, td").css("display",""),t.table().footer.structure(o).forEach(e=>{e=e.filter(function(e){return!!e}).map(function(e){return b(e.cell).clone(!1).css("display","table-cell").css("width","auto").css("min-width",0)});b("<tr/>").append(e).appendTo(s)}),"inline"===this.c.details.type&&b(e).addClass("dtr-inline collapsed"),b(e).find("[name]").removeAttr("name"),b(e).css("position","relative");e=b("<div/>").css({width:1,height:1,overflow:"hidden",clear:"both"}).append(e);e.insertBefore(t.table().node()),a.children().each(function(e){e=t.column.index("fromVisible",e);n[e].minWidth=this.offsetWidth||0}),e.remove()}},_responsiveOnlyHidden:function(){var n=this.s.dt;return b.map(this.s.current,function(e,t){return!1===n.column(t).visible()||e})},_setColumnVis:function(e,t){var n=this,i=this.s.dt,r=t?"":"none";this._setHeaderVis(e,t,i.table().header.structure()),this._setHeaderVis(e,t,i.table().footer.structure()),i.column(e).nodes().to$().css("display",r).toggleClass("dtr-hidden",!t),b.isEmptyObject(this.s.childNodeStore)||i.cells(null,e).indexes().each(function(e){n._childNodesRestore(i,e.row,e.column)})},_setHeaderVis:function(n,i,e){var r=this,o=i?"":"none";e.forEach(function(e){if(e[n])b(e[n].cell).css("display",o).toggleClass("dtr-hidden",!i);else for(var t=n;0<=t;){if(e[t]){e[t].cell.colSpan=r._colspan(e,t);break}t--}})},_colspan:function(e,t){for(var n=1,i=t+1;i<e.length;i++)if(null===e[i]&&this.s.current[i])n++;else if(e[i])break;return n},_tabIndexes:function(){var e=this.s.dt,t=e.cells({page:"current"}).nodes().to$(),n=e.settings()[0],i=this.c.details.target;t.filter("[data-dtr-keyboard]").removeData("[data-dtr-keyboard]"),("number"==typeof i?e.cells(null,i,{page:"current"}).nodes().to$():b(i="td:first-child, th:first-child"===i?">td:first-child, >th:first-child":i,e.rows({page:"current"}).nodes())).attr("tabIndex",n.iTabIndex).data("dtr-keyboard",1)}}),a.defaults={breakpoints:a.breakpoints=[{name:"desktop",width:1/0},{name:"tablet-l",width:1024},{name:"tablet-p",width:768},{name:"mobile-l",width:480},{name:"mobile-p",width:320}],auto:!0,details:{display:(a.display={childRow:function(e,t,n){var i=b(e.node());return t?i.hasClass("dtr-expanded")?(e.child(n(),"child").show(),!0):void 0:i.hasClass("dtr-expanded")?(e.child(!1),!1):!1!==(t=n())&&(e.child(t,"child").show(),!0)},childRowImmediate:function(e,t,n){var i=b(e.node());return!t&&i.hasClass("dtr-expanded")||!e.responsive.hasHidden()?(e.child(!1),!1):!1!==(t=n())&&(e.child(t,"child").show(),!0)},modal:function(s){return function(e,t,n,i){n=n();if(!1===n)return!1;if(t){if(!(o=b("div.dtr-modal-content")).length||e.index()!==o.data("dtr-row-idx"))return null;o.empty().append(n)}else{var r=function(){o.remove(),b(d).off("keypress.dtr"),b(e.node()).removeClass("dtr-expanded"),i()},o=b('<div class="dtr-modal"/>').append(b('<div class="dtr-modal-display"/>').append(b('<div class="dtr-modal-content"/>').data("dtr-row-idx",e.index()).append(n)).append(b('<div class="dtr-modal-close">&times;</div>').click(function(){r()}))).append(b('<div class="dtr-modal-background"/>').click(function(){r()})).appendTo("body");b(e.node()).addClass("dtr-expanded"),b(d).on("keyup.dtr",function(e){27===e.keyCode&&(e.stopPropagation(),r())})}return s&&s.header&&b("div.dtr-modal-content").prepend("<h2>"+s.header(e)+"</h2>"),!0}}}).childRow,renderer:(a.renderer={listHiddenNodes:function(){return function(n,e,t){var i=this,r=b('<ul data-dtr-index="'+e+'" class="dtr-details"/>'),o=!1;return b.each(t,function(e,t){t.hidden&&(b("<li "+(t.className?'class="'+t.className+'"':"")+' data-dtr-index="'+t.columnIndex+'" data-dt-row="'+t.rowIndex+'" data-dt-column="'+t.columnIndex+'"><span class="dtr-title">'+t.title+"</span> </li>").append(b('<span class="dtr-data"/>').append(i._childNodes(n,t.rowIndex,t.columnIndex))).appendTo(r),o=!0)}),!!o&&r}},listHidden:function(){return function(e,t,n){n=b.map(n,function(e){var t=e.className?'class="'+e.className+'"':"";return e.hidden?"<li "+t+' data-dtr-index="'+e.columnIndex+'" data-dt-row="'+e.rowIndex+'" data-dt-column="'+e.columnIndex+'"><span class="dtr-title">'+e.title+'</span> <span class="dtr-data">'+e.data+"</span></li>":""}).join("");return!!n&&b('<ul data-dtr-index="'+t+'" class="dtr-details"/>').append(n)}},tableAll:function(i){return i=b.extend({tableClass:""},i),function(e,t,n){n=b.map(n,function(e){return"<tr "+(e.className?'class="'+e.className+'"':"")+' data-dt-row="'+e.rowIndex+'" data-dt-column="'+e.columnIndex+'"><td>'+e.title+":</td> <td>"+e.data+"</td></tr>"}).join("");return b('<table class="'+i.tableClass+' dtr-details" width="100%"/>').append(n)}}}).listHidden(),target:0,type:"inline"},orthogonal:"display"},b.fn.dataTable.Api);return e.register("responsive()",function(){return this}),e.register("responsive.index()",function(e){return{column:(e=b(e)).data("dtr-index"),row:e.parent().data("dtr-index")}}),e.register("responsive.rebuild()",function(){return this.iterator("table",function(e){e._responsive&&e._responsive._classLogic()})}),e.register("responsive.recalc()",function(){return this.iterator("table",function(e){e._responsive&&(e._responsive._resizeAuto(),e._responsive._resize())})}),e.register("responsive.hasHidden()",function(){var e=this.context[0];return!!e._responsive&&-1!==b.inArray(!1,e._responsive._responsiveOnlyHidden())}),e.registerPlural("columns().responsiveHidden()","column().responsiveHidden()",function(){return this.iterator("column",function(e,t){return!!e._responsive&&e._responsive._responsiveOnlyHidden()[t]},1)}),a.version="3.0.2",b.fn.dataTable.Responsive=a,b.fn.DataTable.Responsive=a,b(d).on("preInit.dt.dtr",function(e,t,n){"dt"===e.namespace&&(b(t.nTable).hasClass("responsive")||b(t.nTable).hasClass("dt-responsive")||t.oInit.responsive||i.defaults.responsive)&&!1!==(e=t.oInit.responsive)&&new a(t,b.isPlainObject(e)?e:{})}),i});