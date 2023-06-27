function hexToRGB(t,e){var a=parseInt(t.slice(1,3),16),i=parseInt(t.slice(3,5),16),t=parseInt(t.slice(5,7),16);return e?"rgba("+a+", "+i+", "+t+", "+e+")":"rgb("+a+", "+i+", "+t+")"}function skipped(t,e){return t.p0.skip||t.p1.skip?e:void 0}function down(t,e){return t.p0.parsed.y>t.p1.parsed.y?e:void 0}!function(a){"use strict";function t(){this.$body=a("body"),this.charts=[],this.defaultColors=["#03203d","#0acf97","#fa5c7c","#ffbc00"]}t.prototype.interpolationExample=function(){var t=document.getElementById("interpolation-example"),e=t.getAttribute("data-colors"),e=e?e.split(","):this.defaultColors,t=t.getContext("2d"),a=[0,20,20,60,60,120,NaN,180,120,125,105,110,170],t=new Chart(t,{type:"line",data:{labels:["1","2","3","4","5","6","7","8","9","10","11","12"],datasets:[{label:"Fully Rounded",data:a,borderColor:e[0],fill:!1,cubicInterpolationMode:"monotone",tension:.4},{label:"Small Radius",data:a,borderColor:e[1],fill:!1,tension:.4},{label:"Small Radius",data:a,borderColor:e[2],fill:!1}]},options:{responsive:!0,maintainAspectRatio:!1,interaction:{intersect:!1},plugins:{legend:{display:!1,position:"top"}},scales:{x:{grid:{display:!1}},y:{grid:{display:!1},suggestedMin:-10,suggestedMax:200}}}});this.charts.push(t)},t.prototype.lineExample=function(){var t=document.getElementById("line-example"),e=t.getAttribute("data-colors"),e=e?e.split(","):this.defaultColors,t=t.getContext("2d"),t=new Chart(t,{type:"line",data:{labels:["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],datasets:[{label:"Fully Rounded",data:[32,42,42,62,52,75,62],borderColor:e[0],fill:!0,backgroundColor:hexToRGB(e[0],.3)},{label:"Small Radius",data:[42,58,66,93,82,105,92],fill:!0,backgroundColor:"transparent",borderColor:e[1],borderDash:[5,5]}]},options:{responsive:!0,maintainAspectRatio:!1,plugins:{legend:{display:!1,position:"top"}},tension:.3,scales:{x:{grid:{display:!1}},y:{grid:{display:!1}}}}});this.charts.push(t)},t.prototype.multiAxesExample=function(){var t=document.getElementById("multi-axes-example"),e=t.getAttribute("data-colors"),e=e?e.split(","):this.defaultColors,t=t.getContext("2d"),t=new Chart(t,{type:"line",data:{labels:["Jan","Feb","March","April","May","June","July"],datasets:[{label:"Fully Rounded",data:[12,-19,14,-15,18,-14,-7],borderColor:e[0],backgroundColor:hexToRGB(e[0],.3),borderWidth:1.5,yAxisID:"y"},{label:"Small Radius",data:[-10,19,-15,-8,-17,12,8],backgroundColor:hexToRGB(e[1],.3),borderColor:e[1],borderWidth:1.5,yAxisID:"y1"}]},options:{interaction:{mode:"index",intersect:!1},responsive:!0,maintainAspectRatio:!1,plugins:{legend:{display:!1,position:"top"}},tension:.2,scales:{x:{grid:{display:!1}},y:{type:"linear",display:!0,position:"left",grid:{display:!1}},y1:{type:"linear",display:!0,position:"right",grid:{drawOnChartArea:!1}}}}});this.charts.push(t)},t.prototype.pointStylingExample=function(){var t=document.getElementById("point-styling-example"),e=t.getAttribute("data-colors"),e=e?e.split(","):this.defaultColors,t=t.getContext("2d"),t=new Chart(t,{type:"line",data:{labels:["Day 1","Day 2","Day 3","Day 4","Day 5","Day 6"],datasets:[{label:"Dataset 1",data:[12,-19,14,-15,14,-8],borderColor:e[0],pointStyle:"circle",pointRadius:10,pointHoverRadius:15}]},options:{responsive:!0,maintainAspectRatio:!1,plugins:{legend:{display:!1}},scales:{x:{stacked:!0,grid:{display:!1}},y:{stacked:!0,grid:{display:!1}}}}});this.charts.push(t)},t.prototype.lineSegmentExample=function(){var t=document.getElementById("line-segment-example"),e=t.getAttribute("data-colors"),e=e?e.split(","):this.defaultColors,t=t.getContext("2d"),t=new Chart(t,{type:"line",data:{labels:["Jan","Feb","March","April","May","June","July"],datasets:[{label:"Dataset 1",data:[65,59,NaN,48,56,57,40],borderColor:e[0],spanGaps:!0,segment:{borderColor:function(t){return skipped(t,"rgb(0,0,0,0.2)")||down(t,"rgb(192,75,75)")},borderDash:function(t){return skipped(t,[6,6])}}}]},options:{responsive:!0,maintainAspectRatio:!1,plugins:{legend:{display:!1,position:"top"}},scales:{x:{stacked:!0,grid:{display:!1}},y:{stacked:!0,grid:{display:!1}}}}});this.charts.push(t)},t.prototype.steppedExample=function(){var t=document.getElementById("stepped-example"),e=t.getAttribute("data-colors"),e=e?e.split(","):this.defaultColors,t=t.getContext("2d"),t=new Chart(t,{type:"line",data:{labels:["Day 1","Day 2","Day 3","Day 4","Day 5","Day 6"],datasets:[{label:"Dataset 1",data:[12,-19,14,-15,14,-8],borderColor:e[0],fill:!1,stepped:!0}]},options:{responsive:!0,maintainAspectRatio:!1,interaction:{intersect:!1,axis:"x"},plugins:{legend:{display:!1,position:"top"}},scales:{x:{grid:{display:!1}},y:{grid:{display:!1}}}}});this.charts.push(t)},t.prototype.init=function(){var e=this;Chart.defaults.font.family='-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif',Chart.defaults.color="#8391a2",Chart.defaults.scale.grid.color="#8391a2",this.interpolationExample(),this.lineExample(),this.multiAxesExample(),this.pointStylingExample(),this.lineSegmentExample(),this.steppedExample(),a(window).on("resizeEnd",function(t){a.each(e.charts,function(t,e){try{e.destroy()}catch(t){}}),e.interpolationExample(),e.lineExample(),e.multiAxesExample(),e.pointStylingExample(),e.lineSegmentExample(),e.steppedExample()}),a(window).resize(function(){this.resizeTO&&clearTimeout(this.resizeTO),this.resizeTO=setTimeout(function(){a(this).trigger("resizeEnd")},500)})},a.ChartJs=new t,a.ChartJs.Constructor=t}(window.jQuery),function(){"use strict";window.jQuery.ChartJs.init()}();