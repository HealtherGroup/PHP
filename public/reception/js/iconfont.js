;(function(window) {

var svgSprite = '<svg>' +
  ''+
    '<symbol id="icon-weixin" viewBox="0 0 1024 1024">'+
      ''+
      '<path d="M570.625024 510.793728c-10.160128 0-20.32128 9.435136-20.32128 21.046272 0 9.435136 10.160128 18.869248 20.32128 18.869248 15.240192 0 26.126336-9.435136 26.126336-18.869248C596.75136 520.228864 585.865216 510.793728 570.625024 510.793728z"  ></path>'+
      ''+
      '<path d="M503.856128 412.818432c15.966208 0 26.126336-10.160128 26.126336-25.401344 0-15.966208-10.160128-25.401344-26.126336-25.401344-15.240192 0-29.755392 9.435136-29.755392 25.401344C474.100736 402.658304 488.615936 412.818432 503.856128 412.818432z"  ></path>'+
      ''+
      '<path d="M511.839232 65.717248c-246.009856 0-445.44 199.430144-445.44 445.44s199.430144 445.44 445.44 445.44 445.44-199.430144 445.44-445.44S757.849088 65.717248 511.839232 65.717248zM427.65312 624.01024c-26.852352 0-46.447616-4.354048-71.84896-11.61216l-73.299968 37.013504 21.046272-62.413824c-51.52768-36.287488-82.009088-82.009088-82.009088-137.89184 0-98.701312 92.895232-174.178304 206.111744-174.178304 100.15232 0 189.41952 59.510784 206.83776 143.69792-7.257088-1.451008-13.789184-2.177024-19.595264-2.177024-98.701312 0-174.90432 74.025984-174.90432 163.29216 0 15.240192 2.177024 29.029376 5.80608 43.544576C439.991296 624.01024 433.4592 624.01024 427.65312 624.01024zM730.289152 695.133184l14.5152 52.253696-55.156736-31.207424c-21.046272 4.354048-41.367552 10.886144-62.413824 10.886144-97.250304 0-174.178304-66.768896-174.178304-149.502976s76.929024-149.502976 174.178304-149.502976c92.169216 0 174.90432 66.768896 174.90432 149.502976C802.137088 624.01024 770.930688 665.377792 730.289152 695.133184z"  ></path>'+
      ''+
      '<path d="M360.159232 362.016768c-15.240192 0-31.207424 9.435136-31.207424 25.401344 0 15.240192 15.966208 25.401344 31.207424 25.401344 14.5152 0 26.126336-10.160128 26.126336-25.401344C386.285568 371.45088 374.673408 362.016768 360.159232 362.016768z"  ></path>'+
      ''+
      '<path d="M684.566528 510.793728c-10.886144 0-20.32128 9.435136-20.32128 21.046272 0 9.435136 9.435136 18.869248 20.32128 18.869248 14.5152 0 25.401344-9.435136 25.401344-18.869248C709.967872 520.228864 699.081728 510.793728 684.566528 510.793728z"  ></path>'+
      ''+
    '</symbol>'+
  ''+
    '<symbol id="icon-weixin1" viewBox="0 0 1024 1024">'+
      ''+
      '<path d="M669.102572 367.837646c10.238179 0 20.366863 0.751107 30.413684 1.86958-27.328415-127.249149-163.367765-221.791385-318.656527-221.791385-173.60492 0-315.815829 118.336152-315.815829 268.599458 0 86.735433 47.312562 157.962661 126.375246 213.20687l-31.587416 95.003747 110.404506-55.363935c39.503712 7.819083 71.200622 15.861246 110.62247 15.861246 9.910721 0 19.739577-0.491187 29.485545-1.257643-6.170536-21.115923-9.745968-43.230594-9.745968-66.174142C400.599306 479.812927 519.083837 367.837646 669.102572 367.837646zM499.292072 282.208407c23.778566 0 39.530318 15.643282 39.530318 39.409568 0 23.669072-15.751752 39.531342-39.530318 39.531342-23.671119 0-47.422056-15.861246-47.422056-39.531342C451.870016 297.852712 475.620953 282.208407 499.292072 282.208407zM278.264073 361.149317c-23.670096 0-47.558156-15.861246-47.558156-39.531342 0-23.766286 23.887037-39.409568 47.558156-39.409568 23.669072 0 39.421848 15.643282 39.421848 39.409568C317.685921 345.288071 301.933145 361.149317 278.264073 361.149317z"  ></path>'+
      ''+
      '<path d="M957.344393 613.995999c0-126.266775-126.347616-229.190913-268.257673-229.190913-150.264329 0-268.611737 102.925161-268.611737 229.190913 0 126.484739 118.347408 229.189889 268.611737 229.189889 31.451316 0 63.173808-7.930623 94.762247-15.84692l86.623893 47.434336-23.75196-78.92556C910.113695 748.287541 957.344393 685.223227 957.344393 613.995999zM601.996199 574.47796c-15.725146 0-31.586392-15.643282-31.586392-31.601742 0-15.737426 15.861246-31.586392 31.586392-31.586392 23.89113 0 39.533388 15.848966 39.533388 31.586392C641.529587 558.834678 625.887328 574.47796 601.996199 574.47796zM775.712659 574.47796c-15.616676 0-31.368428-15.643282-31.368428-31.601742 0-15.737426 15.752776-31.586392 31.368428-31.586392 23.669072 0 39.531342 15.848966 39.531342 31.586392C815.244001 558.834678 799.381731 574.47796 775.712659 574.47796z"  ></path>'+
      ''+
    '</symbol>'+
  ''+
    '<symbol id="icon-iconfontmoban" viewBox="0 0 1024 1024">'+
      ''+
      '<path d="M573.626569 593.659835c-26.913976 0-48.826032-22.064528-48.826032-49.451272 0-27.233248 21.912056-49.297776 48.826032-49.297776 26.907836 0 48.817846 22.064528 48.817846 49.297776C622.444415 571.595306 600.534406 593.659835 573.626569 593.659835M958.995497 628.948549c0-126.957507-113.029286-230.90802-256.287037-239.870136-6.702656-0.366344-13.420661-0.6191-20.134573-0.6191-152.706961 0-276.435936 107.687628-276.435936 240.49026 0 20.027126 2.864234 39.420825 8.205892 57.948807C444.059632 791.735076 552.865733 869.452111 682.573887 869.452111c44.137243 0 85.790922-8.961092 122.718973-25.00244l62.051241 42.404786c0 0 16.544815 11.562337 14.930037-10.698666l-17.534352-66.399269C922.565796 765.735935 958.995497 701.069123 958.995497 628.948549M682.573887 368.431164c5.960759 0 11.800767 0.258896 17.656125 0.511653C677.470659 234.512105 544.41527 131.293255 383.633401 131.293255c-176.701444 0-319.959196 124.737956-319.959196 278.426267 0 85.683475 44.518936 162.278967 114.405633 213.387995l-23.632233 89.158622c0 0-8.074909 29.594015 22.514783 16.300244l88.162946-60.198034c36.682457 12.81077 76.600609 19.904329 118.508068 19.904329 3.604084 0 7.079232-0.25378 10.562567-0.25378-5.098111-19.031449-7.831362-38.799678-7.831362-59.066257C386.364605 485.329571 519.290033 368.431164 682.573887 368.431164M809.019741 593.624019c-26.913976 0-48.826032-22.064528-48.826032-49.451272 0-27.233248 21.912056-49.297776 48.826032-49.297776 26.907836 0 48.817846 22.064528 48.817846 49.297776C857.837586 571.560514 835.927577 593.624019 809.019741 593.624019M233.637178 371.635135c-26.913976 0-48.826032-22.064528-48.826032-49.451272 0-27.233248 21.912056-49.297776 48.826032-49.297776 26.907836 0 48.817846 22.064528 48.817846 49.297776C282.455023 349.570607 260.545014 371.635135 233.637178 371.635135M522.579963 371.59932c-26.913976 0-48.826032-22.064528-48.826032-49.451272 0-27.233248 21.912056-49.297776 48.826032-49.297776 26.907836 0 48.817846 22.064528 48.817846 49.297776C571.397808 349.535815 549.487799 371.59932 522.579963 371.59932"  ></path>'+
      ''+
    '</symbol>'+
  ''+
    '<symbol id="icon-weixin2" viewBox="0 0 1024 1024">'+
      ''+
      '<path d="M304.32 111.27168C12.40064 163.4112-84.91008 493.23136 147.29472 644.19072c12.73088 8.1856 12.73088 7.27552-6.36928 64.27008L124.55936 757.2608l58.81088-31.52 58.8096-31.52512 31.22048 7.58016c32.73984 8.18048 74.57408 13.94048 102.46016 13.94048l16.67456 0-5.76-22.12992c-45.77536-168.54528 112.46464-335.57504 318.29504-335.57504l27.88992 0-5.76-20.00512C682.03008 180.08576 491.36 77.9264 304.32 111.27168L304.32 111.27168zM278.85312 258.90176c30.92096 20.92032 32.74112 66.08384 3.03104 85.48992-48.19584 31.52512-104.57984-23.95008-72.14592-71.24096C223.98976 251.93088 258.24384 244.95616 278.85312 258.90176L278.85312 258.90176zM527.4304 258.90176c50.92992 34.25536 12.73472 113.37472-44.25984 91.54944-41.22496-15.76448-46.07616-72.45184-7.57504-92.76032C490.74816 249.50656 514.39488 250.10944 527.4304 258.90176L527.4304 258.90176zM639.89504 383.79648c-144.5952 26.3744-244.93568 136.11008-239.17568 262.2144 7.58016 168.84992 205.53088 285.2544 395.5968 233.11488l22.43456-6.06464 47.2896 25.47072c26.06976 14.24384 47.89504 24.54912 48.50048 23.33824 0.61056-1.51552-4.54528-19.70944-11.21536-40.61824-15.1552-46.68672-15.45984-43.35104 4.85504-57.9008C1136.73984 659.34592 936.06528 330.14144 639.89504 383.79648L639.89504 383.79648zM634.14016 519.90656c12.72448 8.48512 19.39456 29.71008 13.94048 45.1648-11.52 33.04064-60.93056 35.46496-74.26944 3.64032C558.65472 532.03072 600.49024 498.08128 634.14016 519.90656L634.14016 519.90656zM836.63488 523.54688c20.00512 19.09504 16.66944 51.53024-6.67008 63.6544-35.7696 18.19008-73.36064-18.18496-54.86976-53.0432C787.22048 511.72096 818.4448 506.2656 836.63488 523.54688L836.63488 523.54688zM836.63488 523.54688"  ></path>'+
      ''+
    '</symbol>'+
  ''+
'</svg>'
var script = function() {
    var scripts = document.getElementsByTagName('script')
    return scripts[scripts.length - 1]
  }()
var shouldInjectCss = script.getAttribute("data-injectcss")

/**
 * document ready
 */
var ready = function(fn){
  if(document.addEventListener){
      document.addEventListener("DOMContentLoaded",function(){
          document.removeEventListener("DOMContentLoaded",arguments.callee,false)
          fn()
      },false)
  }else if(document.attachEvent){
     IEContentLoaded (window, fn)
  }

  function IEContentLoaded (w, fn) {
      var d = w.document, done = false,
      // only fire once
      init = function () {
          if (!done) {
              done = true
              fn()
          }
      }
      // polling for no errors
      ;(function () {
          try {
              // throws errors until after ondocumentready
              d.documentElement.doScroll('left')
          } catch (e) {
              setTimeout(arguments.callee, 50)
              return
          }
          // no errors, fire

          init()
      })()
      // trying to always fire before onload
      d.onreadystatechange = function() {
          if (d.readyState == 'complete') {
              d.onreadystatechange = null
              init()
          }
      }
  }
}

/**
 * Insert el before target
 *
 * @param {Element} el
 * @param {Element} target
 */

var before = function (el, target) {
  target.parentNode.insertBefore(el, target)
}

/**
 * Prepend el to target
 *
 * @param {Element} el
 * @param {Element} target
 */

var prepend = function (el, target) {
  if (target.firstChild) {
    before(el, target.firstChild)
  } else {
    target.appendChild(el)
  }
}

function appendSvg(){
  var div,svg

  div = document.createElement('div')
  div.innerHTML = svgSprite
  svg = div.getElementsByTagName('svg')[0]
  if (svg) {
    svg.setAttribute('aria-hidden', 'true')
    svg.style.position = 'absolute'
    svg.style.width = 0
    svg.style.height = 0
    svg.style.overflow = 'hidden'
    prepend(svg,document.body)
  }
}

if(shouldInjectCss && !window.__iconfont__svg__cssinject__){
  window.__iconfont__svg__cssinject__ = true
  try{
    document.write("<style>.svgfont {display: inline-block;width: 1em;height: 1em;fill: currentColor;vertical-align: -0.1em;font-size:16px;}</style>");
  }catch(e){
    console && console.log(e)
  }
}

ready(appendSvg)


})(window)