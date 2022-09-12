/**
 * jQuery EasIng v1.1.2 - http://gsgd.co.uk/sandbox/jquery.easIng.php
 *
 * Uses the built In easIng capabilities added In jQuery 1.1
 * to offer multiple easIng options
 *
 * Copyright (c) 2007 George Smith
 * Licensed under the MIT License:
 *   http://www.opensource.org/licenses/mit-license.php
 */
 jQuery.extend(jQuery.easing, {
    easeInQuad: function (n, t, e, u, a) {
        return u * (t /= a) * t + e;
    },
    easeOutQuad: function (n, t, e, u, a) {
        return -u * (t /= a) * (t - 2) + e;
    },
    easeInOutQuad: function (n, t, e, u, a) {
        return (t /= a / 2) < 1 ? (u / 2) * t * t + e : (-u / 2) * (--t * (t - 2) - 1) + e;
    },
    easeInCubic: function (n, t, e, u, a) {
        return u * (t /= a) * t * t + e;
    },
    easeOutCubic: function (n, t, e, u, a) {
        return u * ((t = t / a - 1) * t * t + 1) + e;
    },
    easeInOutCubic: function (n, t, e, u, a) {
        return (t /= a / 2) < 1 ? (u / 2) * t * t * t + e : (u / 2) * ((t -= 2) * t * t + 2) + e;
    },
    easeInQuart: function (n, t, e, u, a) {
        return u * (t /= a) * t * t * t + e;
    },
    easeOutQuart: function (n, t, e, u, a) {
        return -u * ((t = t / a - 1) * t * t * t - 1) + e;
    },
    easeInOutQuart: function (n, t, e, u, a) {
        return (t /= a / 2) < 1 ? (u / 2) * t * t * t * t + e : (-u / 2) * ((t -= 2) * t * t * t - 2) + e;
    },
    easeInQuint: function (n, t, e, u, a) {
        return u * (t /= a) * t * t * t * t + e;
    },
    easeOutQuint: function (n, t, e, u, a) {
        return u * ((t = t / a - 1) * t * t * t * t + 1) + e;
    },
    easeInOutQuint: function (n, t, e, u, a) {
        return (t /= a / 2) < 1 ? (u / 2) * t * t * t * t * t + e : (u / 2) * ((t -= 2) * t * t * t * t + 2) + e;
    },
    easeInSine: function (n, t, e, u, a) {
        return -u * Math.cos((t / a) * (Math.PI / 2)) + u + e;
    },
    easeOutSine: function (n, t, e, u, a) {
        return u * Math.sin((t / a) * (Math.PI / 2)) + e;
    },
    easeInOutSine: function (n, t, e, u, a) {
        return (-u / 2) * (Math.cos((Math.PI * t) / a) - 1) + e;
    },
    easeInExpo: function (n, t, e, u, a) {
        return 0 == t ? e : u * Math.pow(2, 10 * (t / a - 1)) + e;
    },
    easeOutExpo: function (n, t, e, u, a) {
        return t == a ? e + u : u * (-Math.pow(2, (-10 * t) / a) + 1) + e;
    },
    easeInOutExpo: function (n, t, e, u, a) {
        return 0 == t ? e : t == a ? e + u : (t /= a / 2) < 1 ? (u / 2) * Math.pow(2, 10 * (t - 1)) + e : (u / 2) * (-Math.pow(2, -10 * --t) + 2) + e;
    },
    easeInCirc: function (n, t, e, u, a) {
        return -u * (Math.sqrt(1 - (t /= a) * t) - 1) + e;
    },
    easeOutCirc: function (n, t, e, u, a) {
        return u * Math.sqrt(1 - (t = t / a - 1) * t) + e;
    },
    easeInOutCirc: function (n, t, e, u, a) {
        return (t /= a / 2) < 1 ? (-u / 2) * (Math.sqrt(1 - t * t) - 1) + e : (u / 2) * (Math.sqrt(1 - (t -= 2) * t) + 1) + e;
    },
    easeInElastic: function (n, t, e, u, a) {
        var r = 1.70158,
            i = 0,
            s = u;
        if (0 == t) return e;
        if (1 == (t /= a)) return e + u;
        if ((i || (i = 0.3 * a), s < Math.abs(u))) {
            s = u;
            var r = i / 4;
        } else var r = (i / (2 * Math.PI)) * Math.asin(u / s);
        return -(s * Math.pow(2, 10 * (t -= 1)) * Math.sin((2 * (t * a - r) * Math.PI) / i)) + e;
    },
    easeOutElastic: function (n, t, e, u, a) {
        var r = 1.70158,
            i = 0,
            s = u;
        if (0 == t) return e;
        if (1 == (t /= a)) return e + u;
        if ((i || (i = 0.3 * a), s < Math.abs(u))) {
            s = u;
            var r = i / 4;
        } else var r = (i / (2 * Math.PI)) * Math.asin(u / s);
        return s * Math.pow(2, -10 * t) * Math.sin((2 * (t * a - r) * Math.PI) / i) + u + e;
    },
    easeInOutElastic: function (n, t, e, u, a) {
        var r = 1.70158,
            i = 0,
            s = u;
        if (0 == t) return e;
        if (2 == (t /= a / 2)) return e + u;
        if ((i || (i = 0.3 * a * 1.5), s < Math.abs(u))) {
            s = u;
            var r = i / 4;
        } else var r = (i / (2 * Math.PI)) * Math.asin(u / s);
        return 1 > t ? -0.5 * s * Math.pow(2, 10 * (t -= 1)) * Math.sin((2 * (t * a - r) * Math.PI) / i) + e : s * Math.pow(2, -10 * (t -= 1)) * Math.sin((2 * (t * a - r) * Math.PI) / i) * 0.5 + u + e;
    },
    easeInBack: function (n, t, e, u, a, r) {
        return void 0 == r && (r = 1.70158), u * (t /= a) * t * ((r + 1) * t - r) + e;
    },
    easeOutBack: function (n, t, e, u, a, r) {
        return void 0 == r && (r = 1.70158), u * ((t = t / a - 1) * t * ((r + 1) * t + r) + 1) + e;
    },
    easeInOutBack: function (n, t, e, u, a, r) {
        return void 0 == r && (r = 1.70158), (t /= a / 2) < 1 ? (u / 2) * t * t * (((r *= 1.525) + 1) * t - r) + e : (u / 2) * ((t -= 2) * t * (((r *= 1.525) + 1) * t + r) + 2) + e;
    },
    easeInBounce: function (n, t, e, u, a) {
        return u - jQuery.easing.easeOutBounce(n, a - t, 0, u, a) + e;
    },
    easeOutBounce: function (n, t, e, u, a) {
        return (t /= a) < 1 / 2.75
            ? 7.5625 * u * t * t + e
            : 2 / 2.75 > t
            ? u * (7.5625 * (t -= 1.5 / 2.75) * t + 0.75) + e
            : 2.5 / 2.75 > t
            ? u * (7.5625 * (t -= 2.25 / 2.75) * t + 0.9375) + e
            : u * (7.5625 * (t -= 2.625 / 2.75) * t + 0.984375) + e;
    },
    easeInOutBounce: function (n, t, e, u, a) {
        return a / 2 > t ? 0.5 * jQuery.easing.easeInBounce(n, 2 * t, 0, u, a) + e : 0.5 * jQuery.easing.easeOutBounce(n, 2 * t - a, 0, u, a) + 0.5 * u + e;
    },
});

/**
 *  Modernizr 2.8.3 (Custom Build) | MIT & BSD
 * Build: http://modernizr.com/download/#-fontface-backgroundsize-borderimage-borderradius-boxshadow-flexbox-flexboxlegacy-hsla-multiplebgs-opacity-rgba-textshadow-cssanimations-csscolumns-generatedcontent-cssgradients-cssreflections-csstransforms-csstransforms3d-csstransitions-applicationcache-canvas-canvastext-draganddrop-hashchange-history-audio-video-indexeddb-input-inputtypes-localstorage-postmessage-sessionstorage-websockets-websqldatabase-webworkers-geolocation-inlinesvg-smil-svg-svgclippaths-touch-webgl-shiv-cssclasses-teststyles-testprop-testallprops-hasevent-prefixes-domprefixes-load
 */
(window.Modernizr = (function (a, b, c) {
    function C(a) {
        j.cssText = a;
    }
    function D(a, b) {
        return C(n.join(a + ";") + (b || ""));
    }
    function E(a, b) {
        return typeof a === b;
    }
    function F(a, b) {
        return !!~("" + a).indexOf(b);
    }
    function G(a, b) {
        for (var d in a) {
            var e = a[d];
            if (!F(e, "-") && j[e] !== c) return b == "pfx" ? e : !0;
        }
        return !1;
    }
    function H(a, b, d) {
        for (var e in a) {
            var f = b[a[e]];
            if (f !== c) return d === !1 ? a[e] : E(f, "function") ? f.bind(d || b) : f;
        }
        return !1;
    }
    function I(a, b, c) {
        var d = a.charAt(0).toUpperCase() + a.slice(1),
            e = (a + " " + p.join(d + " ") + d).split(" ");
        return E(b, "string") || E(b, "undefined") ? G(e, b) : ((e = (a + " " + q.join(d + " ") + d).split(" ")), H(e, b, c));
    }
    function J() {
        (e.input = (function (c) {
            for (var d = 0, e = c.length; d < e; d++) u[c[d]] = c[d] in k;
            return u.list && (u.list = !!b.createElement("datalist") && !!a.HTMLDataListElement), u;
        })("autocomplete autofocus list placeholder max min multiple pattern required step".split(" "))),
            (e.inputtypes = (function (a) {
                for (var d = 0, e, f, h, i = a.length; d < i; d++)
                    k.setAttribute("type", (f = a[d])),
                        (e = k.type !== "text"),
                        e &&
                            ((k.value = l),
                            (k.style.cssText = "position:absolute;visibility:hidden;"),
                            /^range$/.test(f) && k.style.WebkitAppearance !== c
                                ? (g.appendChild(k), (h = b.defaultView), (e = h.getComputedStyle && h.getComputedStyle(k, null).WebkitAppearance !== "textfield" && k.offsetHeight !== 0), g.removeChild(k))
                                : /^(search|tel)$/.test(f) || (/^(url|email)$/.test(f) ? (e = k.checkValidity && k.checkValidity() === !1) : (e = k.value != l))),
                        (t[a[d]] = !!e);
                return t;
            })("search tel url email datetime date month week time datetime-local number range color".split(" ")));
    }
    var d = "2.8.3",
        e = {},
        f = !0,
        g = b.documentElement,
        h = "modernizr",
        i = b.createElement(h),
        j = i.style,
        k = b.createElement("input"),
        l = ":)",
        m = {}.toString,
        n = " -webkit- -moz- -o- -ms- ".split(" "),
        o = "Webkit Moz O ms",
        p = o.split(" "),
        q = o.toLowerCase().split(" "),
        r = { svg: "http://www.w3.org/2000/svg" },
        s = {},
        t = {},
        u = {},
        v = [],
        w = v.slice,
        x,
        y = function (a, c, d, e) {
            var f,
                i,
                j,
                k,
                l = b.createElement("div"),
                m = b.body,
                n = m || b.createElement("body");
            if (parseInt(d, 10)) while (d--) (j = b.createElement("div")), (j.id = e ? e[d] : h + (d + 1)), l.appendChild(j);
            return (
                (f = ["&#173;", '<style id="s', h, '">', a, "</style>"].join("")),
                (l.id = h),
                ((m ? l : n).innerHTML += f),
                n.appendChild(l),
                m || ((n.style.background = ""), (n.style.overflow = "hidden"), (k = g.style.overflow), (g.style.overflow = "hidden"), g.appendChild(n)),
                (i = c(l, a)),
                m ? l.parentNode.removeChild(l) : (n.parentNode.removeChild(n), (g.style.overflow = k)),
                !!i
            );
        },
        z = (function () {
            function d(d, e) {
                (e = e || b.createElement(a[d] || "div")), (d = "on" + d);
                var f = d in e;
                return (
                    f || (e.setAttribute || (e = b.createElement("div")), e.setAttribute && e.removeAttribute && (e.setAttribute(d, ""), (f = E(e[d], "function")), E(e[d], "undefined") || (e[d] = c), e.removeAttribute(d))), (e = null), f
                );
            }
            var a = { select: "input", change: "input", submit: "form", reset: "form", error: "img", load: "img", abort: "img" };
            return d;
        })(),
        A = {}.hasOwnProperty,
        B;
    !E(A, "undefined") && !E(A.call, "undefined")
        ? (B = function (a, b) {
              return A.call(a, b);
          })
        : (B = function (a, b) {
              return b in a && E(a.constructor.prototype[b], "undefined");
          }),
        Function.prototype.bind ||
            (Function.prototype.bind = function (b) {
                var c = this;
                if (typeof c != "function") throw new TypeError();
                var d = w.call(arguments, 1),
                    e = function () {
                        if (this instanceof e) {
                            var a = function () {};
                            a.prototype = c.prototype;
                            var f = new a(),
                                g = c.apply(f, d.concat(w.call(arguments)));
                            return Object(g) === g ? g : f;
                        }
                        return c.apply(b, d.concat(w.call(arguments)));
                    };
                return e;
            }),
        (s.flexbox = function () {
            return I("flexWrap");
        }),
        (s.flexboxlegacy = function () {
            return I("boxDirection");
        }),
        (s.canvas = function () {
            var a = b.createElement("canvas");
            return !!a.getContext && !!a.getContext("2d");
        }),
        (s.canvastext = function () {
            return !!e.canvas && !!E(b.createElement("canvas").getContext("2d").fillText, "function");
        }),
        (s.webgl = function () {
            return !!a.WebGLRenderingContext;
        }),
        (s.touch = function () {
            var c;
            return (
                "ontouchstart" in a || (a.DocumentTouch && b instanceof DocumentTouch)
                    ? (c = !0)
                    : y(["@media (", n.join("touch-enabled),("), h, ")", "{#modernizr{top:9px;position:absolute}}"].join(""), function (a) {
                          c = a.offsetTop === 9;
                      }),
                c
            );
        }),
        (s.geolocation = function () {
            return "geolocation" in navigator;
        }),
        (s.postmessage = function () {
            return !!a.postMessage;
        }),
        (s.websqldatabase = function () {
            return !!a.openDatabase;
        }),
        (s.indexedDB = function () {
            return !!I("indexedDB", a);
        }),
        (s.hashchange = function () {
            return z("hashchange", a) && (b.documentMode === c || b.documentMode > 7);
        }),
        (s.history = function () {
            return !!a.history && !!history.pushState;
        }),
        (s.draganddrop = function () {
            var a = b.createElement("div");
            return "draggable" in a || ("ondragstart" in a && "ondrop" in a);
        }),
        (s.websockets = function () {
            return "WebSocket" in a || "MozWebSocket" in a;
        }),
        (s.rgba = function () {
            return C("background-color:rgba(150,255,150,.5)"), F(j.backgroundColor, "rgba");
        }),
        (s.hsla = function () {
            return C("background-color:hsla(120,40%,100%,.5)"), F(j.backgroundColor, "rgba") || F(j.backgroundColor, "hsla");
        }),
        (s.multiplebgs = function () {
            return C("background:url(https://),url(https://),red url(https://)"), /(url\s*\(.*?){3}/.test(j.background);
        }),
        (s.backgroundsize = function () {
            return I("backgroundSize");
        }),
        (s.borderimage = function () {
            return I("borderImage");
        }),
        (s.borderradius = function () {
            return I("borderRadius");
        }),
        (s.boxshadow = function () {
            return I("boxShadow");
        }),
        (s.textshadow = function () {
            return b.createElement("div").style.textShadow === "";
        }),
        (s.opacity = function () {
            return D("opacity:.55"), /^0.55$/.test(j.opacity);
        }),
        (s.cssanimations = function () {
            return I("animationName");
        }),
        (s.csscolumns = function () {
            return I("columnCount");
        }),
        (s.cssgradients = function () {
            var a = "background-image:",
                b = "gradient(linear,left top,right bottom,from(#9f9),to(white));",
                c = "linear-gradient(left top,#9f9, white);";
            return C((a + "-webkit- ".split(" ").join(b + a) + n.join(c + a)).slice(0, -a.length)), F(j.backgroundImage, "gradient");
        }),
        (s.cssreflections = function () {
            return I("boxReflect");
        }),
        (s.csstransforms = function () {
            return !!I("transform");
        }),
        (s.csstransforms3d = function () {
            var a = !!I("perspective");
            return (
                a &&
                    "webkitPerspective" in g.style &&
                    y("@media (transform-3d),(-webkit-transform-3d){#modernizr{left:9px;position:absolute;height:3px;}}", function (b, c) {
                        a = b.offsetLeft === 9 && b.offsetHeight === 3;
                    }),
                a
            );
        }),
        (s.csstransitions = function () {
            return I("transition");
        }),
        (s.fontface = function () {
            var a;
            return (
                y('@font-face {font-family:"font";src:url("https://")}', function (c, d) {
                    var e = b.getElementById("smodernizr"),
                        f = e.sheet || e.styleSheet,
                        g = f ? (f.cssRules && f.cssRules[0] ? f.cssRules[0].cssText : f.cssText || "") : "";
                    a = /src/i.test(g) && g.indexOf(d.split(" ")[0]) === 0;
                }),
                a
            );
        }),
        (s.generatedcontent = function () {
            var a;
            return (
                y(["#", h, "{font:0/0 a}#", h, ':after{content:"', l, '";visibility:hidden;font:3px/1 a}'].join(""), function (b) {
                    a = b.offsetHeight >= 3;
                }),
                a
            );
        }),
        (s.video = function () {
            var a = b.createElement("video"),
                c = !1;
            try {
                if ((c = !!a.canPlayType))
                    (c = new Boolean(c)),
                        (c.ogg = a.canPlayType('video/ogg; codecs="theora"').replace(/^no$/, "")),
                        (c.h264 = a.canPlayType('video/mp4; codecs="avc1.42E01E"').replace(/^no$/, "")),
                        (c.webm = a.canPlayType('video/webm; codecs="vp8, vorbis"').replace(/^no$/, ""));
            } catch (d) {}
            return c;
        }),
        (s.audio = function () {
            var a = b.createElement("audio"),
                c = !1;
            try {
                if ((c = !!a.canPlayType))
                    (c = new Boolean(c)),
                        (c.ogg = a.canPlayType('audio/ogg; codecs="vorbis"').replace(/^no$/, "")),
                        (c.mp3 = a.canPlayType("audio/mpeg;").replace(/^no$/, "")),
                        (c.wav = a.canPlayType('audio/wav; codecs="1"').replace(/^no$/, "")),
                        (c.m4a = (a.canPlayType("audio/x-m4a;") || a.canPlayType("audio/aac;")).replace(/^no$/, ""));
            } catch (d) {}
            return c;
        }),
        (s.localstorage = function () {
            try {
                return localStorage.setItem(h, h), localStorage.removeItem(h), !0;
            } catch (a) {
                return !1;
            }
        }),
        (s.sessionstorage = function () {
            try {
                return sessionStorage.setItem(h, h), sessionStorage.removeItem(h), !0;
            } catch (a) {
                return !1;
            }
        }),
        (s.webworkers = function () {
            return !!a.Worker;
        }),
        (s.applicationcache = function () {
            return !!a.applicationCache;
        }),
        (s.svg = function () {
            return !!b.createElementNS && !!b.createElementNS(r.svg, "svg").createSVGRect;
        }),
        (s.inlinesvg = function () {
            var a = b.createElement("div");
            return (a.innerHTML = "<svg/>"), (a.firstChild && a.firstChild.namespaceURI) == r.svg;
        }),
        (s.smil = function () {
            return !!b.createElementNS && /SVGAnimate/.test(m.call(b.createElementNS(r.svg, "animate")));
        }),
        (s.svgclippaths = function () {
            return !!b.createElementNS && /SVGClipPath/.test(m.call(b.createElementNS(r.svg, "clipPath")));
        });
    for (var K in s) B(s, K) && ((x = K.toLowerCase()), (e[x] = s[K]()), v.push((e[x] ? "" : "no-") + x));
    return (
        e.input || J(),
        (e.addTest = function (a, b) {
            if (typeof a == "object") for (var d in a) B(a, d) && e.addTest(d, a[d]);
            else {
                a = a.toLowerCase();
                if (e[a] !== c) return e;
                (b = typeof b == "function" ? b() : b), typeof f != "undefined" && f && (g.className += " " + (b ? "" : "no-") + a), (e[a] = b);
            }
            return e;
        }),
        C(""),
        (i = k = null),
        (function (a, b) {
            function l(a, b) {
                var c = a.createElement("p"),
                    d = a.getElementsByTagName("head")[0] || a.documentElement;
                return (c.innerHTML = "x<style>" + b + "</style>"), d.insertBefore(c.lastChild, d.firstChild);
            }
            function m() {
                var a = s.elements;
                return typeof a == "string" ? a.split(" ") : a;
            }
            function n(a) {
                var b = j[a[h]];
                return b || ((b = {}), i++, (a[h] = i), (j[i] = b)), b;
            }
            function o(a, c, d) {
                c || (c = b);
                if (k) return c.createElement(a);
                d || (d = n(c));
                var g;
                return d.cache[a] ? (g = d.cache[a].cloneNode()) : f.test(a) ? (g = (d.cache[a] = d.createElem(a)).cloneNode()) : (g = d.createElem(a)), g.canHaveChildren && !e.test(a) && !g.tagUrn ? d.frag.appendChild(g) : g;
            }
            function p(a, c) {
                a || (a = b);
                if (k) return a.createDocumentFragment();
                c = c || n(a);
                var d = c.frag.cloneNode(),
                    e = 0,
                    f = m(),
                    g = f.length;
                for (; e < g; e++) d.createElement(f[e]);
                return d;
            }
            function q(a, b) {
                b.cache || ((b.cache = {}), (b.createElem = a.createElement), (b.createFrag = a.createDocumentFragment), (b.frag = b.createFrag())),
                    (a.createElement = function (c) {
                        return s.shivMethods ? o(c, a, b) : b.createElem(c);
                    }),
                    (a.createDocumentFragment = Function(
                        "h,f",
                        "return function(){var n=f.cloneNode(),c=n.createElement;h.shivMethods&&(" +
                            m()
                                .join()
                                .replace(/[\w\-]+/g, function (a) {
                                    return b.createElem(a), b.frag.createElement(a), 'c("' + a + '")';
                                }) +
                            ");return n}"
                    )(s, b.frag));
            }
            function r(a) {
                a || (a = b);
                var c = n(a);
                return (
                    s.shivCSS && !g && !c.hasCSS && (c.hasCSS = !!l(a, "article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}mark{background:#FF0;color:#000}template{display:none}")), k || q(a, c), a
                );
            }
            var c = "3.7.0",
                d = a.html5 || {},
                e = /^<|^(?:button|map|select|textarea|object|iframe|option|optgroup)$/i,
                f = /^(?:a|b|code|div|fieldset|h1|h2|h3|h4|h5|h6|i|label|li|ol|p|q|span|strong|style|table|tbody|td|th|tr|ul)$/i,
                g,
                h = "_html5shiv",
                i = 0,
                j = {},
                k;
            (function () {
                try {
                    var a = b.createElement("a");
                    (a.innerHTML = "<xyz></xyz>"),
                        (g = "hidden" in a),
                        (k =
                            a.childNodes.length == 1 ||
                            (function () {
                                b.createElement("a");
                                var a = b.createDocumentFragment();
                                return typeof a.cloneNode == "undefined" || typeof a.createDocumentFragment == "undefined" || typeof a.createElement == "undefined";
                            })());
                } catch (c) {
                    (g = !0), (k = !0);
                }
            })();
            var s = {
                elements: d.elements || "abbr article aside audio bdi canvas data datalist details dialog figcaption figure footer header hgroup main mark meter nav output progress section summary template time video",
                version: c,
                shivCSS: d.shivCSS !== !1,
                supportsUnknownElements: k,
                shivMethods: d.shivMethods !== !1,
                type: "default",
                shivDocument: r,
                createElement: o,
                createDocumentFragment: p,
            };
            (a.html5 = s), r(b);
        })(this, b),
        (e._version = d),
        (e._prefixes = n),
        (e._domPrefixes = q),
        (e._cssomPrefixes = p),
        (e.hasEvent = z),
        (e.testProp = function (a) {
            return G([a]);
        }),
        (e.testAllProps = I),
        (e.testStyles = y),
        (g.className = g.className.replace(/(^|\s)no-js(\s|$)/, "$1$2") + (f ? " js " + v.join(" ") : "")),
        e
    );
})(this, this.document)),
    (function (a, b, c) {
        function d(a) {
            return "[object Function]" == o.call(a);
        }
        function e(a) {
            return "string" == typeof a;
        }
        function f() {}
        function g(a) {
            return !a || "loaded" == a || "complete" == a || "uninitialized" == a;
        }
        function h() {
            var a = p.shift();
            (q = 1),
                a
                    ? a.t
                        ? m(function () {
                              ("c" == a.t ? B.injectCss : B.injectJs)(a.s, 0, a.a, a.x, a.e, 1);
                          }, 0)
                        : (a(), h())
                    : (q = 0);
        }
        function i(a, c, d, e, f, i, j) {
            function k(b) {
                if (!o && g(l.readyState) && ((u.r = o = 1), !q && h(), (l.onload = l.onreadystatechange = null), b)) {
                    "img" != a &&
                        m(function () {
                            t.removeChild(l);
                        }, 50);
                    for (var d in y[c]) y[c].hasOwnProperty(d) && y[c][d].onload();
                }
            }
            var j = j || B.errorTimeout,
                l = b.createElement(a),
                o = 0,
                r = 0,
                u = { t: d, s: c, e: f, a: i, x: j };
            1 === y[c] && ((r = 1), (y[c] = [])),
                "object" == a ? (l.data = c) : ((l.src = c), (l.type = a)),
                (l.width = l.height = "0"),
                (l.onerror = l.onload = l.onreadystatechange = function () {
                    k.call(this, r);
                }),
                p.splice(e, 0, u),
                "img" != a && (r || 2 === y[c] ? (t.insertBefore(l, s ? null : n), m(k, j)) : y[c].push(l));
        }
        function j(a, b, c, d, f) {
            return (q = 0), (b = b || "j"), e(a) ? i("c" == b ? v : u, a, b, this.i++, c, d, f) : (p.splice(this.i++, 0, a), 1 == p.length && h()), this;
        }
        function k() {
            var a = B;
            return (a.loader = { load: j, i: 0 }), a;
        }
        var l = b.documentElement,
            m = a.setTimeout,
            n = b.getElementsByTagName("script")[0],
            o = {}.toString,
            p = [],
            q = 0,
            r = "MozAppearance" in l.style,
            s = r && !!b.createRange().compareNode,
            t = s ? l : n.parentNode,
            l = a.opera && "[object Opera]" == o.call(a.opera),
            l = !!b.attachEvent && !l,
            u = r ? "object" : l ? "script" : "img",
            v = l ? "script" : u,
            w =
                Array.isArray ||
                function (a) {
                    return "[object Array]" == o.call(a);
                },
            x = [],
            y = {},
            z = {
                timeout: function (a, b) {
                    return b.length && (a.timeout = b[0]), a;
                },
            },
            A,
            B;
        (B = function (a) {
            function b(a) {
                var a = a.split("!"),
                    b = x.length,
                    c = a.pop(),
                    d = a.length,
                    c = { url: c, origUrl: c, prefixes: a },
                    e,
                    f,
                    g;
                for (f = 0; f < d; f++) (g = a[f].split("=")), (e = z[g.shift()]) && (c = e(c, g));
                for (f = 0; f < b; f++) c = x[f](c);
                return c;
            }
            function g(a, e, f, g, h) {
                var i = b(a),
                    j = i.autoCallback;
                i.url.split(".").pop().split("?").shift(),
                    i.bypass ||
                        (e && (e = d(e) ? e : e[a] || e[g] || e[a.split("/").pop().split("?")[0]]),
                        i.instead
                            ? i.instead(a, e, f, g, h)
                            : (y[i.url] ? (i.noexec = !0) : (y[i.url] = 1),
                              f.load(i.url, i.forceCSS || (!i.forceJS && "css" == i.url.split(".").pop().split("?").shift()) ? "c" : c, i.noexec, i.attrs, i.timeout),
                              (d(e) || d(j)) &&
                                  f.load(function () {
                                      k(), e && e(i.origUrl, h, g), j && j(i.origUrl, h, g), (y[i.url] = 2);
                                  })));
            }
            function h(a, b) {
                function c(a, c) {
                    if (a) {
                        if (e(a))
                            c ||
                                (j = function () {
                                    var a = [].slice.call(arguments);
                                    k.apply(this, a), l();
                                }),
                                g(a, j, b, 0, h);
                        else if (Object(a) === a)
                            for (n in ((m = (function () {
                                var b = 0,
                                    c;
                                for (c in a) a.hasOwnProperty(c) && b++;
                                return b;
                            })()),
                            a))
                                a.hasOwnProperty(n) &&
                                    (!c &&
                                        !--m &&
                                        (d(j)
                                            ? (j = function () {
                                                  var a = [].slice.call(arguments);
                                                  k.apply(this, a), l();
                                              })
                                            : (j[n] = (function (a) {
                                                  return function () {
                                                      var b = [].slice.call(arguments);
                                                      a && a.apply(this, b), l();
                                                  };
                                              })(k[n]))),
                                    g(a[n], j, b, n, h));
                    } else !c && l();
                }
                var h = !!a.test,
                    i = a.load || a.both,
                    j = a.callback || f,
                    k = j,
                    l = a.complete || f,
                    m,
                    n;
                c(h ? a.yep : a.nope, !!i), i && c(i);
            }
            var i,
                j,
                l = this.yepnope.loader;
            if (e(a)) g(a, 0, l, 0);
            else if (w(a)) for (i = 0; i < a.length; i++) (j = a[i]), e(j) ? g(j, 0, l, 0) : w(j) ? B(j) : Object(j) === j && h(j, l);
            else Object(a) === a && h(a, l);
        }),
            (B.addPrefix = function (a, b) {
                z[a] = b;
            }),
            (B.addFilter = function (a) {
                x.push(a);
            }),
            (B.errorTimeout = 1e4),
            null == b.readyState &&
                b.addEventListener &&
                ((b.readyState = "loading"),
                b.addEventListener(
                    "DOMContentLoaded",
                    (A = function () {
                        b.removeEventListener("DOMContentLoaded", A, 0), (b.readyState = "complete");
                    }),
                    0
                )),
            (a.yepnope = k()),
            (a.yepnope.executeStack = h),
            (a.yepnope.injectJs = function (a, c, d, e, i, j) {
                var k = b.createElement("script"),
                    l,
                    o,
                    e = e || B.errorTimeout;
                k.src = a;
                for (o in d) k.setAttribute(o, d[o]);
                (c = j ? h : c || f),
                    (k.onreadystatechange = k.onload = function () {
                        !l && g(k.readyState) && ((l = 1), c(), (k.onload = k.onreadystatechange = null));
                    }),
                    m(function () {
                        l || ((l = 1), c(1));
                    }, e),
                    i ? k.onload() : n.parentNode.insertBefore(k, n);
            }),
            (a.yepnope.injectCss = function (a, c, d, e, g, i) {
                var e = b.createElement("link"),
                    j,
                    c = i ? h : c || f;
                (e.href = a), (e.rel = "stylesheet"), (e.type = "text/css");
                for (j in d) e.setAttribute(j, d[j]);
                g || (n.parentNode.insertBefore(e, n), m(c, 0));
            });
    })(this, document),
    (Modernizr.load = function () {
        yepnope.apply(window, [].slice.call(arguments, 0));
    });

/**
 * imagesLoaded PACKAGED v3.1.8
 * JavaScript is all like "You images are done yet or what?"
 * MIT License
 */
(function () {
    function e() {}
    function t(e, t) {
        for (var n = e.length; n--; ) if (e[n].listener === t) return n;
        return -1;
    }
    function n(e) {
        return function () {
            return this[e].apply(this, arguments);
        };
    }
    var i = e.prototype,
        r = this,
        o = r.EventEmitter;
    (i.getListeners = function (e) {
        var t,
            n,
            i = this._getEvents();
        if ("object" == typeof e) {
            t = {};
            for (n in i) i.hasOwnProperty(n) && e.test(n) && (t[n] = i[n]);
        } else t = i[e] || (i[e] = []);
        return t;
    }),
        (i.flattenListeners = function (e) {
            var t,
                n = [];
            for (t = 0; e.length > t; t += 1) n.push(e[t].listener);
            return n;
        }),
        (i.getListenersAsObject = function (e) {
            var t,
                n = this.getListeners(e);
            return n instanceof Array && ((t = {}), (t[e] = n)), t || n;
        }),
        (i.addListener = function (e, n) {
            var i,
                r = this.getListenersAsObject(e),
                o = "object" == typeof n;
            for (i in r) r.hasOwnProperty(i) && -1 === t(r[i], n) && r[i].push(o ? n : { listener: n, once: !1 });
            return this;
        }),
        (i.on = n("addListener")),
        (i.addOnceListener = function (e, t) {
            return this.addListener(e, { listener: t, once: !0 });
        }),
        (i.once = n("addOnceListener")),
        (i.defineEvent = function (e) {
            return this.getListeners(e), this;
        }),
        (i.defineEvents = function (e) {
            for (var t = 0; e.length > t; t += 1) this.defineEvent(e[t]);
            return this;
        }),
        (i.removeListener = function (e, n) {
            var i,
                r,
                o = this.getListenersAsObject(e);
            for (r in o) o.hasOwnProperty(r) && ((i = t(o[r], n)), -1 !== i && o[r].splice(i, 1));
            return this;
        }),
        (i.off = n("removeListener")),
        (i.addListeners = function (e, t) {
            return this.manipulateListeners(!1, e, t);
        }),
        (i.removeListeners = function (e, t) {
            return this.manipulateListeners(!0, e, t);
        }),
        (i.manipulateListeners = function (e, t, n) {
            var i,
                r,
                o = e ? this.removeListener : this.addListener,
                s = e ? this.removeListeners : this.addListeners;
            if ("object" != typeof t || t instanceof RegExp) for (i = n.length; i--; ) o.call(this, t, n[i]);
            else for (i in t) t.hasOwnProperty(i) && (r = t[i]) && ("function" == typeof r ? o.call(this, i, r) : s.call(this, i, r));
            return this;
        }),
        (i.removeEvent = function (e) {
            var t,
                n = typeof e,
                i = this._getEvents();
            if ("string" === n) delete i[e];
            else if ("object" === n) for (t in i) i.hasOwnProperty(t) && e.test(t) && delete i[t];
            else delete this._events;
            return this;
        }),
        (i.removeAllListeners = n("removeEvent")),
        (i.emitEvent = function (e, t) {
            var n,
                i,
                r,
                o,
                s = this.getListenersAsObject(e);
            for (r in s)
                if (s.hasOwnProperty(r))
                    for (i = s[r].length; i--; ) (n = s[r][i]), n.once === !0 && this.removeListener(e, n.listener), (o = n.listener.apply(this, t || [])), o === this._getOnceReturnValue() && this.removeListener(e, n.listener);
            return this;
        }),
        (i.trigger = n("emitEvent")),
        (i.emit = function (e) {
            var t = Array.prototype.slice.call(arguments, 1);
            return this.emitEvent(e, t);
        }),
        (i.setOnceReturnValue = function (e) {
            return (this._onceReturnValue = e), this;
        }),
        (i._getOnceReturnValue = function () {
            return this.hasOwnProperty("_onceReturnValue") ? this._onceReturnValue : !0;
        }),
        (i._getEvents = function () {
            return this._events || (this._events = {});
        }),
        (e.noConflict = function () {
            return (r.EventEmitter = o), e;
        }),
        "function" == typeof define && define.amd
            ? define("eventEmitter/EventEmitter", [], function () {
                  return e;
              })
            : "object" == typeof module && module.exports
            ? (module.exports = e)
            : (this.EventEmitter = e);
}.call(this),
    (function (e) {
        function t(t) {
            var n = e.event;
            return (n.target = n.target || n.srcElement || t), n;
        }
        var n = document.documentElement,
            i = function () {};
        n.addEventListener
            ? (i = function (e, t, n) {
                  e.addEventListener(t, n, !1);
              })
            : n.attachEvent &&
              (i = function (e, n, i) {
                  (e[n + i] = i.handleEvent
                      ? function () {
                            var n = t(e);
                            i.handleEvent.call(i, n);
                        }
                      : function () {
                            var n = t(e);
                            i.call(e, n);
                        }),
                      e.attachEvent("on" + n, e[n + i]);
              });
        var r = function () {};
        n.removeEventListener
            ? (r = function (e, t, n) {
                  e.removeEventListener(t, n, !1);
              })
            : n.detachEvent &&
              (r = function (e, t, n) {
                  e.detachEvent("on" + t, e[t + n]);
                  try {
                      delete e[t + n];
                  } catch (i) {
                      e[t + n] = void 0;
                  }
              });
        var o = { bind: i, unbind: r };
        "function" == typeof define && define.amd ? define("eventie/eventie", o) : (e.eventie = o);
    })(this),
    (function (e, t) {
        "function" == typeof define && define.amd
            ? define(["eventEmitter/EventEmitter", "eventie/eventie"], function (n, i) {
                  return t(e, n, i);
              })
            : "object" == typeof exports
            ? (module.exports = t(e, require("wolfy87-eventemitter"), require("eventie")))
            : (e.imagesLoaded = t(e, e.EventEmitter, e.eventie));
    })(window, function (e, t, n) {
        function i(e, t) {
            for (var n in t) e[n] = t[n];
            return e;
        }
        function r(e) {
            return "[object Array]" === d.call(e);
        }
        function o(e) {
            var t = [];
            if (r(e)) t = e;
            else if ("number" == typeof e.length) for (var n = 0, i = e.length; i > n; n++) t.push(e[n]);
            else t.push(e);
            return t;
        }
        function s(e, t, n) {
            if (!(this instanceof s)) return new s(e, t);
            "string" == typeof e && (e = document.querySelectorAll(e)),
                (this.elements = o(e)),
                (this.options = i({}, this.options)),
                "function" == typeof t ? (n = t) : i(this.options, t),
                n && this.on("always", n),
                this.getImages(),
                a && (this.jqDeferred = new a.Deferred());
            var r = this;
            setTimeout(function () {
                r.check();
            });
        }
        function f(e) {
            this.img = e;
        }
        function c(e) {
            (this.src = e), (v[e] = this);
        }
        var a = e.jQuery,
            u = e.console,
            h = u !== void 0,
            d = Object.prototype.toString;
        (s.prototype = new t()),
            (s.prototype.options = {}),
            (s.prototype.getImages = function () {
                this.images = [];
                for (var e = 0, t = this.elements.length; t > e; e++) {
                    var n = this.elements[e];
                    "IMG" === n.nodeName && this.addImage(n);
                    var i = n.nodeType;
                    if (i && (1 === i || 9 === i || 11 === i))
                        for (var r = n.querySelectorAll("img"), o = 0, s = r.length; s > o; o++) {
                            var f = r[o];
                            this.addImage(f);
                        }
                }
            }),
            (s.prototype.addImage = function (e) {
                var t = new f(e);
                this.images.push(t);
            }),
            (s.prototype.check = function () {
                function e(e, r) {
                    return t.options.debug && h && u.log("confirm", e, r), t.progress(e), n++, n === i && t.complete(), !0;
                }
                var t = this,
                    n = 0,
                    i = this.images.length;
                if (((this.hasAnyBroken = !1), !i)) return this.complete(), void 0;
                for (var r = 0; i > r; r++) {
                    var o = this.images[r];
                    o.on("confirm", e), o.check();
                }
            }),
            (s.prototype.progress = function (e) {
                this.hasAnyBroken = this.hasAnyBroken || !e.isLoaded;
                var t = this;
                setTimeout(function () {
                    t.emit("progress", t, e), t.jqDeferred && t.jqDeferred.notify && t.jqDeferred.notify(t, e);
                });
            }),
            (s.prototype.complete = function () {
                var e = this.hasAnyBroken ? "fail" : "done";
                this.isComplete = !0;
                var t = this;
                setTimeout(function () {
                    if ((t.emit(e, t), t.emit("always", t), t.jqDeferred)) {
                        var n = t.hasAnyBroken ? "reject" : "resolve";
                        t.jqDeferred[n](t);
                    }
                });
            }),
            a &&
                (a.fn.imagesLoaded = function (e, t) {
                    var n = new s(this, e, t);
                    return n.jqDeferred.promise(a(this));
                }),
            (f.prototype = new t()),
            (f.prototype.check = function () {
                var e = v[this.img.src] || new c(this.img.src);
                if (e.isConfirmed) return this.confirm(e.isLoaded, "cached was confirmed"), void 0;
                if (this.img.complete && void 0 !== this.img.naturalWidth) return this.confirm(0 !== this.img.naturalWidth, "naturalWidth"), void 0;
                var t = this;
                e.on("confirm", function (e, n) {
                    return t.confirm(e.isLoaded, n), !0;
                }),
                    e.check();
            }),
            (f.prototype.confirm = function (e, t) {
                (this.isLoaded = e), this.emit("confirm", this, t);
            });
        var v = {};
        return (
            (c.prototype = new t()),
            (c.prototype.check = function () {
                if (!this.isChecked) {
                    var e = new Image();
                    n.bind(e, "load", this), n.bind(e, "error", this), (e.src = this.src), (this.isChecked = !0);
                }
            }),
            (c.prototype.handleEvent = function (e) {
                var t = "on" + e.type;
                this[t] && this[t](e);
            }),
            (c.prototype.onload = function (e) {
                this.confirm(!0, "onload"), this.unbindProxyEvents(e);
            }),
            (c.prototype.onerror = function (e) {
                this.confirm(!1, "onerror"), this.unbindProxyEvents(e);
            }),
            (c.prototype.confirm = function (e, t) {
                (this.isConfirmed = !0), (this.isLoaded = e), this.emit("confirm", this, t);
            }),
            (c.prototype.unbindProxyEvents = function (e) {
                n.unbind(e.target, "load", this), n.unbind(e.target, "error", this);
            }),
            s
        );
    }));

/*!
 Waypoints - 4.0.1
 Copyright © 2011-2016 Caleb Troughton
 Licensed under the MIT license.
 https://github.com/imakewebthings/waypoints/blob/master/licenses.txt
 */
!(function () {
    "use strict";
    function t(o) {
        if (!o) throw new Error("No options passed to Waypoint constructor");
        if (!o.element) throw new Error("No element option passed to Waypoint constructor");
        if (!o.handler) throw new Error("No handler option passed to Waypoint constructor");
        (this.key = "waypoint-" + e),
            (this.options = t.Adapter.extend({}, t.defaults, o)),
            (this.element = this.options.element),
            (this.adapter = new t.Adapter(this.element)),
            (this.callback = o.handler),
            (this.axis = this.options.horizontal ? "horizontal" : "vertical"),
            (this.enabled = this.options.enabled),
            (this.triggerPoint = null),
            (this.group = t.Group.findOrCreate({ name: this.options.group, axis: this.axis })),
            (this.context = t.Context.findOrCreateByElement(this.options.context)),
            t.offsetAliases[this.options.offset] && (this.options.offset = t.offsetAliases[this.options.offset]),
            this.group.add(this),
            this.context.add(this),
            (i[this.key] = this),
            (e += 1);
    }
    var e = 0,
        i = {};
    (t.prototype.queueTrigger = function (t) {
        this.group.queueTrigger(this, t);
    }),
        (t.prototype.trigger = function (t) {
            this.enabled && this.callback && this.callback.apply(this, t);
        }),
        (t.prototype.destroy = function () {
            this.context.remove(this), this.group.remove(this), delete i[this.key];
        }),
        (t.prototype.disable = function () {
            return (this.enabled = !1), this;
        }),
        (t.prototype.enable = function () {
            return this.context.refresh(), (this.enabled = !0), this;
        }),
        (t.prototype.next = function () {
            return this.group.next(this);
        }),
        (t.prototype.previous = function () {
            return this.group.previous(this);
        }),
        (t.invokeAll = function (t) {
            var e = [];
            for (var o in i) e.push(i[o]);
            for (var n = 0, r = e.length; r > n; n++) e[n][t]();
        }),
        (t.destroyAll = function () {
            t.invokeAll("destroy");
        }),
        (t.disableAll = function () {
            t.invokeAll("disable");
        }),
        (t.enableAll = function () {
            t.Context.refreshAll();
            for (var e in i) i[e].enabled = !0;
            return this;
        }),
        (t.refreshAll = function () {
            t.Context.refreshAll();
        }),
        (t.viewportHeight = function () {
            return window.innerHeight || document.documentElement.clientHeight;
        }),
        (t.viewportWidth = function () {
            return document.documentElement.clientWidth;
        }),
        (t.adapters = []),
        (t.defaults = { context: window, continuous: !0, enabled: !0, group: "default", horizontal: !1, offset: 0 }),
        (t.offsetAliases = {
            "bottom-in-view": function () {
                return this.context.innerHeight() - this.adapter.outerHeight();
            },
            "right-in-view": function () {
                return this.context.innerWidth() - this.adapter.outerWidth();
            },
        }),
        (window.Waypoint = t);
})(),
    (function () {
        "use strict";
        function t(t) {
            window.setTimeout(t, 1e3 / 60);
        }
        function e(t) {
            (this.element = t),
                (this.Adapter = n.Adapter),
                (this.adapter = new this.Adapter(t)),
                (this.key = "waypoint-context-" + i),
                (this.didScroll = !1),
                (this.didResize = !1),
                (this.oldScroll = { x: this.adapter.scrollLeft(), y: this.adapter.scrollTop() }),
                (this.waypoints = { vertical: {}, horizontal: {} }),
                (t.waypointContextKey = this.key),
                (o[t.waypointContextKey] = this),
                (i += 1),
                n.windowContext || ((n.windowContext = !0), (n.windowContext = new e(window))),
                this.createThrottledScrollHandler(),
                this.createThrottledResizeHandler();
        }
        var i = 0,
            o = {},
            n = window.Waypoint,
            r = window.onload;
        (e.prototype.add = function (t) {
            var e = t.options.horizontal ? "horizontal" : "vertical";
            (this.waypoints[e][t.key] = t), this.refresh();
        }),
            (e.prototype.checkEmpty = function () {
                var t = this.Adapter.isEmptyObject(this.waypoints.horizontal),
                    e = this.Adapter.isEmptyObject(this.waypoints.vertical),
                    i = this.element == this.element.window;
                t && e && !i && (this.adapter.off(".waypoints"), delete o[this.key]);
            }),
            (e.prototype.createThrottledResizeHandler = function () {
                function t() {
                    e.handleResize(), (e.didResize = !1);
                }
                var e = this;
                this.adapter.on("resize.waypoints", function () {
                    e.didResize || ((e.didResize = !0), n.requestAnimationFrame(t));
                });
            }),
            (e.prototype.createThrottledScrollHandler = function () {
                function t() {
                    e.handleScroll(), (e.didScroll = !1);
                }
                var e = this;
                this.adapter.on("scroll.waypoints", function () {
                    (!e.didScroll || n.isTouch) && ((e.didScroll = !0), n.requestAnimationFrame(t));
                });
            }),
            (e.prototype.handleResize = function () {
                n.Context.refreshAll();
            }),
            (e.prototype.handleScroll = function () {
                var t = {},
                    e = {
                        horizontal: { newScroll: this.adapter.scrollLeft(), oldScroll: this.oldScroll.x, forward: "right", backward: "left" },
                        vertical: { newScroll: this.adapter.scrollTop(), oldScroll: this.oldScroll.y, forward: "down", backward: "up" },
                    };
                for (var i in e) {
                    var o = e[i],
                        n = o.newScroll > o.oldScroll,
                        r = n ? o.forward : o.backward;
                    for (var s in this.waypoints[i]) {
                        var a = this.waypoints[i][s];
                        if (null !== a.triggerPoint) {
                            var l = o.oldScroll < a.triggerPoint,
                                h = o.newScroll >= a.triggerPoint,
                                p = l && h,
                                u = !l && !h;
                            (p || u) && (a.queueTrigger(r), (t[a.group.id] = a.group));
                        }
                    }
                }
                for (var c in t) t[c].flushTriggers();
                this.oldScroll = { x: e.horizontal.newScroll, y: e.vertical.newScroll };
            }),
            (e.prototype.innerHeight = function () {
                return this.element == this.element.window ? n.viewportHeight() : this.adapter.innerHeight();
            }),
            (e.prototype.remove = function (t) {
                delete this.waypoints[t.axis][t.key], this.checkEmpty();
            }),
            (e.prototype.innerWidth = function () {
                return this.element == this.element.window ? n.viewportWidth() : this.adapter.innerWidth();
            }),
            (e.prototype.destroy = function () {
                var t = [];
                for (var e in this.waypoints) for (var i in this.waypoints[e]) t.push(this.waypoints[e][i]);
                for (var o = 0, n = t.length; n > o; o++) t[o].destroy();
            }),
            (e.prototype.refresh = function () {
                var t,
                    e = this.element == this.element.window,
                    i = e ? void 0 : this.adapter.offset(),
                    o = {};
                this.handleScroll(),
                    (t = {
                        horizontal: { contextOffset: e ? 0 : i.left, contextScroll: e ? 0 : this.oldScroll.x, contextDimension: this.innerWidth(), oldScroll: this.oldScroll.x, forward: "right", backward: "left", offsetProp: "left" },
                        vertical: { contextOffset: e ? 0 : i.top, contextScroll: e ? 0 : this.oldScroll.y, contextDimension: this.innerHeight(), oldScroll: this.oldScroll.y, forward: "down", backward: "up", offsetProp: "top" },
                    });
                for (var r in t) {
                    var s = t[r];
                    for (var a in this.waypoints[r]) {
                        var l,
                            h,
                            p,
                            u,
                            c,
                            d = this.waypoints[r][a],
                            f = d.options.offset,
                            w = d.triggerPoint,
                            y = 0,
                            g = null == w;
                        d.element !== d.element.window && (y = d.adapter.offset()[s.offsetProp]),
                            "function" == typeof f ? (f = f.apply(d)) : "string" == typeof f && ((f = parseFloat(f)), d.options.offset.indexOf("%") > -1 && (f = Math.ceil((s.contextDimension * f) / 100))),
                            (l = s.contextScroll - s.contextOffset),
                            (d.triggerPoint = Math.floor(y + l - f)),
                            (h = w < s.oldScroll),
                            (p = d.triggerPoint >= s.oldScroll),
                            (u = h && p),
                            (c = !h && !p),
                            !g && u
                                ? (d.queueTrigger(s.backward), (o[d.group.id] = d.group))
                                : !g && c
                                ? (d.queueTrigger(s.forward), (o[d.group.id] = d.group))
                                : g && s.oldScroll >= d.triggerPoint && (d.queueTrigger(s.forward), (o[d.group.id] = d.group));
                    }
                }
                return (
                    n.requestAnimationFrame(function () {
                        for (var t in o) o[t].flushTriggers();
                    }),
                    this
                );
            }),
            (e.findOrCreateByElement = function (t) {
                return e.findByElement(t) || new e(t);
            }),
            (e.refreshAll = function () {
                for (var t in o) o[t].refresh();
            }),
            (e.findByElement = function (t) {
                return o[t.waypointContextKey];
            }),
            (window.onload = function () {
                r && r(), e.refreshAll();
            }),
            (n.requestAnimationFrame = function (e) {
                var i = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || t;
                i.call(window, e);
            }),
            (n.Context = e);
    })(),
    (function () {
        "use strict";
        function t(t, e) {
            return t.triggerPoint - e.triggerPoint;
        }
        function e(t, e) {
            return e.triggerPoint - t.triggerPoint;
        }
        function i(t) {
            (this.name = t.name), (this.axis = t.axis), (this.id = this.name + "-" + this.axis), (this.waypoints = []), this.clearTriggerQueues(), (o[this.axis][this.name] = this);
        }
        var o = { vertical: {}, horizontal: {} },
            n = window.Waypoint;
        (i.prototype.add = function (t) {
            this.waypoints.push(t);
        }),
            (i.prototype.clearTriggerQueues = function () {
                this.triggerQueues = { up: [], down: [], left: [], right: [] };
            }),
            (i.prototype.flushTriggers = function () {
                for (var i in this.triggerQueues) {
                    var o = this.triggerQueues[i],
                        n = "up" === i || "left" === i;
                    o.sort(n ? e : t);
                    for (var r = 0, s = o.length; s > r; r += 1) {
                        var a = o[r];
                        (a.options.continuous || r === o.length - 1) && a.trigger([i]);
                    }
                }
                this.clearTriggerQueues();
            }),
            (i.prototype.next = function (e) {
                this.waypoints.sort(t);
                var i = n.Adapter.inArray(e, this.waypoints),
                    o = i === this.waypoints.length - 1;
                return o ? null : this.waypoints[i + 1];
            }),
            (i.prototype.previous = function (e) {
                this.waypoints.sort(t);
                var i = n.Adapter.inArray(e, this.waypoints);
                return i ? this.waypoints[i - 1] : null;
            }),
            (i.prototype.queueTrigger = function (t, e) {
                this.triggerQueues[e].push(t);
            }),
            (i.prototype.remove = function (t) {
                var e = n.Adapter.inArray(t, this.waypoints);
                e > -1 && this.waypoints.splice(e, 1);
            }),
            (i.prototype.first = function () {
                return this.waypoints[0];
            }),
            (i.prototype.last = function () {
                return this.waypoints[this.waypoints.length - 1];
            }),
            (i.findOrCreate = function (t) {
                return o[t.axis][t.name] || new i(t);
            }),
            (n.Group = i);
    })(),
    (function () {
        "use strict";
        function t(t) {
            this.$element = e(t);
        }
        var e = window.jQuery,
            i = window.Waypoint;
        e.each(["innerHeight", "innerWidth", "off", "offset", "on", "outerHeight", "outerWidth", "scrollLeft", "scrollTop"], function (e, i) {
            t.prototype[i] = function () {
                var t = Array.prototype.slice.call(arguments);
                return this.$element[i].apply(this.$element, t);
            };
        }),
            e.each(["extend", "inArray", "isEmptyObject"], function (i, o) {
                t[o] = e[o];
            }),
            i.adapters.push({ name: "jquery", Adapter: t }),
            (i.Adapter = t);
    })(),
    (function () {
        "use strict";
        function t(t) {
            return function () {
                var i = [],
                    o = arguments[0];
                return (
                    t.isFunction(arguments[0]) && ((o = t.extend({}, arguments[1])), (o.handler = arguments[0])),
                    this.each(function () {
                        var n = t.extend({}, o, { element: this });
                        "string" == typeof n.context && (n.context = t(this).closest(n.context)[0]), i.push(new e(n));
                    }),
                    i
                );
            };
        }
        var e = window.Waypoint;
        window.jQuery && (window.jQuery.fn.waypoint = t(window.jQuery)), window.Zepto && (window.Zepto.fn.waypoint = t(window.Zepto));
    })();

/**
 * Justified Gallery - v3.6.0
 * http://miromannino.github.io/Justified-Gallery/
 * Copyright (c) 2015 Miro Mannino
 * Licensed under the MIT license.
 */
!(function (a) {
    var b = function (b, c) {
        (this.settings = c),
            this.checkSettings(),
            (this.imgAnalyzerTimeout = null),
            (this.entries = null),
            (this.buildingRow = { entriesBuff: [], width: 0, aspectRatio: 0 }),
            (this.lastAnalyzedIndex = -1),
            (this.yield = { every: 2, flushed: 0 }),
            (this.border = c.border >= 0 ? c.border : c.margins),
            (this.maxRowHeight = this.retrieveMaxRowHeight()),
            (this.suffixRanges = this.retrieveSuffixRanges()),
            (this.offY = this.border),
            (this.spinner = { phase: 0, timeSlot: 150, $el: a('<div class="spinner"><span></span><span></span><span></span></div>'), intervalId: null }),
            (this.checkWidthIntervalId = null),
            (this.galleryWidth = b.width()),
            (this.$gallery = b);
    };
    (b.prototype.getSuffix = function (a, b) {
        var c, d;
        for (c = a > b ? a : b, d = 0; d < this.suffixRanges.length; d++) if (c <= this.suffixRanges[d]) return this.settings.sizeRangeSuffixes[this.suffixRanges[d]];
        return this.settings.sizeRangeSuffixes[this.suffixRanges[d - 1]];
    }),
        (b.prototype.removeSuffix = function (a, b) {
            return a.substring(0, a.length - b.length);
        }),
        (b.prototype.endsWith = function (a, b) {
            return -1 !== a.indexOf(b, a.length - b.length);
        }),
        (b.prototype.getUsedSuffix = function (a) {
            for (var b in this.settings.sizeRangeSuffixes)
                if (this.settings.sizeRangeSuffixes.hasOwnProperty(b)) {
                    if (0 === this.settings.sizeRangeSuffixes[b].length) continue;
                    if (this.endsWith(a, this.settings.sizeRangeSuffixes[b])) return this.settings.sizeRangeSuffixes[b];
                }
            return "";
        }),
        (b.prototype.newSrc = function (a, b, c) {
            var d = a.match(this.settings.extension),
                e = null != d ? d[0] : "",
                f = a.replace(this.settings.extension, "");
            return (f = this.removeSuffix(f, this.getUsedSuffix(f))), (f += this.getSuffix(b, c) + e);
        }),
        (b.prototype.showImg = function (a, b) {
            this.settings.cssAnimation ? (a.addClass("entry-visible"), b && b()) : a.stop().fadeTo(this.settings.imagesAnimationDuration, 1, b);
        }),
        (b.prototype.extractImgSrcFromImage = function (a) {
            var b = "undefined" != typeof a.data("safe-src") ? a.data("safe-src") : a.attr("src");
            return a.data("jg.originalSrc", b), b;
        }),
        (b.prototype.imgFromEntry = function (a) {
            var b = a.find("> img");
            return 0 === b.length && (b = a.find("> a > img")), 0 === b.length ? null : b;
        }),
        (b.prototype.captionFromEntry = function (a) {
            var b = a.find("> .caption");
            return 0 === b.length ? null : b;
        }),
        (b.prototype.displayEntry = function (b, c, d, e, f, g) {
            b.width(e), b.height(g), b.css("top", d), b.css("left", c);
            var h = this.imgFromEntry(b);
            if (null !== h) {
                h.css("width", e), h.css("height", f), h.css("margin-left", -e / 2), h.css("margin-top", -f / 2);
                var i = h.attr("src"),
                    j = this.newSrc(i, e, f);
                h.one("error", function () {
                    h.attr("src", h.data("jg.originalSrc"));
                });
                var k = function () {
                    i !== j && h.attr("src", j);
                };
                "skipped" === b.data("jg.loaded")
                    ? this.onImageEvent(
                          i,
                          a.proxy(function () {
                              this.showImg(b, k), b.data("jg.loaded", !0);
                          }, this)
                      )
                    : this.showImg(b, k);
            } else this.showImg(b);
            this.displayEntryCaption(b);
        }),
        (b.prototype.displayEntryCaption = function (b) {
            var c = this.imgFromEntry(b);
            if (null !== c && this.settings.captions) {
                var d = this.captionFromEntry(b);
                if (null == d) {
                    var e = c.attr("alt");
                    "undefined" == typeof e && (e = b.attr("title")), "undefined" != typeof e && ((d = a('<div class="caption">' + e + "</div>")), b.append(d), b.data("jg.createdCaption", !0));
                }
                null !== d && (this.settings.cssAnimation || d.stop().fadeTo(0, this.settings.captionSettings.nonVisibleOpacity), this.addCaptionEventsHandlers(b));
            } else this.removeCaptionEventsHandlers(b);
        }),
        (b.prototype.onEntryMouseEnterForCaption = function (b) {
            var c = this.captionFromEntry(a(b.currentTarget));
            this.settings.cssAnimation ? c.addClass("caption-visible").removeClass("caption-hidden") : c.stop().fadeTo(this.settings.captionSettings.animationDuration, this.settings.captionSettings.visibleOpacity);
        }),
        (b.prototype.onEntryMouseLeaveForCaption = function (b) {
            var c = this.captionFromEntry(a(b.currentTarget));
            this.settings.cssAnimation ? c.removeClass("caption-visible").removeClass("caption-hidden") : c.stop().fadeTo(this.settings.captionSettings.animationDuration, this.settings.captionSettings.nonVisibleOpacity);
        }),
        (b.prototype.addCaptionEventsHandlers = function (b) {
            var c = b.data("jg.captionMouseEvents");
            "undefined" == typeof c &&
                ((c = { mouseenter: a.proxy(this.onEntryMouseEnterForCaption, this), mouseleave: a.proxy(this.onEntryMouseLeaveForCaption, this) }),
                b.on("mouseenter", void 0, void 0, c.mouseenter),
                b.on("mouseleave", void 0, void 0, c.mouseleave),
                b.data("jg.captionMouseEvents", c));
        }),
        (b.prototype.removeCaptionEventsHandlers = function (a) {
            var b = a.data("jg.captionMouseEvents");
            "undefined" != typeof b && (a.off("mouseenter", void 0, b.mouseenter), a.off("mouseleave", void 0, b.mouseleave), a.removeData("jg.captionMouseEvents"));
        }),
        (b.prototype.prepareBuildingRow = function (a) {
            var b,
                c,
                d,
                e,
                f,
                g = !0,
                h = 0,
                i = this.galleryWidth - 2 * this.border - (this.buildingRow.entriesBuff.length - 1) * this.settings.margins,
                j = i / this.buildingRow.aspectRatio,
                k = this.buildingRow.width / i > this.settings.justifyThreshold;
            if (a && "hide" === this.settings.lastRow && !k) {
                for (b = 0; b < this.buildingRow.entriesBuff.length; b++) (c = this.buildingRow.entriesBuff[b]), this.settings.cssAnimation ? c.removeClass("entry-visible") : c.stop().fadeTo(0, 0);
                return -1;
            }
            for (a && !k && "nojustify" === this.settings.lastRow && (g = !1), b = 0; b < this.buildingRow.entriesBuff.length; b++)
                (c = this.buildingRow.entriesBuff[b]),
                    (d = c.data("jg.width") / c.data("jg.height")),
                    g ? ((e = b === this.buildingRow.entriesBuff.length - 1 ? i : j * d), (f = j)) : ((e = this.settings.rowHeight * d), (f = this.settings.rowHeight)),
                    (i -= Math.round(e)),
                    c.data("jg.jwidth", Math.round(e)),
                    c.data("jg.jheight", Math.ceil(f)),
                    (0 === b || h > f) && (h = f);
            return this.settings.fixedHeight && h > this.settings.rowHeight && (h = this.settings.rowHeight), { minHeight: h, justify: g };
        }),
        (b.prototype.clearBuildingRow = function () {
            (this.buildingRow.entriesBuff = []), (this.buildingRow.aspectRatio = 0), (this.buildingRow.width = 0);
        }),
        (b.prototype.flushRow = function (a) {
            var b,
                c,
                d,
                e = this.settings,
                f = this.border;
            if (((d = this.prepareBuildingRow(a)), (c = d.minHeight), a && "hide" === e.lastRow && -1 === c)) return void this.clearBuildingRow();
            this.maxRowHeight.percentage ? this.maxRowHeight.value * e.rowHeight < c && (c = this.maxRowHeight.value * e.rowHeight) : this.maxRowHeight.value > 0 && this.maxRowHeight.value < c && (c = this.maxRowHeight.value);
            for (var g = 0; g < this.buildingRow.entriesBuff.length; g++) (b = this.buildingRow.entriesBuff[g]), this.displayEntry(b, f, this.offY, b.data("jg.jwidth"), b.data("jg.jheight"), c), (f += b.data("jg.jwidth") + e.margins);
            this.$gallery.height(this.offY + c + this.border + (this.isSpinnerActive() ? this.getSpinnerHeight() : 0)),
                (!a || (c <= this.settings.rowHeight && d.justify)) && ((this.offY += c + this.settings.margins), this.clearBuildingRow(), this.$gallery.trigger("jg.rowflush"));
        }),
        (b.prototype.checkWidth = function () {
            this.checkWidthIntervalId = setInterval(
                a.proxy(function () {
                    var a = parseInt(this.$gallery.width(), 10);
                    this.galleryWidth !== a && ((this.galleryWidth = a), this.rewind(), this.startImgAnalyzer(!0));
                }, this),
                this.settings.refreshTime
            );
        }),
        (b.prototype.isSpinnerActive = function () {
            return null != this.spinner.intervalId;
        }),
        (b.prototype.getSpinnerHeight = function () {
            return this.spinner.$el.innerHeight();
        }),
        (b.prototype.stopLoadingSpinnerAnimation = function () {
            clearInterval(this.spinner.intervalId), (this.spinner.intervalId = null), this.$gallery.height(this.$gallery.height() - this.getSpinnerHeight()), this.spinner.$el.detach();
        }),
        (b.prototype.startLoadingSpinnerAnimation = function () {
            var a = this.spinner,
                b = a.$el.find("span");
            clearInterval(a.intervalId),
                this.$gallery.append(a.$el),
                this.$gallery.height(this.offY + this.getSpinnerHeight()),
                (a.intervalId = setInterval(function () {
                    a.phase < b.length ? b.eq(a.phase).fadeTo(a.timeSlot, 1) : b.eq(a.phase - b.length).fadeTo(a.timeSlot, 0), (a.phase = (a.phase + 1) % (2 * b.length));
                }, a.timeSlot));
        }),
        (b.prototype.rewind = function () {
            (this.lastAnalyzedIndex = -1), (this.offY = this.border), this.clearBuildingRow();
        }),
        (b.prototype.hideBuildingRowImages = function () {
            for (var a = 0; a < this.buildingRow.entriesBuff.length; a++) this.settings.cssAnimation ? this.buildingRow.entriesBuff[a].removeClass("entry-visible") : this.buildingRow.entriesBuff[a].stop().fadeTo(0, 0);
        }),
        (b.prototype.updateEntries = function (b) {
            return (
                (this.entries = this.$gallery.find(this.settings.selector).toArray()),
                0 === this.entries.length
                    ? !1
                    : (this.settings.filter ? this.modifyEntries(this.filterArray, b) : this.modifyEntries(this.resetFilters, b),
                      a.isFunction(this.settings.sort) ? this.modifyEntries(this.sortArray, b) : this.settings.randomize && this.modifyEntries(this.shuffleArray, b),
                      !0)
            );
        }),
        (b.prototype.insertToGallery = function (b) {
            var c = this;
            a.each(b, function () {
                a(this).appendTo(c.$gallery);
            });
        }),
        (b.prototype.shuffleArray = function (a) {
            var b, c, d;
            for (b = a.length - 1; b > 0; b--) (c = Math.floor(Math.random() * (b + 1))), (d = a[b]), (a[b] = a[c]), (a[c] = d);
            return this.insertToGallery(a), a;
        }),
        (b.prototype.sortArray = function (a) {
            return a.sort(this.settings.sort), this.insertToGallery(a), a;
        }),
        (b.prototype.resetFilters = function (b) {
            for (var c = 0; c < b.length; c++) a(b[c]).removeClass("jg-filtered");
            return b;
        }),
        (b.prototype.filterArray = function (b) {
            var c = this.settings;
            return "string" === a.type(c.filter)
                ? b.filter(function (b) {
                      var d = a(b);
                      return d.is(c.filter) ? (d.removeClass("jg-filtered"), !0) : (d.addClass("jg-filtered"), !1);
                  })
                : a.isFunction(c.filter)
                ? b.filter(c.filter)
                : void 0;
        }),
        (b.prototype.modifyEntries = function (a, b) {
            var c = b ? this.entries.splice(this.lastAnalyzedIndex + 1, this.entries.length - this.lastAnalyzedIndex - 1) : this.entries;
            (c = a.call(this, c)), (this.entries = b ? this.entries.concat(c) : c);
        }),
        (b.prototype.destroy = function () {
            clearInterval(this.checkWidthIntervalId),
                a.each(
                    this.entries,
                    a.proxy(function (b, c) {
                        var d = a(c);
                        d.css("width", ""), d.css("height", ""), d.css("top", ""), d.css("left", ""), d.data("jg.loaded", void 0), d.removeClass("jg-entry");
                        var e = this.imgFromEntry(d);
                        e.css("width", ""), e.css("height", ""), e.css("margin-left", ""), e.css("margin-top", ""), e.attr("src", e.data("jg.originalSrc")), e.data("jg.originalSrc", void 0), this.removeCaptionEventsHandlers(d);
                        var f = this.captionFromEntry(d);
                        d.data("jg.createdCaption") ? (d.data("jg.createdCaption", void 0), null != f && f.remove()) : null != f && f.fadeTo(0, 1);
                    }, this)
                ),
                this.$gallery.css("height", ""),
                this.$gallery.removeClass("justified-gallery"),
                this.$gallery.data("jg.controller", void 0);
        }),
        (b.prototype.analyzeImages = function (b) {
            for (var c = this.lastAnalyzedIndex + 1; c < this.entries.length; c++) {
                var d = a(this.entries[c]);
                if (d.data("jg.loaded") === !0 || "skipped" === d.data("jg.loaded")) {
                    var e = this.galleryWidth - 2 * this.border - (this.buildingRow.entriesBuff.length - 1) * this.settings.margins,
                        f = d.data("jg.width") / d.data("jg.height");
                    if (e / (this.buildingRow.aspectRatio + f) < this.settings.rowHeight && (this.flushRow(!1), ++this.yield.flushed >= this.yield.every)) return void this.startImgAnalyzer(b);
                    this.buildingRow.entriesBuff.push(d), (this.buildingRow.aspectRatio += f), (this.buildingRow.width += f * this.settings.rowHeight), (this.lastAnalyzedIndex = c);
                } else if ("error" !== d.data("jg.loaded")) return;
            }
            this.buildingRow.entriesBuff.length > 0 && this.flushRow(!0), this.isSpinnerActive() && this.stopLoadingSpinnerAnimation(), this.stopImgAnalyzerStarter(), this.$gallery.trigger(b ? "jg.resize" : "jg.complete");
        }),
        (b.prototype.stopImgAnalyzerStarter = function () {
            (this.yield.flushed = 0), null !== this.imgAnalyzerTimeout && clearTimeout(this.imgAnalyzerTimeout);
        }),
        (b.prototype.startImgAnalyzer = function (a) {
            var b = this;
            this.stopImgAnalyzerStarter(),
                (this.imgAnalyzerTimeout = setTimeout(function () {
                    b.analyzeImages(a);
                }, 0.001));
        }),
        (b.prototype.onImageEvent = function (b, c, d) {
            if (c || d) {
                var e = new Image(),
                    f = a(e);
                c &&
                    f.one("load", function () {
                        f.off("load error"), c(e);
                    }),
                    d &&
                        f.one("error", function () {
                            f.off("load error"), d(e);
                        }),
                    (e.src = b);
            }
        }),
        (b.prototype.init = function () {
            var b = !1,
                c = !1,
                d = this;
            a.each(this.entries, function (e, f) {
                var g = a(f),
                    h = d.imgFromEntry(g);
                if ((g.addClass("jg-entry"), g.data("jg.loaded") !== !0 && "skipped" !== g.data("jg.loaded")))
                    if ((null !== d.settings.rel && g.attr("rel", d.settings.rel), null !== d.settings.target && g.attr("target", d.settings.target), null !== h)) {
                        var i = d.extractImgSrcFromImage(h);
                        if ((h.attr("src", i), d.settings.waitThumbnailsLoad === !1)) {
                            var j = parseInt(h.attr("width"), 10),
                                k = parseInt(h.attr("height"), 10);
                            if (!isNaN(j) && !isNaN(k)) return g.data("jg.width", j), g.data("jg.height", k), g.data("jg.loaded", "skipped"), (c = !0), d.startImgAnalyzer(!1), !0;
                        }
                        g.data("jg.loaded", !1),
                            (b = !0),
                            d.isSpinnerActive() || d.startLoadingSpinnerAnimation(),
                            d.onImageEvent(
                                i,
                                function (a) {
                                    g.data("jg.width", a.width), g.data("jg.height", a.height), g.data("jg.loaded", !0), d.startImgAnalyzer(!1);
                                },
                                function () {
                                    g.data("jg.loaded", "error"), d.startImgAnalyzer(!1);
                                }
                            );
                    } else g.data("jg.loaded", !0), g.data("jg.width", g.width() | g.css("width") | 1), g.data("jg.height", g.height() | g.css("height") | 1);
            }),
                b || c || this.startImgAnalyzer(!1),
                this.checkWidth();
        }),
        (b.prototype.checkOrConvertNumber = function (b, c) {
            if (("string" === a.type(b[c]) && (b[c] = parseFloat(b[c])), "number" !== a.type(b[c]))) throw c + " must be a number";
            if (isNaN(b[c])) throw "invalid number for " + c;
        }),
        (b.prototype.checkSizeRangesSuffixes = function () {
            if ("object" !== a.type(this.settings.sizeRangeSuffixes)) throw "sizeRangeSuffixes must be defined and must be an object";
            var b = [];
            for (var c in this.settings.sizeRangeSuffixes) this.settings.sizeRangeSuffixes.hasOwnProperty(c) && b.push(c);
            for (var d = { 0: "" }, e = 0; e < b.length; e++)
                if ("string" === a.type(b[e]))
                    try {
                        var f = parseInt(b[e].replace(/^[a-z]+/, ""), 10);
                        d[f] = this.settings.sizeRangeSuffixes[b[e]];
                    } catch (g) {
                        throw "sizeRangeSuffixes keys must contains correct numbers (" + g + ")";
                    }
                else d[b[e]] = this.settings.sizeRangeSuffixes[b[e]];
            this.settings.sizeRangeSuffixes = d;
        }),
        (b.prototype.retrieveMaxRowHeight = function () {
            var b = {};
            if ("string" === a.type(this.settings.maxRowHeight))
                this.settings.maxRowHeight.match(/^[0-9]+%$/)
                    ? ((b.value = parseFloat(this.settings.maxRowHeight.match(/^([0-9])+%$/)[1]) / 100), (b.percentage = !1))
                    : ((b.value = parseFloat(this.settings.maxRowHeight)), (b.percentage = !0));
            else {
                if ("number" !== a.type(this.settings.maxRowHeight)) throw "maxRowHeight must be a number or a percentage";
                (b.value = this.settings.maxRowHeight), (b.percentage = !1);
            }
            if (isNaN(b.value)) throw "invalid number for maxRowHeight";
            return b.percentage ? b.value < 100 && (b.value = 100) : b.value > 0 && b.value < this.settings.rowHeight && (b.value = this.settings.rowHeight), b;
        }),
        (b.prototype.checkSettings = function () {
            if (
                (this.checkSizeRangesSuffixes(),
                this.checkOrConvertNumber(this.settings, "rowHeight"),
                this.checkOrConvertNumber(this.settings, "margins"),
                this.checkOrConvertNumber(this.settings, "border"),
                "nojustify" !== this.settings.lastRow && "justify" !== this.settings.lastRow && "hide" !== this.settings.lastRow)
            )
                throw 'lastRow must be "nojustify", "justify" or "hide"';
            if ((this.checkOrConvertNumber(this.settings, "justifyThreshold"), this.settings.justifyThreshold < 0 || this.settings.justifyThreshold > 1)) throw "justifyThreshold must be in the interval [0,1]";
            if ("boolean" !== a.type(this.settings.cssAnimation)) throw "cssAnimation must be a boolean";
            if ("boolean" !== a.type(this.settings.captions)) throw "captions must be a boolean";
            if (
                (this.checkOrConvertNumber(this.settings.captionSettings, "animationDuration"),
                this.checkOrConvertNumber(this.settings.captionSettings, "visibleOpacity"),
                this.settings.captionSettings.visibleOpacity < 0 || this.settings.captionSettings.visibleOpacity > 1)
            )
                throw "captionSettings.visibleOpacity must be in the interval [0, 1]";
            if ((this.checkOrConvertNumber(this.settings.captionSettings, "nonVisibleOpacity"), this.settings.captionSettings.nonVisibleOpacity < 0 || this.settings.captionSettings.nonVisibleOpacity > 1))
                throw "captionSettings.nonVisibleOpacity must be in the interval [0, 1]";
            if ("boolean" !== a.type(this.settings.fixedHeight)) throw "fixedHeight must be a boolean";
            if ((this.checkOrConvertNumber(this.settings, "imagesAnimationDuration"), this.checkOrConvertNumber(this.settings, "refreshTime"), "boolean" !== a.type(this.settings.randomize))) throw "randomize must be a boolean";
            if ("string" !== a.type(this.settings.selector)) throw "selector must be a string";
            if (this.settings.sort !== !1 && !a.isFunction(this.settings.sort)) throw "sort must be false or a comparison function";
            if (this.settings.filter !== !1 && !a.isFunction(this.settings.sort) && "string" !== a.type(this.settings.filter)) throw "filter must be false, a string or a filter function";
        }),
        (b.prototype.retrieveSuffixRanges = function () {
            var a = [];
            for (var b in this.settings.sizeRangeSuffixes) this.settings.sizeRangeSuffixes.hasOwnProperty(b) && a.push(parseInt(b, 10));
            return (
                a.sort(function (a, b) {
                    return a > b ? 1 : b > a ? -1 : 0;
                }),
                a
            );
        }),
        (b.prototype.updateSettings = function (b) {
            (this.settings = a.extend({}, this.settings, b)),
                this.checkSettings(),
                (this.border = this.settings.border >= 0 ? this.settings.border : this.settings.margins),
                (this.maxRowHeight = this.retrieveMaxRowHeight()),
                (this.suffixRanges = this.retrieveSuffixRanges());
        }),
        (a.fn.justifiedGallery = function (c) {
            return this.each(function (d, e) {
                var f = a(e);
                f.addClass("justified-gallery");
                var g = f.data("jg.controller");
                if ("undefined" == typeof g) {
                    if ("undefined" != typeof c && null !== c && "object" !== a.type(c)) throw "The argument must be an object";
                    (g = new b(f, a.extend({}, a.fn.justifiedGallery.defaults, c))), f.data("jg.controller", g);
                } else if ("norewind" === c) g.hideBuildingRowImages();
                else {
                    if ("destroy" === c) return void g.destroy();
                    g.updateSettings(c), g.rewind();
                }
                g.updateEntries("norewind" === c) && g.init();
            });
        }),
        (a.fn.justifiedGallery.defaults = {
            sizeRangeSuffixes: {},
            rowHeight: 120,
            maxRowHeight: "200%",
            margins: 1,
            border: -1,
            lastRow: "nojustify",
            justifyThreshold: 0.75,
            fixedHeight: !1,
            waitThumbnailsLoad: !0,
            captions: !0,
            cssAnimation: !1,
            imagesAnimationDuration: 500,
            captionSettings: { animationDuration: 500, visibleOpacity: 0.7, nonVisibleOpacity: 0 },
            rel: null,
            target: null,
            extension: /\.[^.\\/]+$/,
            refreshTime: 100,
            randomize: !1,
            sort: !1,
            filter: !1,
            selector: "> a, > div:not(.spinner)",
        });
})(jQuery);

/*! Magnific Popup - v1.1.0 - 2016-02-20
 * http://dimsemenov.com/plugins/magnific-popup/
 * Copyright (c) 2016 Dmitry Semenov; */
!(function (a) {
    "function" == typeof define && define.amd ? define(["jquery"], a) : a("object" == typeof exports ? require("jquery") : window.jQuery || window.Zepto);
})(function (a) {
    var b,
        c,
        d,
        e,
        f,
        g,
        h = "Close",
        i = "BeforeClose",
        j = "AfterClose",
        k = "BeforeAppend",
        l = "MarkupParse",
        m = "Open",
        n = "Change",
        o = "mfp",
        p = "." + o,
        q = "mfp-ready",
        r = "mfp-removing",
        s = "mfp-prevent-close",
        t = function () {},
        u = !!window.jQuery,
        v = a(window),
        w = function (a, c) {
            b.ev.on(o + a + p, c);
        },
        x = function (b, c, d, e) {
            var f = document.createElement("div");
            return (f.className = "mfp-" + b), d && (f.innerHTML = d), e ? c && c.appendChild(f) : ((f = a(f)), c && f.appendTo(c)), f;
        },
        y = function (c, d) {
            b.ev.triggerHandler(o + c, d), b.st.callbacks && ((c = c.charAt(0).toLowerCase() + c.slice(1)), b.st.callbacks[c] && b.st.callbacks[c].apply(b, a.isArray(d) ? d : [d]));
        },
        z = function (c) {
            return (c === g && b.currTemplate.closeBtn) || ((b.currTemplate.closeBtn = a(b.st.closeMarkup.replace("%title%", b.st.tClose))), (g = c)), b.currTemplate.closeBtn;
        },
        A = function () {
            a.magnificPopup.instance || ((b = new t()), b.init(), (a.magnificPopup.instance = b));
        },
        B = function () {
            var a = document.createElement("p").style,
                b = ["ms", "O", "Moz", "Webkit"];
            if (void 0 !== a.transition) return !0;
            for (; b.length; ) if (b.pop() + "Transition" in a) return !0;
            return !1;
        };
    (t.prototype = {
        constructor: t,
        init: function () {
            var c = navigator.appVersion;
            (b.isLowIE = b.isIE8 = document.all && !document.addEventListener),
                (b.isAndroid = /android/gi.test(c)),
                (b.isIOS = /iphone|ipad|ipod/gi.test(c)),
                (b.supportsTransition = B()),
                (b.probablyMobile = b.isAndroid || b.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent)),
                (d = a(document)),
                (b.popupsCache = {});
        },
        open: function (c) {
            var e;
            if (c.isObj === !1) {
                (b.items = c.items.toArray()), (b.index = 0);
                var g,
                    h = c.items;
                for (e = 0; e < h.length; e++)
                    if (((g = h[e]), g.parsed && (g = g.el[0]), g === c.el[0])) {
                        b.index = e;
                        break;
                    }
            } else (b.items = a.isArray(c.items) ? c.items : [c.items]), (b.index = c.index || 0);
            if (b.isOpen) return void b.updateItemHTML();
            (b.types = []),
                (f = ""),
                c.mainEl && c.mainEl.length ? (b.ev = c.mainEl.eq(0)) : (b.ev = d),
                c.key ? (b.popupsCache[c.key] || (b.popupsCache[c.key] = {}), (b.currTemplate = b.popupsCache[c.key])) : (b.currTemplate = {}),
                (b.st = a.extend(!0, {}, a.magnificPopup.defaults, c)),
                (b.fixedConteironos = "auto" === b.st.fixedConteironos ? !b.probablyMobile : b.st.fixedConteironos),
                b.st.modal && ((b.st.closeOnContentClick = !1), (b.st.closeOnBgClick = !1), (b.st.showCloseBtn = !1), (b.st.enableEscapeKey = !1)),
                b.bgOverlay ||
                    ((b.bgOverlay = x("bg").on("click" + p, function () {
                        b.close();
                    })),
                    (b.wrap = x("wrap")
                        .attr("tabindex", -1)
                        .on("click" + p, function (a) {
                            b._checkIfClose(a.target) && b.close();
                        })),
                    (b.container = x("container", b.wrap))),
                (b.contentContainer = x("content")),
                b.st.preloader && (b.preloader = x("preloader", b.container, b.st.tLoading));
            var i = a.magnificPopup.modules;
            for (e = 0; e < i.length; e++) {
                var j = i[e];
                (j = j.charAt(0).toUpperCase() + j.slice(1)), b["init" + j].call(b);
            }
            y("BeforeOpen"),
                b.st.showCloseBtn &&
                    (b.st.closeBtnInside
                        ? (w(l, function (a, b, c, d) {
                              c.close_replaceWith = z(d.type);
                          }),
                          (f += " mfp-close-btn-in"))
                        : b.wrap.append(z())),
                b.st.alignTop && (f += " mfp-align-top"),
                b.fixedConteironos ? b.wrap.css({ overflow: b.st.overflowY, overflowX: "hidden", overflowY: b.st.overflowY }) : b.wrap.css({ top: v.scrollTop(), position: "absolute" }),
                (b.st.fixedBgPos === !1 || ("auto" === b.st.fixedBgPos && !b.fixedConteironos)) && b.bgOverlay.css({ height: d.height(), position: "absolute" }),
                b.st.enableEscapeKey &&
                    d.on("keyup" + p, function (a) {
                        27 === a.keyCode && b.close();
                    }),
                v.on("resize" + p, function () {
                    b.updateSize();
                }),
                b.st.closeOnContentClick || (f += " mfp-auto-cursor"),
                f && b.wrap.addClass(f);
            var k = (b.wH = v.height()),
                n = {};
            if (b.fixedConteironos && b._hasScrollBar(k)) {
                var o = b._getScrollbarSize();
                o && (n.marginRight = o);
            }
            b.fixedConteironos && (b.isIE7 ? a("body, html").css("overflow", "hidden") : (n.overflow = "hidden"));
            var r = b.st.mainClass;
            return (
                b.isIE7 && (r += " mfp-ie7"),
                r && b._addClassToMFP(r),
                b.updateItemHTML(),
                y("BuildControls"),
                a("html").css(n),
                b.bgOverlay.add(b.wrap).prependTo(b.st.prependTo || a(document.body)),
                (b._lastFocusedEl = document.activeElement),
                setTimeout(function () {
                    b.content ? (b._addClassToMFP(q), b._setFocus()) : b.bgOverlay.addClass(q), d.on("focusin" + p, b._onFocusIn);
                }, 16),
                (b.isOpen = !0),
                b.updateSize(k),
                y(m),
                c
            );
        },
        close: function () {
            b.isOpen &&
                (y(i),
                (b.isOpen = !1),
                b.st.removalDelay && !b.isLowIE && b.supportsTransition
                    ? (b._addClassToMFP(r),
                      setTimeout(function () {
                          b._close();
                      }, b.st.removalDelay))
                    : b._close());
        },
        _close: function () {
            y(h);
            var c = r + " " + q + " ";
            if ((b.bgOverlay.detach(), b.wrap.detach(), b.container.empty(), b.st.mainClass && (c += b.st.mainClass + " "), b._removeClassFromMFP(c), b.fixedConteironos)) {
                var e = { marginRight: "" };
                b.isIE7 ? a("body, html").css("overflow", "") : (e.overflow = ""), a("html").css(e);
            }
            d.off("keyup" + p + " focusin" + p),
                b.ev.off(p),
                b.wrap.attr("class", "mfp-wrap").removeAttr("style"),
                b.bgOverlay.attr("class", "mfp-bg"),
                b.container.attr("class", "mfp-container"),
                !b.st.showCloseBtn || (b.st.closeBtnInside && b.currTemplate[b.currItem.type] !== !0) || (b.currTemplate.closeBtn && b.currTemplate.closeBtn.detach()),
                b.st.autoFocusLast && b._lastFocusedEl && a(b._lastFocusedEl).focus(),
                (b.currItem = null),
                (b.content = null),
                (b.currTemplate = null),
                (b.prevHeight = 0),
                y(j);
        },
        updateSize: function (a) {
            if (b.isIOS) {
                var c = document.documentElement.clientWidth / window.innerWidth,
                    d = window.innerHeight * c;
                b.wrap.css("height", d), (b.wH = d);
            } else b.wH = a || v.height();
            b.fixedConteironos || b.wrap.css("height", b.wH), y("Resize");
        },
        updateItemHTML: function () {
            var c = b.items[b.index];
            b.contentContainer.detach(), b.content && b.content.detach(), c.parsed || (c = b.parseEl(b.index));
            var d = c.type;
            if ((y("BeforeChange", [b.currItem ? b.currItem.type : "", d]), (b.currItem = c), !b.currTemplate[d])) {
                var f = b.st[d] ? b.st[d].markup : !1;
                y("FirstMarkupParse", f), f ? (b.currTemplate[d] = a(f)) : (b.currTemplate[d] = !0);
            }
            e && e !== c.type && b.container.removeClass("mfp-" + e + "-holder");
            var g = b["get" + d.charAt(0).toUpperCase() + d.slice(1)](c, b.currTemplate[d]);
            b.appendContent(g, d), (c.preloaded = !0), y(n, c), (e = c.type), b.container.prepend(b.contentContainer), y("AfterChange");
        },
        appendContent: function (a, c) {
            (b.content = a),
                a ? (b.st.showCloseBtn && b.st.closeBtnInside && b.currTemplate[c] === !0 ? b.content.find(".mfp-close").length || b.content.append(z()) : (b.content = a)) : (b.content = ""),
                y(k),
                b.container.addClass("mfp-" + c + "-holder"),
                b.contentContainer.append(b.content);
        },
        parseEl: function (c) {
            var d,
                e = b.items[c];
            if ((e.tagName ? (e = { el: a(e) }) : ((d = e.type), (e = { data: e, src: e.src })), e.el)) {
                for (var f = b.types, g = 0; g < f.length; g++)
                    if (e.el.hasClass("mfp-" + f[g])) {
                        d = f[g];
                        break;
                    }
                (e.src = e.el.attr("data-mfp-src")), e.src || (e.src = e.el.attr("href"));
            }
            return (e.type = d || b.st.type || "inline"), (e.index = c), (e.parsed = !0), (b.items[c] = e), y("Elemeironarse", e), b.items[c];
        },
        addGroup: function (a, c) {
            var d = function (d) {
                (d.mfpEl = this), b._openClick(d, a, c);
            };
            c || (c = {});
            var e = "click.magnificPopup";
            (c.mainEl = a), c.items ? ((c.isObj = !0), a.off(e).on(e, d)) : ((c.isObj = !1), c.delegate ? a.off(e).on(e, c.delegate, d) : ((c.items = a), a.off(e).on(e, d)));
        },
        _openClick: function (c, d, e) {
            var f = void 0 !== e.midClick ? e.midClick : a.magnificPopup.defaults.midClick;
            if (f || !(2 === c.which || c.ctrlKey || c.metaKey || c.altKey || c.shiftKey)) {
                var g = void 0 !== e.disableOn ? e.disableOn : a.magnificPopup.defaults.disableOn;
                if (g)
                    if (a.isFunction(g)) {
                        if (!g.call(b)) return !0;
                    } else if (v.width() < g) return !0;
                c.type && (c.preventDefault(), b.isOpen && c.stopPropagation()), (e.el = a(c.mfpEl)), e.delegate && (e.items = d.find(e.delegate)), b.open(e);
            }
        },
        updateStatus: function (a, d) {
            if (b.preloader) {
                c !== a && b.container.removeClass("mfp-s-" + c), d || "loading" !== a || (d = b.st.tLoading);
                var e = { status: a, text: d };
                y("UpdateStatus", e),
                    (a = e.status),
                    (d = e.text),
                    b.preloader.html(d),
                    b.preloader.find("a").on("click", function (a) {
                        a.stopImmediatePropagation();
                    }),
                    b.container.addClass("mfp-s-" + a),
                    (c = a);
            }
        },
        _checkIfClose: function (c) {
            if (!a(c).hasClass(s)) {
                var d = b.st.closeOnContentClick,
                    e = b.st.closeOnBgClick;
                if (d && e) return !0;
                if (!b.content || a(c).hasClass("mfp-close") || (b.preloader && c === b.preloader[0])) return !0;
                if (c === b.content[0] || a.contains(b.content[0], c)) {
                    if (d) return !0;
                } else if (e && a.contains(document, c)) return !0;
                return !1;
            }
        },
        _addClassToMFP: function (a) {
            b.bgOverlay.addClass(a), b.wrap.addClass(a);
        },
        _removeClassFromMFP: function (a) {
            this.bgOverlay.removeClass(a), b.wrap.removeClass(a);
        },
        _hasScrollBar: function (a) {
            return (b.isIE7 ? d.height() : document.body.scrollHeight) > (a || v.height());
        },
        _setFocus: function () {
            (b.st.focus ? b.content.find(b.st.focus).eq(0) : b.wrap).focus();
        },
        _onFocusIn: function (c) {
            return c.target === b.wrap[0] || a.contains(b.wrap[0], c.target) ? void 0 : (b._setFocus(), !1);
        },
        _parseMarkup: function (b, c, d) {
            var e;
            d.data && (c = a.extend(d.data, c)),
                y(l, [b, c, d]),
                a.each(c, function (c, d) {
                    if (void 0 === d || d === !1) return !0;
                    if (((e = c.split("_")), e.length > 1)) {
                        var f = b.find(p + "-" + e[0]);
                        if (f.length > 0) {
                            var g = e[1];
                            "replaceWith" === g ? f[0] !== d[0] && f.replaceWith(d) : "img" === g ? (f.is("img") ? f.attr("src", d) : f.replaceWith(a("<img>").attr("src", d).attr("class", f.attr("class")))) : f.attr(e[1], d);
                        }
                    } else b.find(p + "-" + c).html(d);
                });
        },
        _getScrollbarSize: function () {
            if (void 0 === b.scrollbarSize) {
                var a = document.createElement("div");
                (a.style.cssText = "width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;"), document.body.appendChild(a), (b.scrollbarSize = a.offsetWidth - a.clientWidth), document.body.removeChild(a);
            }
            return b.scrollbarSize;
        },
    }),
        (a.magnificPopup = {
            instance: null,
            proto: t.prototype,
            modules: [],
            open: function (b, c) {
                return A(), (b = b ? a.extend(!0, {}, b) : {}), (b.isObj = !0), (b.index = c || 0), this.instance.open(b);
            },
            close: function () {
                return a.magnificPopup.instance && a.magnificPopup.instance.close();
            },
            registerModule: function (b, c) {
                c.options && (a.magnificPopup.defaults[b] = c.options), a.extend(this.proto, c.proto), this.modules.push(b);
            },
            defaults: {
                disableOn: 0,
                key: null,
                midClick: !1,
                mainClass: "",
                preloader: !0,
                focus: "",
                closeOnContentClick: !1,
                closeOnBgClick: !0,
                closeBtnInside: !0,
                showCloseBtn: !0,
                enableEscapeKey: !0,
                modal: !1,
                alignTop: !1,
                removalDelay: 0,
                prependTo: null,
                fixedConteironos: "auto",
                fixedBgPos: "auto",
                overflowY: "auto",
                closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>',
                tClose: "Close (Esc)",
                tLoading: "Loading...",
                autoFocusLast: 0,
            },
        }),
        (a.fn.magnificPopup = function (c) {
            A();
            var d = a(this);
            if ("string" == typeof c)
                if ("open" === c) {
                    var e,
                        f = u ? d.data("magnificPopup") : d[0].magnificPopup,
                        g = parseInt(arguments[1], 10) || 0;
                    f.items ? (e = f.items[g]) : ((e = d), f.delegate && (e = e.find(f.delegate)), (e = e.eq(g))), b._openClick({ mfpEl: e }, d, f);
                } else b.isOpen && b[c].apply(b, Array.prototype.slice.call(arguments, 1));
            else (c = a.extend(!0, {}, c)), u ? d.data("magnificPopup", c) : (d[0].magnificPopup = c), b.addGroup(d, c);
            return d;
        });
    var C,
        D,
        E,
        F = "inline",
        G = function () {
            E && (D.after(E.addClass(C)).detach(), (E = null));
        };
    a.magnificPopup.registerModule(F, {
        options: { hiddenClass: "hide", markup: "", tNotFound: "Content not found" },
        proto: {
            initInline: function () {
                b.types.push(F),
                    w(h + "." + F, function () {
                        G();
                    });
            },
            getInline: function (c, d) {
                if ((G(), c.src)) {
                    var e = b.st.inline,
                        f = a(c.src);
                    if (f.length) {
                        var g = f[0].parentNode;
                        g && g.tagName && (D || ((C = e.hiddenClass), (D = x(C)), (C = "mfp-" + C)), (E = f.after(D).detach().removeClass(C))), b.updateStatus("ready");
                    } else b.updateStatus("error", e.tNotFound), (f = a("<div>"));
                    return (c.inlineElement = f), f;
                }
                return b.updateStatus("ready"), b._parseMarkup(d, {}, c), d;
            },
        },
    });
    var H,
        I = "ajax",
        J = function () {
            H && a(document.body).removeClass(H);
        },
        K = function () {
            J(), b.req && b.req.abort();
        };
    a.magnificPopup.registerModule(I, {
        options: { settings: null, cursor: "mfp-ajax-cur", tError: '<a href="%url%">The content</a> could not be loaded.' },
        proto: {
            initAjax: function () {
                b.types.push(I), (H = b.st.ajax.cursor), w(h + "." + I, K), w("BeforeChange." + I, K);
            },
            getAjax: function (c) {
                H && a(document.body).addClass(H), b.updateStatus("loading");
                var d = a.extend(
                    {
                        url: c.src,
                        success: function (d, e, f) {
                            var g = { data: d, xhr: f };
                            y("ParseAjax", g),
                                b.appendContent(a(g.data), I),
                                (c.finished = !0),
                                J(),
                                b._setFocus(),
                                setTimeout(function () {
                                    b.wrap.addClass(q);
                                }, 16),
                                b.updateStatus("ready"),
                                y("AjaxContentAdded");
                        },
                        error: function () {
                            J(), (c.finished = c.loadError = !0), b.updateStatus("error", b.st.ajax.tError.replace("%url%", c.src));
                        },
                    },
                    b.st.ajax.settings
                );
                return (b.req = a.ajax(d)), "";
            },
        },
    });
    var L,
        M = function (c) {
            if (c.data && void 0 !== c.data.title) return c.data.title;
            var d = b.st.image.titleSrc;
            if (d) {
                if (a.isFunction(d)) return d.call(b, c);
                if (c.el) return c.el.attr(d) || "";
            }
            return "";
        };
    a.magnificPopup.registerModule("image", {
        options: {
            markup:
                '<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',
            cursor: "mfp-zoom-out-cur",
            titleSrc: "title",
            verticalFit: !0,
            tError: '<a href="%url%">The image</a> could not be loaded.',
        },
        proto: {
            initImage: function () {
                var c = b.st.image,
                    d = ".image";
                b.types.push("image"),
                    w(m + d, function () {
                        "image" === b.currItem.type && c.cursor && a(document.body).addClass(c.cursor);
                    }),
                    w(h + d, function () {
                        c.cursor && a(document.body).removeClass(c.cursor), v.off("resize" + p);
                    }),
                    w("Resize" + d, b.resizeImage),
                    b.isLowIE && w("AfterChange", b.resizeImage);
            },
            resizeImage: function () {
                var a = b.currItem;
                if (a && a.img && b.st.image.verticalFit) {
                    var c = 0;
                    b.isLowIE && (c = parseInt(a.img.css("padding-top"), 10) + parseInt(a.img.css("padding-bottom"), 10)), a.img.css("max-height", b.wH - c);
                }
            },
            _onImageHasSize: function (a) {
                a.img && ((a.hasSize = !0), L && clearInterval(L), (a.isCheckingImgSize = !1), y("ImageHasSize", a), a.imgHidden && (b.content && b.content.removeClass("mfp-loading"), (a.imgHidden = !1)));
            },
            findImageSize: function (a) {
                var c = 0,
                    d = a.img[0],
                    e = function (f) {
                        L && clearInterval(L),
                            (L = setInterval(function () {
                                return d.naturalWidth > 0 ? void b._onImageHasSize(a) : (c > 200 && clearInterval(L), c++, void (3 === c ? e(10) : 40 === c ? e(50) : 100 === c && e(500)));
                            }, f));
                    };
                e(1);
            },
            getImage: function (c, d) {
                var e = 0,
                    f = function () {
                        c &&
                            (c.img[0].complete
                                ? (c.img.off(".mfploader"), c === b.currItem && (b._onImageHasSize(c), b.updateStatus("ready")), (c.hasSize = !0), (c.loaded = !0), y("ImageLoadComplete"))
                                : (e++, 200 > e ? setTimeout(f, 100) : g()));
                    },
                    g = function () {
                        c && (c.img.off(".mfploader"), c === b.currItem && (b._onImageHasSize(c), b.updateStatus("error", h.tError.replace("%url%", c.src))), (c.hasSize = !0), (c.loaded = !0), (c.loadError = !0));
                    },
                    h = b.st.image,
                    i = d.find(".mfp-img");
                if (i.length) {
                    var j = document.createElement("img");
                    (j.className = "mfp-img"),
                        c.el && c.el.find("img").length && (j.alt = c.el.find("img").attr("alt")),
                        (c.img = a(j).on("load.mfploader", f).on("error.mfploader", g)),
                        (j.src = c.src),
                        i.is("img") && (c.img = c.img.clone()),
                        (j = c.img[0]),
                        j.naturalWidth > 0 ? (c.hasSize = !0) : j.width || (c.hasSize = !1);
                }
                return (
                    b._parseMarkup(d, { title: M(c), img_replaceWith: c.img }, c),
                    b.resizeImage(),
                    c.hasSize
                        ? (L && clearInterval(L), c.loadError ? (d.addClass("mfp-loading"), b.updateStatus("error", h.tError.replace("%url%", c.src))) : (d.removeClass("mfp-loading"), b.updateStatus("ready")), d)
                        : (b.updateStatus("loading"), (c.loading = !0), c.hasSize || ((c.imgHidden = !0), d.addClass("mfp-loading"), b.findImageSize(c)), d)
                );
            },
        },
    });
    var N,
        O = function () {
            return void 0 === N && (N = void 0 !== document.createElement("p").style.MozTransform), N;
        };
    a.magnificPopup.registerModule("zoom", {
        options: {
            enabled: !1,
            easing: "ease-in-out",
            duration: 300,
            opener: function (a) {
                return a.is("img") ? a : a.find("img");
            },
        },
        proto: {
            initZoom: function () {
                var a,
                    c = b.st.zoom,
                    d = ".zoom";
                if (c.enabled && b.supportsTransition) {
                    var e,
                        f,
                        g = c.duration,
                        j = function (a) {
                            var b = a.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),
                                d = "all " + c.duration / 1e3 + "s " + c.easing,
                                e = { position: "fixed", zIndex: 9999, left: 0, top: 0, "-webkit-backface-visibility": "hidden" },
                                f = "transition";
                            return (e["-webkit-" + f] = e["-moz-" + f] = e["-o-" + f] = e[f] = d), b.css(e), b;
                        },
                        k = function () {
                            b.content.css("visibility", "visible");
                        };
                    w("BuildControls" + d, function () {
                        if (b._allowZoom()) {
                            if ((clearTimeout(e), b.content.css("visibility", "hidden"), (a = b._getItemToZoom()), !a)) return void k();
                            (f = j(a)),
                                f.css(b._getOffset()),
                                b.wrap.append(f),
                                (e = setTimeout(function () {
                                    f.css(b._getOffset(!0)),
                                        (e = setTimeout(function () {
                                            k(),
                                                setTimeout(function () {
                                                    f.remove(), (a = f = null), y("ZoomAnimationEnded");
                                                }, 16);
                                        }, g));
                                }, 16));
                        }
                    }),
                        w(i + d, function () {
                            if (b._allowZoom()) {
                                if ((clearTimeout(e), (b.st.removalDelay = g), !a)) {
                                    if (((a = b._getItemToZoom()), !a)) return;
                                    f = j(a);
                                }
                                f.css(b._getOffset(!0)),
                                    b.wrap.append(f),
                                    b.content.css("visibility", "hidden"),
                                    setTimeout(function () {
                                        f.css(b._getOffset());
                                    }, 16);
                            }
                        }),
                        w(h + d, function () {
                            b._allowZoom() && (k(), f && f.remove(), (a = null));
                        });
                }
            },
            _allowZoom: function () {
                return "image" === b.currItem.type;
            },
            _getItemToZoom: function () {
                return b.currItem.hasSize ? b.currItem.img : !1;
            },
            _getOffset: function (c) {
                var d;
                d = c ? b.currItem.img : b.st.zoom.opener(b.currItem.el || b.currItem);
                var e = d.offset(),
                    f = parseInt(d.css("padding-top"), 10),
                    g = parseInt(d.css("padding-bottom"), 10);
                e.top -= a(window).scrollTop() - f;
                var h = { width: d.width(), height: (u ? d.innerHeight() : d[0].offsetHeight) - g - f };
                return O() ? (h["-moz-transform"] = h.transform = "translate(" + e.left + "px," + e.top + "px)") : ((h.left = e.left), (h.top = e.top)), h;
            },
        },
    });
    var P = "iframe",
        Q = "//about:blank",
        R = function (a) {
            if (b.currTemplate[P]) {
                var c = b.currTemplate[P].find("iframe");
                c.length && (a || (c[0].src = Q), b.isIE8 && c.css("display", a ? "block" : "none"));
            }
        };
    a.magnificPopup.registerModule(P, {
        options: {
            markup: '<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',
            srcAction: "iframe_src",
            patterns: {
                youtube: { index: "youtube.com", id: "v=", src: "//www.youtube.com/embed/%id%?autoplay=1" },
                vimeo: { index: "vimeo.com/", id: "/", src: "//player.vimeo.com/video/%id%?autoplay=1" },
                gmaps: { index: "//maps.google.", src: "%id%&output=embed" },
            },
        },
        proto: {
            initIframe: function () {
                b.types.push(P),
                    w("BeforeChange", function (a, b, c) {
                        b !== c && (b === P ? R() : c === P && R(!0));
                    }),
                    w(h + "." + P, function () {
                        R();
                    });
            },
            getIframe: function (c, d) {
                var e = c.src,
                    f = b.st.iframe;
                a.each(f.patterns, function () {
                    return e.indexOf(this.index) > -1 ? (this.id && (e = "string" == typeof this.id ? e.substr(e.lastIndexOf(this.id) + this.id.length, e.length) : this.id.call(this, e)), (e = this.src.replace("%id%", e)), !1) : void 0;
                });
                var g = {};
                return f.srcAction && (g[f.srcAction] = e), b._parseMarkup(d, g, c), b.updateStatus("ready"), d;
            },
        },
    });
    var S = function (a) {
            var c = b.items.length;
            return a > c - 1 ? a - c : 0 > a ? c + a : a;
        },
        T = function (a, b, c) {
            return a.replace(/%curr%/gi, b + 1).replace(/%total%/gi, c);
        };
    a.magnificPopup.registerModule("gallery", {
        options: {
            enabled: !1,
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
            preload: [0, 2],
            navigateByImgClick: !0,
            arrows: !0,
            tPrev: "Previous (Left arrow key)",
            tNext: "Next (Right arrow key)",
            tCounter: "%curr% of %total%",
        },
        proto: {
            initGallery: function () {
                var c = b.st.gallery,
                    e = ".mfp-gallery";
                return (
                    (b.direction = !0),
                    c && c.enabled
                        ? ((f += " mfp-gallery"),
                          w(m + e, function () {
                              c.navigateByImgClick &&
                                  b.wrap.on("click" + e, ".mfp-img", function () {
                                      return b.items.length > 1 ? (b.next(), !1) : void 0;
                                  }),
                                  d.on("keydown" + e, function (a) {
                                      37 === a.keyCode ? b.prev() : 39 === a.keyCode && b.next();
                                  });
                          }),
                          w("UpdateStatus" + e, function (a, c) {
                              c.text && (c.text = T(c.text, b.currItem.index, b.items.length));
                          }),
                          w(l + e, function (a, d, e, f) {
                              var g = b.items.length;
                              e.counter = g > 1 ? T(c.tCounter, f.index, g) : "";
                          }),
                          w("BuildControls" + e, function () {
                              if (b.items.length > 1 && c.arrows && !b.arrowLeft) {
                                  var d = c.arrowMarkup,
                                      e = (b.arrowLeft = a(d.replace(/%title%/gi, c.tPrev).replace(/%dir%/gi, "left")).addClass(s)),
                                      f = (b.arrowRight = a(d.replace(/%title%/gi, c.tNext).replace(/%dir%/gi, "right")).addClass(s));
                                  e.click(function () {
                                      b.prev();
                                  }),
                                      f.click(function () {
                                          b.next();
                                      }),
                                      b.container.append(e.add(f));
                              }
                          }),
                          w(n + e, function () {
                              b._preloadTimeout && clearTimeout(b._preloadTimeout),
                                  (b._preloadTimeout = setTimeout(function () {
                                      b.preloadNearbyImages(), (b._preloadTimeout = null);
                                  }, 16));
                          }),
                          void w(h + e, function () {
                              d.off(e), b.wrap.off("click" + e), (b.arrowRight = b.arrowLeft = null);
                          }))
                        : !1
                );
            },
            next: function () {
                (b.direction = !0), (b.index = S(b.index + 1)), b.updateItemHTML();
            },
            prev: function () {
                (b.direction = !1), (b.index = S(b.index - 1)), b.updateItemHTML();
            },
            goTo: function (a) {
                (b.direction = a >= b.index), (b.index = a), b.updateItemHTML();
            },
            preloadNearbyImages: function () {
                var a,
                    c = b.st.gallery.preload,
                    d = Math.min(c[0], b.items.length),
                    e = Math.min(c[1], b.items.length);
                for (a = 1; a <= (b.direction ? e : d); a++) b._preloadItem(b.index + a);
                for (a = 1; a <= (b.direction ? d : e); a++) b._preloadItem(b.index - a);
            },
            _preloadItem: function (c) {
                if (((c = S(c)), !b.items[c].preloaded)) {
                    var d = b.items[c];
                    d.parsed || (d = b.parseEl(c)),
                        y("LazyLoad", d),
                        "image" === d.type &&
                            (d.img = a('<img class="mfp-img" />')
                                .on("load.mfploader", function () {
                                    d.hasSize = !0;
                                })
                                .on("error.mfploader", function () {
                                    (d.hasSize = !0), (d.loadError = !0), y("LazyLoadError", d);
                                })
                                .attr("src", d.src)),
                        (d.preloaded = !0);
                }
            },
        },
    });
    var U = "retina";
    a.magnificPopup.registerModule(U, {
        options: {
            replaceSrc: function (a) {
                return a.src.replace(/\.\w+$/, function (a) {
                    return "@2x" + a;
                });
            },
            ratio: 1,
        },
        proto: {
            initRetina: function () {
                if (window.devicePixelRatio > 1) {
                    var a = b.st.retina,
                        c = a.ratio;
                    (c = isNaN(c) ? c() : c),
                        c > 1 &&
                            (w("ImageHasSize." + U, function (a, b) {
                                b.img.css({ "max-width": b.img[0].naturalWidth / c, width: "100%" });
                            }),
                            w("Elemeironarse." + U, function (b, d) {
                                d.src = a.replaceSrc(d, c);
                            }));
                }
            },
        },
    }),
        A();
});

/**
 |--------------------------------------------------------------------------
 | UItoTop jQuery Plugin 1.2 by Matt Varone
 | http://www.mattvarone.com/web-design/uitotop-jquery-plugin/
 |--------------------------------------------------------------------------
 */
!(function (n) {
    n.fn.UItoTop = function (e) {
        var o = { text: "To Top", min: 200, inDelay: 600, outDelay: 400, containerID: "toTop", containerHoverID: "toTopHover", scrollSpeed: 1200, easingType: "linear" },
            t = n.extend(o, e),
            i = "#" + t.containerID,
            a = "#" + t.containerHoverID;
        n("body").append('<a href="#" id="' + t.containerID + '">' + t.text + "</a>"),
            n(i)
                .hide()
                .on("click.UItoTop", function () {
                    return (
                        n("html, body").animate({ scrollTop: 0 }, t.scrollSpeed, t.easingType),
                        n("#" + t.containerHoverID, this)
                            .stop()
                            .animate({ opacity: 0 }, t.inDelay, t.easingType),
                        !1
                    );
                })
                .prepend('<span id="' + t.containerHoverID + '"></span>')
                .hover(
                    function () {
                        n(a, this).stop().animate({ opacity: 1 }, 600, "linear");
                    },
                    function () {
                        n(a, this).stop().animate({ opacity: 0 }, 700, "linear");
                    }
                ),
            n(window).scroll(function () {
                var e = n(window).scrollTop();
                "undefined" == typeof document.body.style.maxHeight && n(i).css({ position: "absolute", top: e + n(window).height() - 50 }), e > t.min ? n(i).fadeIn(t.inDelay) : n(i).fadeOut(t.Outdelay);
            });
    };
})(jQuery);

/**
 * SmoothScroll for websites v1.2.1
 Licensed under the terms of the MIT license.
 People involved
 Balazs Galambosi (maintainer)
 Michael Herf     (Pulse Algorithm)
 */

function ruby_smooth_scroll() {
    function e() {
        var e = !1;
        e && u("keydown", r), H.keyboardSupport && !e && c("keydown", r);
    }
    function t() {
        if (document.body) {
            var t = document.body,
                o = document.documentElement,
                n = window.innerHeight,
                r = t.scrollHeight;
            if (((x = document.compatMode.indexOf("CSS") >= 0 ? o : t), (w = t), e(), (k = !0), top != self)) b = !0;
            else if (r > n && (t.offsetHeight <= n || o.offsetHeight <= n)) {
                var a = !1,
                    i = function () {
                        a ||
                            o.scrollHeight == document.height ||
                            ((a = !0),
                            setTimeout(function () {
                                (o.style.height = document.height + "px"), (a = !1);
                            }, 500));
                    };
                if (((o.style.height = "auto"), setTimeout(i, 10), x.offsetHeight <= n)) {
                    var l = document.createElement("div");
                    (l.style.clear = "both"), t.appendChild(l);
                }
            }
            H.fixedBackground || v || ((t.style.backgroundAttachment = "scroll"), (o.style.backgroundAttachment = "scroll"));
        }
    }
    function o(e, t, o, n) {
        if ((n || (n = 1e3), d(t, o), 1 != H.accelerationMax)) {
            var r = +new Date(),
                a = r - C;
            if (a < H.accelerationDelta) {
                var i = (1 + 30 / a) / 2;
                i > 1 && ((i = Math.min(i, H.accelerationMax)), (t *= i), (o *= i));
            }
            C = +new Date();
        }
        if ((M.push({ x: t, y: o, lastX: 0 > t ? 0.99 : -0.99, lastY: 0 > o ? 0.99 : -0.99, start: +new Date() }), !T)) {
            var l = e === document.body,
                c = function () {
                    for (var r = +new Date(), a = 0, i = 0, u = 0; u < M.length; u++) {
                        var s = M[u],
                            d = r - s.start,
                            f = d >= H.animationTime,
                            h = f ? 1 : d / H.animationTime;
                        H.pulseAlgorithm && (h = p(h));
                        var m = (s.x * h - s.lastX) >> 0,
                            w = (s.y * h - s.lastY) >> 0;
                        (a += m), (i += w), (s.lastX += m), (s.lastY += w), f && (M.splice(u, 1), u--);
                    }
                    l ? window.scrollBy(a, i) : (a && (e.scrollLeft += a), i && (e.scrollTop += i)), t || o || (M = []), M.length ? N(c, e, n / H.frameRate + 1) : (T = !1);
                };
            N(c, e, 0), (T = !0);
        }
    }
    function n(e) {
        k || t();
        var n = e.target,
            r = l(n);
        if (!r || e.defaultPrevented || s(w, "embed") || (s(n, "embed") && /\.pdf/i.test(n.src))) return !0;
        var a = e.wheelDeltaX || 0,
            i = e.wheelDeltaY || 0;
        return a || i || (i = e.wheelDelta || 0), !H.touchpadSupport && f(i) ? !0 : (Math.abs(a) > 1.2 && (a *= H.stepSize / 120), Math.abs(i) > 1.2 && (i *= H.stepSize / 120), o(r, -a, -i), void e.preventDefault());
    }
    function r(e) {
        var t = e.target,
            n = e.ctrlKey || e.altKey || e.metaKey || (e.shiftKey && e.keyCode !== D.spacebar);
        if (/input|textarea|select|embed/i.test(t.nodeName) || t.isContentEditable || e.defaultPrevented || n) return !0;
        if (s(t, "button") && e.keyCode === D.spacebar) return !0;
        var r,
            a = 0,
            i = 0,
            c = l(w),
            u = c.clientHeight;
        switch ((c == document.body && (u = window.innerHeight), e.keyCode)) {
            case D.up:
                i = -H.arrowScroll;
                break;
            case D.down:
                i = H.arrowScroll;
                break;
            case D.spacebar:
                (r = e.shiftKey ? 1 : -1), (i = -r * u * 0.9);
                break;
            case D.pageup:
                i = 0.9 * -u;
                break;
            case D.pagedown:
                i = 0.9 * u;
                break;
            case D.home:
                i = -c.scrollTop;
                break;
            case D.end:
                var d = c.scrollHeight - c.scrollTop - u;
                i = d > 0 ? d + 10 : 0;
                break;
            case D.left:
                a = -H.arrowScroll;
                break;
            case D.right:
                a = H.arrowScroll;
                break;
            default:
                return !0;
        }
        o(c, a, i), e.preventDefault();
    }
    function a(e) {
        w = e.target;
    }
    function i(e, t) {
        for (var o = e.length; o--; ) E[A(e[o])] = t;
        return t;
    }
    function l(e) {
        var t = [],
            o = x.scrollHeight;
        do {
            var n = E[A(e)];
            if (n) return i(t, n);
            if ((t.push(e), o === e.scrollHeight)) {
                if (!b || x.clientHeight + 10 < o) return i(t, document.body);
            } else if (e.clientHeight + 10 < e.scrollHeight && ((overflow = getComputedStyle(e, "").getPropertyValue("overflow-y")), "scroll" === overflow || "auto" === overflow)) return i(t, e);
        } while ((e = e.parentNode));
    }
    function c(e, t, o) {
        window.addEventListener(e, t, o || !1);
    }
    function u(e, t, o) {
        window.removeEventListener(e, t, o || !1);
    }
    function s(e, t) {
        return (e.nodeName || "").toLowerCase() === t.toLowerCase();
    }
    function d(e, t) {
        (e = e > 0 ? 1 : -1), (t = t > 0 ? 1 : -1), (y.x !== e || y.y !== t) && ((y.x = e), (y.y = t), (M = []), (C = 0));
    }
    function f(e) {
        if (e) {
            (e = Math.abs(e)), S.push(e), S.shift(), clearTimeout(z);
            var t = h(S[0], 120) && h(S[1], 120) && h(S[2], 120);
            return !t;
        }
    }
    function h(e, t) {
        return Math.floor(e / t) == e / t;
    }
    function m(e) {
        var t, o, n;
        return (e *= H.pulseScale), 1 > e ? (t = e - (1 - Math.exp(-e))) : ((o = Math.exp(-1)), (e -= 1), (n = 1 - Math.exp(-e)), (t = o + n * (1 - o))), t * H.pulseNormalize;
    }
    function p(e) {
        return e >= 1 ? 1 : 0 >= e ? 0 : (1 == H.pulseNormalize && (H.pulseNormalize /= m(1)), m(e));
    }
    var w,
        g = {
            frameRate: 150,
            animationTime: 600,
            stepSize: 120,
            pulseAlgorithm: !0,
            pulseScale: 8,
            pulseNormalize: 1,
            accelerationDelta: 20,
            accelerationMax: 1,
            keyboardSupport: !0,
            arrowScroll: 50,
            touchpadSupport: !0,
            fixedBackground: !0,
            excluded: "",
        },
        v = !1,
        b = !1,
        y = { x: 0, y: 0 },
        k = !1,
        x = document.documentElement,
        S = [120, 120, 120],
        D = { left: 37, up: 38, right: 39, down: 40, spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36 },
        H = g,
        M = [],
        T = !1,
        C = +new Date(),
        E = {};
    setInterval(function () {
        E = {};
    }, 1e4);
    var z,
        A = (function () {
            var e = 0;
            return function (t) {
                return t.uniqueID || (t.uniqueID = e++);
            };
        })(),
        N = (function () {
            return (
                window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                function (e, t, o) {
                    window.setTimeout(e, o || 1e3 / 60);
                }
            );
        })(),
        K = /chrome/i.test(window.navigator.userAgent),
        L = null;
    "onwheel" in document.createElement("div") ? (L = "wheel") : "onmousewheel" in document.createElement("div") && (L = "mousewheel"), L && K && (c(L, n), c("mousedown", a), c("load", t));
}

/**
 _ _      _       _
 ___| (_) ___| | __  (_)___
 / __| | |/ __| |/ /  | / __|
 \__ \ | | (__|   < _ | \__ \
 |___/_|_|\___|_|\_(_)/ |___/
 |__/

 Version: 1.5.8
 Author: Ken Wheeler
 Website: http://kenwheeler.github.io
 Docs: http://kenwheeler.github.io/slick
 Repo: http://github.com/kenwheeler/slick
 Issues: http://github.com/kenwheeler/slick/issues

 */
!(function (a) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], a) : "undefined" != typeof exports ? (module.exports = a(require("jquery"))) : a(jQuery);
})(function (a) {
    "use strict";
    var b = window.Slick || {};
    (b = (function () {
        function c(c, d) {
            var f,
                e = this;
            (e.defaults = {
                accessibility: !0,
                adaptiveHeight: !1,
                appendArrows: a(c),
                appendDots: a(c),
                arrows: !0,
                asNavFor: null,
                prevArrow: '<button type="button" data-role="none" class="slick-prev" aria-label="Previous" tabindex="0" role="button">Previous</button>',
                nextArrow: '<button type="button" data-role="none" class="slick-next" aria-label="Next" tabindex="0" role="button">Next</button>',
                autoplay: !1,
                autoplaySpeed: 3e3,
                centerMode: !1,
                centerPadding: "50px",
                cssEase: "ease",
                customPaging: function (a, b) {
                    return '<button type="button" data-role="none" role="button" aria-required="false" tabindex="0">' + (b + 1) + "</button>";
                },
                dots: !1,
                dotsClass: "slick-dots",
                draggable: !0,
                easing: "linear",
                edgeFriction: 0.35,
                fade: !1,
                focusOnSelect: !1,
                infinite: !0,
                initialSlide: 0,
                lazyLoad: "ondemand",
                mobileFirst: !1,
                pauseOnHover: !0,
                pauseOnDotsHover: !1,
                respondTo: "window",
                responsive: null,
                rows: 1,
                rtl: !1,
                slide: "",
                slidesPerRow: 1,
                slidesToShow: 1,
                slidesToScroll: 1,
                speed: 500,
                swipe: !0,
                swipeToSlide: !1,
                touchMove: !0,
                touchThreshold: 5,
                useCSS: !0,
                variableWidth: !1,
                vertical: !1,
                verticalSwiping: !1,
                waitForAnimate: !0,
                zIndex: 1e3,
            }),
                (e.initials = {
                    animating: !1,
                    dragging: !1,
                    autoPlayTimer: null,
                    currentDirection: 0,
                    currentLeft: null,
                    currentSlide: 0,
                    direction: 1,
                    $dots: null,
                    listWidth: null,
                    listHeight: null,
                    loadIndex: 0,
                    $nextArrow: null,
                    $prevArrow: null,
                    slideCount: null,
                    slideWidth: null,
                    $slideTrack: null,
                    $slides: null,
                    sliding: !1,
                    slideOffset: 0,
                    swipeLeft: null,
                    $list: null,
                    touchObject: {},
                    transformsEnabled: !1,
                    unslicked: !1,
                }),
                a.extend(e, e.initials),
                (e.activeBreakpoint = null),
                (e.animType = null),
                (e.animProp = null),
                (e.breakpoints = []),
                (e.breakpointSettings = []),
                (e.cssTransitions = !1),
                (e.hidden = "hidden"),
                (e.paused = !1),
                (e.positionProp = null),
                (e.respondTo = null),
                (e.rowCount = 1),
                (e.shouldClick = !0),
                (e.$slider = a(c)),
                (e.$slidesCache = null),
                (e.transformType = null),
                (e.transitionType = null),
                (e.visibilityChange = "visibilitychange"),
                (e.windowWidth = 0),
                (e.windowTimer = null),
                (f = a(c).data("slick") || {}),
                (e.options = a.extend({}, e.defaults, f, d)),
                (e.currentSlide = e.options.initialSlide),
                (e.originalSettings = e.options),
                "undefined" != typeof document.mozHidden
                    ? ((e.hidden = "mozHidden"), (e.visibilityChange = "mozvisibilitychange"))
                    : "undefined" != typeof document.webkitHidden && ((e.hidden = "webkitHidden"), (e.visibilityChange = "webkitvisibilitychange")),
                (e.autoPlay = a.proxy(e.autoPlay, e)),
                (e.autoPlayClear = a.proxy(e.autoPlayClear, e)),
                (e.changeSlide = a.proxy(e.changeSlide, e)),
                (e.clickHandler = a.proxy(e.clickHandler, e)),
                (e.selectHandler = a.proxy(e.selectHandler, e)),
                (e.setPosition = a.proxy(e.setPosition, e)),
                (e.swipeHandler = a.proxy(e.swipeHandler, e)),
                (e.dragHandler = a.proxy(e.dragHandler, e)),
                (e.keyHandler = a.proxy(e.keyHandler, e)),
                (e.autoPlayIterator = a.proxy(e.autoPlayIterator, e)),
                (e.instanceUid = b++),
                (e.htmlExpr = /^(?:\s*(<[\w\W]+>)[^>]*)$/),
                e.registerBreakpoints(),
                e.init(!0),
                e.checkResponsive(!0);
        }
        var b = 0;
        return c;
    })()),
        (b.prototype.addSlide = b.prototype.slickAdd = function (b, c, d) {
            var e = this;
            if ("boolean" == typeof c) (d = c), (c = null);
            else if (0 > c || c >= e.slideCount) return !1;
            e.unload(),
                "number" == typeof c
                    ? 0 === c && 0 === e.$slides.length
                        ? a(b).appendTo(e.$slideTrack)
                        : d
                        ? a(b).insertBefore(e.$slides.eq(c))
                        : a(b).insertAfter(e.$slides.eq(c))
                    : d === !0
                    ? a(b).prependTo(e.$slideTrack)
                    : a(b).appendTo(e.$slideTrack),
                (e.$slides = e.$slideTrack.children(this.options.slide)),
                e.$slideTrack.children(this.options.slide).detach(),
                e.$slideTrack.append(e.$slides),
                e.$slides.each(function (b, c) {
                    a(c).attr("data-slick-index", b);
                }),
                (e.$slidesCache = e.$slides),
                e.reinit();
        }),
        (b.prototype.animateHeight = function () {
            var a = this;
            if (1 === a.options.slidesToShow && a.options.adaptiveHeight === !0 && a.options.vertical === !1) {
                var b = a.$slides.eq(a.currentSlide).outerHeight(!0);
                a.$list.animate({ height: b }, a.options.speed);
            }
        }),
        (b.prototype.animateSlide = function (b, c) {
            var d = {},
                e = this;
            e.animateHeight(),
                e.options.rtl === !0 && e.options.vertical === !1 && (b = -b),
                e.transformsEnabled === !1
                    ? e.options.vertical === !1
                        ? e.$slideTrack.animate({ left: b }, e.options.speed, e.options.easing, c)
                        : e.$slideTrack.animate({ top: b }, e.options.speed, e.options.easing, c)
                    : e.cssTransitions === !1
                    ? (e.options.rtl === !0 && (e.currentLeft = -e.currentLeft),
                      a({ animStart: e.currentLeft }).animate(
                          { animStart: b },
                          {
                              duration: e.options.speed,
                              easing: e.options.easing,
                              step: function (a) {
                                  (a = Math.ceil(a)), e.options.vertical === !1 ? ((d[e.animType] = "translate(" + a + "px, 0px)"), e.$slideTrack.css(d)) : ((d[e.animType] = "translate(0px," + a + "px)"), e.$slideTrack.css(d));
                              },
                              complete: function () {
                                  c && c.call();
                              },
                          }
                      ))
                    : (e.applyTransition(),
                      (b = Math.ceil(b)),
                      (d[e.animType] = e.options.vertical === !1 ? "translate3d(" + b + "px, 0px, 0px)" : "translate3d(0px," + b + "px, 0px)"),
                      e.$slideTrack.css(d),
                      c &&
                          setTimeout(function () {
                              e.disableTransition(), c.call();
                          }, e.options.speed));
        }),
        (b.prototype.asNavFor = function (b) {
            var c = this,
                d = c.options.asNavFor;
            d && null !== d && (d = a(d).not(c.$slider)),
                null !== d &&
                    "object" == typeof d &&
                    d.each(function () {
                        var c = a(this).slick("getSlick");
                        c.unslicked || c.slideHandler(b, !0);
                    });
        }),
        (b.prototype.applyTransition = function (a) {
            var b = this,
                c = {};
            (c[b.transitionType] = b.options.fade === !1 ? b.transformType + " " + b.options.speed + "ms " + b.options.cssEase : "opacity " + b.options.speed + "ms " + b.options.cssEase),
                b.options.fade === !1 ? b.$slideTrack.css(c) : b.$slides.eq(a).css(c);
        }),
        (b.prototype.autoPlay = function () {
            var a = this;
            a.autoPlayTimer && clearInterval(a.autoPlayTimer), a.slideCount > a.options.slidesToShow && a.paused !== !0 && (a.autoPlayTimer = setInterval(a.autoPlayIterator, a.options.autoplaySpeed));
        }),
        (b.prototype.autoPlayClear = function () {
            var a = this;
            a.autoPlayTimer && clearInterval(a.autoPlayTimer);
        }),
        (b.prototype.autoPlayIterator = function () {
            var a = this;
            a.options.infinite === !1
                ? 1 === a.direction
                    ? (a.currentSlide + 1 === a.slideCount - 1 && (a.direction = 0), a.slideHandler(a.currentSlide + a.options.slidesToScroll))
                    : (0 === a.currentSlide - 1 && (a.direction = 1), a.slideHandler(a.currentSlide - a.options.slidesToScroll))
                : a.slideHandler(a.currentSlide + a.options.slidesToScroll);
        }),
        (b.prototype.buildArrows = function () {
            var b = this;
            b.options.arrows === !0 &&
                ((b.$prevArrow = a(b.options.prevArrow).addClass("slick-arrow")),
                (b.$nextArrow = a(b.options.nextArrow).addClass("slick-arrow")),
                b.slideCount > b.options.slidesToShow
                    ? (b.$prevArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),
                      b.$nextArrow.removeClass("slick-hidden").removeAttr("aria-hidden tabindex"),
                      b.htmlExpr.test(b.options.prevArrow) && b.$prevArrow.prependTo(b.options.appendArrows),
                      b.htmlExpr.test(b.options.nextArrow) && b.$nextArrow.appendTo(b.options.appendArrows),
                      b.options.infinite !== !0 && b.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"))
                    : b.$prevArrow.add(b.$nextArrow).addClass("slick-hidden").attr({ "aria-disabled": "true", tabindex: "-1" }));
        }),
        (b.prototype.buildDots = function () {
            var c,
                d,
                b = this;
            if (b.options.dots === !0 && b.slideCount > b.options.slidesToShow) {
                for (d = '<ul class="' + b.options.dotsClass + '">', c = 0; c <= b.getDotCount(); c += 1) d += "<li>" + b.options.customPaging.call(this, b, c) + "</li>";
                (d += "</ul>"), (b.$dots = a(d).appendTo(b.options.appendDots)), b.$dots.find("li").first().addClass("slick-active").attr("aria-hidden", "false");
            }
        }),
        (b.prototype.buildOut = function () {
            var b = this;
            (b.$slides = b.$slider.children(b.options.slide + ":not(.slick-cloned)").addClass("slick-slide")),
                (b.slideCount = b.$slides.length),
                b.$slides.each(function (b, c) {
                    a(c)
                        .attr("data-slick-index", b)
                        .data("originalStyling", a(c).attr("style") || "");
                }),
                (b.$slidesCache = b.$slides),
                b.$slider.addClass("slick-slider"),
                (b.$slideTrack = 0 === b.slideCount ? a('<div class="slick-track"/>').appendTo(b.$slider) : b.$slides.wrapAll('<div class="slick-track"/>').parent()),
                (b.$list = b.$slideTrack.wrap('<div aria-live="polite" class="slick-list"/>').parent()),
                b.$slideTrack.css("opacity", 0),
                (b.options.centerMode === !0 || b.options.swipeToSlide === !0) && (b.options.slidesToScroll = 1),
                a("img[data-lazy]", b.$slider).not("[src]").addClass("slick-loading"),
                b.setupInfinite(),
                b.buildArrows(),
                b.buildDots(),
                b.updateDots(),
                b.setSlideClasses("number" == typeof b.currentSlide ? b.currentSlide : 0),
                b.options.draggable === !0 && b.$list.addClass("draggable");
        }),
        (b.prototype.buildRows = function () {
            var b,
                c,
                d,
                e,
                f,
                g,
                h,
                a = this;
            if (((e = document.createDocumentFragment()), (g = a.$slider.children()), a.options.rows > 1)) {
                for (h = a.options.slidesPerRow * a.options.rows, f = Math.ceil(g.length / h), b = 0; f > b; b++) {
                    var i = document.createElement("div");
                    for (c = 0; c < a.options.rows; c++) {
                        var j = document.createElement("div");
                        for (d = 0; d < a.options.slidesPerRow; d++) {
                            var k = b * h + (c * a.options.slidesPerRow + d);
                            g.get(k) && j.appendChild(g.get(k));
                        }
                        i.appendChild(j);
                    }
                    e.appendChild(i);
                }
                a.$slider.html(e),
                    a.$slider
                        .children()
                        .children()
                        .children()
                        .css({ width: 100 / a.options.slidesPerRow + "%", display: "inline-block" });
            }
        }),
        (b.prototype.checkResponsive = function (b, c) {
            var e,
                f,
                g,
                d = this,
                h = !1,
                i = d.$slider.width(),
                j = window.innerWidth || a(window).width();
            if (("window" === d.respondTo ? (g = j) : "slider" === d.respondTo ? (g = i) : "min" === d.respondTo && (g = Math.min(j, i)), d.options.responsive && d.options.responsive.length && null !== d.options.responsive)) {
                f = null;
                for (e in d.breakpoints) d.breakpoints.hasOwnProperty(e) && (d.originalSettings.mobileFirst === !1 ? g < d.breakpoints[e] && (f = d.breakpoints[e]) : g > d.breakpoints[e] && (f = d.breakpoints[e]));
                null !== f
                    ? null !== d.activeBreakpoint
                        ? (f !== d.activeBreakpoint || c) &&
                          ((d.activeBreakpoint = f),
                          "unslick" === d.breakpointSettings[f] ? d.unslick(f) : ((d.options = a.extend({}, d.originalSettings, d.breakpointSettings[f])), b === !0 && (d.currentSlide = d.options.initialSlide), d.refresh(b)),
                          (h = f))
                        : ((d.activeBreakpoint = f),
                          "unslick" === d.breakpointSettings[f] ? d.unslick(f) : ((d.options = a.extend({}, d.originalSettings, d.breakpointSettings[f])), b === !0 && (d.currentSlide = d.options.initialSlide), d.refresh(b)),
                          (h = f))
                    : null !== d.activeBreakpoint && ((d.activeBreakpoint = null), (d.options = d.originalSettings), b === !0 && (d.currentSlide = d.options.initialSlide), d.refresh(b), (h = f)),
                    b || h === !1 || d.$slider.trigger("breakpoint", [d, h]);
            }
        }),
        (b.prototype.changeSlide = function (b, c) {
            var f,
                g,
                h,
                d = this,
                e = a(b.target);
            switch ((e.is("a") && b.preventDefault(), e.is("li") || (e = e.closest("li")), (h = 0 !== d.slideCount % d.options.slidesToScroll), (f = h ? 0 : (d.slideCount - d.currentSlide) % d.options.slidesToScroll), b.data.message)) {
                case "previous":
                    (g = 0 === f ? d.options.slidesToScroll : d.options.slidesToShow - f), d.slideCount > d.options.slidesToShow && d.slideHandler(d.currentSlide - g, !1, c);
                    break;
                case "next":
                    (g = 0 === f ? d.options.slidesToScroll : f), d.slideCount > d.options.slidesToShow && d.slideHandler(d.currentSlide + g, !1, c);
                    break;
                case "index":
                    var i = 0 === b.data.index ? 0 : b.data.index || e.index() * d.options.slidesToScroll;
                    d.slideHandler(d.checkNavigable(i), !1, c), e.children().trigger("focus");
                    break;
                default:
                    return;
            }
        }),
        (b.prototype.checkNavigable = function (a) {
            var c,
                d,
                b = this;
            if (((c = b.getNavigableIndexes()), (d = 0), a > c[c.length - 1])) a = c[c.length - 1];
            else
                for (var e in c) {
                    if (a < c[e]) {
                        a = d;
                        break;
                    }
                    d = c[e];
                }
            return a;
        }),
        (b.prototype.cleanUpEvents = function () {
            var b = this;
            b.options.dots &&
                null !== b.$dots &&
                (a("li", b.$dots).off("click.slick", b.changeSlide),
                b.options.pauseOnDotsHover === !0 && b.options.autoplay === !0 && a("li", b.$dots).off("mouseenter.slick", a.proxy(b.setPaused, b, !0)).off("mouseleave.slick", a.proxy(b.setPaused, b, !1))),
                b.options.arrows === !0 && b.slideCount > b.options.slidesToShow && (b.$prevArrow && b.$prevArrow.off("click.slick", b.changeSlide), b.$nextArrow && b.$nextArrow.off("click.slick", b.changeSlide)),
                b.$list.off("touchstart.slick mousedown.slick", b.swipeHandler),
                b.$list.off("touchmove.slick mousemove.slick", b.swipeHandler),
                b.$list.off("touchend.slick mouseup.slick", b.swipeHandler),
                b.$list.off("touchcancel.slick mouseleave.slick", b.swipeHandler),
                b.$list.off("click.slick", b.clickHandler),
                a(document).off(b.visibilityChange, b.visibility),
                b.$list.off("mouseenter.slick", a.proxy(b.setPaused, b, !0)),
                b.$list.off("mouseleave.slick", a.proxy(b.setPaused, b, !1)),
                b.options.accessibility === !0 && b.$list.off("keydown.slick", b.keyHandler),
                b.options.focusOnSelect === !0 && a(b.$slideTrack).children().off("click.slick", b.selectHandler),
                a(window).off("orientationchange.slick.slick-" + b.instanceUid, b.orientationChange),
                a(window).off("resize.slick.slick-" + b.instanceUid, b.resize),
                a("[draggable!=true]", b.$slideTrack).off("dragstart", b.preventDefault),
                a(window).off("load.slick.slick-" + b.instanceUid, b.setPosition),
                a(document).off("ready.slick.slick-" + b.instanceUid, b.setPosition);
        }),
        (b.prototype.cleanUpRows = function () {
            var b,
                a = this;
            a.options.rows > 1 && ((b = a.$slides.children().children()), b.removeAttr("style"), a.$slider.html(b));
        }),
        (b.prototype.clickHandler = function (a) {
            var b = this;
            b.shouldClick === !1 && (a.stopImmediatePropagation(), a.stopPropagation(), a.preventDefault());
        }),
        (b.prototype.destroy = function (b) {
            var c = this;
            c.autoPlayClear(),
                (c.touchObject = {}),
                c.cleanUpEvents(),
                a(".slick-cloned", c.$slider).detach(),
                c.$dots && c.$dots.remove(),
                c.$prevArrow &&
                    c.$prevArrow.length &&
                    (c.$prevArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), c.htmlExpr.test(c.options.prevArrow) && c.$prevArrow.remove()),
                c.$nextArrow &&
                    c.$nextArrow.length &&
                    (c.$nextArrow.removeClass("slick-disabled slick-arrow slick-hidden").removeAttr("aria-hidden aria-disabled tabindex").css("display", ""), c.htmlExpr.test(c.options.nextArrow) && c.$nextArrow.remove()),
                c.$slides &&
                    (c.$slides
                        .removeClass("slick-slide slick-active slick-center slick-visible slick-current")
                        .removeAttr("aria-hidden")
                        .removeAttr("data-slick-index")
                        .each(function () {
                            a(this).attr("style", a(this).data("originalStyling"));
                        }),
                    c.$slideTrack.children(this.options.slide).detach(),
                    c.$slideTrack.detach(),
                    c.$list.detach(),
                    c.$slider.append(c.$slides)),
                c.cleanUpRows(),
                c.$slider.removeClass("slick-slider"),
                c.$slider.removeClass("slick-initialized"),
                (c.unslicked = !0),
                b || c.$slider.trigger("destroy", [c]);
        }),
        (b.prototype.disableTransition = function (a) {
            var b = this,
                c = {};
            (c[b.transitionType] = ""), b.options.fade === !1 ? b.$slideTrack.css(c) : b.$slides.eq(a).css(c);
        }),
        (b.prototype.fadeSlide = function (a, b) {
            var c = this;
            c.cssTransitions === !1
                ? (c.$slides.eq(a).css({ zIndex: c.options.zIndex }), c.$slides.eq(a).animate({ opacity: 1 }, c.options.speed, c.options.easing, b))
                : (c.applyTransition(a),
                  c.$slides.eq(a).css({ opacity: 1, zIndex: c.options.zIndex }),
                  b &&
                      setTimeout(function () {
                          c.disableTransition(a), b.call();
                      }, c.options.speed));
        }),
        (b.prototype.fadeSlideOut = function (a) {
            var b = this;
            b.cssTransitions === !1 ? b.$slides.eq(a).animate({ opacity: 0, zIndex: b.options.zIndex - 2 }, b.options.speed, b.options.easing) : (b.applyTransition(a), b.$slides.eq(a).css({ opacity: 0, zIndex: b.options.zIndex - 2 }));
        }),
        (b.prototype.filterSlides = b.prototype.slickFilter = function (a) {
            var b = this;
            null !== a && (b.unload(), b.$slideTrack.children(this.options.slide).detach(), b.$slidesCache.filter(a).appendTo(b.$slideTrack), b.reinit());
        }),
        (b.prototype.getCurrent = b.prototype.slickCurrentSlide = function () {
            var a = this;
            return a.currentSlide;
        }),
        (b.prototype.getDotCount = function () {
            var a = this,
                b = 0,
                c = 0,
                d = 0;
            if (a.options.infinite === !0) for (; b < a.slideCount; ) ++d, (b = c + a.options.slidesToShow), (c += a.options.slidesToScroll <= a.options.slidesToShow ? a.options.slidesToScroll : a.options.slidesToShow);
            else if (a.options.centerMode === !0) d = a.slideCount;
            else for (; b < a.slideCount; ) ++d, (b = c + a.options.slidesToShow), (c += a.options.slidesToScroll <= a.options.slidesToShow ? a.options.slidesToScroll : a.options.slidesToShow);
            return d - 1;
        }),
        (b.prototype.getLeft = function (a) {
            var c,
                d,
                f,
                b = this,
                e = 0;
            return (
                (b.slideOffset = 0),
                (d = b.$slides.first().outerHeight(!0)),
                b.options.infinite === !0
                    ? (b.slideCount > b.options.slidesToShow && ((b.slideOffset = -1 * b.slideWidth * b.options.slidesToShow), (e = -1 * d * b.options.slidesToShow)),
                      0 !== b.slideCount % b.options.slidesToScroll &&
                          a + b.options.slidesToScroll > b.slideCount &&
                          b.slideCount > b.options.slidesToShow &&
                          (a > b.slideCount
                              ? ((b.slideOffset = -1 * (b.options.slidesToShow - (a - b.slideCount)) * b.slideWidth), (e = -1 * (b.options.slidesToShow - (a - b.slideCount)) * d))
                              : ((b.slideOffset = ((-1 * b.slideCount) % b.options.slidesToScroll) * b.slideWidth), (e = ((-1 * b.slideCount) % b.options.slidesToScroll) * d))))
                    : a + b.options.slidesToShow > b.slideCount && ((b.slideOffset = (a + b.options.slidesToShow - b.slideCount) * b.slideWidth), (e = (a + b.options.slidesToShow - b.slideCount) * d)),
                b.slideCount <= b.options.slidesToShow && ((b.slideOffset = 0), (e = 0)),
                b.options.centerMode === !0 && b.options.infinite === !0
                    ? (b.slideOffset += b.slideWidth * Math.floor(b.options.slidesToShow / 2) - b.slideWidth)
                    : b.options.centerMode === !0 && ((b.slideOffset = 0), (b.slideOffset += b.slideWidth * Math.floor(b.options.slidesToShow / 2))),
                (c = b.options.vertical === !1 ? -1 * a * b.slideWidth + b.slideOffset : -1 * a * d + e),
                b.options.variableWidth === !0 &&
                    ((f = b.slideCount <= b.options.slidesToShow || b.options.infinite === !1 ? b.$slideTrack.children(".slick-slide").eq(a) : b.$slideTrack.children(".slick-slide").eq(a + b.options.slidesToShow)),
                    (c = f[0] ? -1 * f[0].offsetLeft : 0),
                    b.options.centerMode === !0 &&
                        ((f = b.options.infinite === !1 ? b.$slideTrack.children(".slick-slide").eq(a) : b.$slideTrack.children(".slick-slide").eq(a + b.options.slidesToShow + 1)),
                        (c = f[0] ? -1 * f[0].offsetLeft : 0),
                        (c += (b.$list.width() - f.outerWidth()) / 2))),
                c
            );
        }),
        (b.prototype.getOption = b.prototype.slickGetOption = function (a) {
            var b = this;
            return b.options[a];
        }),
        (b.prototype.getNavigableIndexes = function () {
            var e,
                a = this,
                b = 0,
                c = 0,
                d = [];
            for (a.options.infinite === !1 ? (e = a.slideCount) : ((b = -1 * a.options.slidesToScroll), (c = -1 * a.options.slidesToScroll), (e = 2 * a.slideCount)); e > b; )
                d.push(b), (b = c + a.options.slidesToScroll), (c += a.options.slidesToScroll <= a.options.slidesToShow ? a.options.slidesToScroll : a.options.slidesToShow);
            return d;
        }),
        (b.prototype.getSlick = function () {
            return this;
        }),
        (b.prototype.getSlideCount = function () {
            var c,
                d,
                e,
                b = this;
            return (
                (e = b.options.centerMode === !0 ? b.slideWidth * Math.floor(b.options.slidesToShow / 2) : 0),
                b.options.swipeToSlide === !0
                    ? (b.$slideTrack.find(".slick-slide").each(function (c, f) {
                          return f.offsetLeft - e + a(f).outerWidth() / 2 > -1 * b.swipeLeft ? ((d = f), !1) : void 0;
                      }),
                      (c = Math.abs(a(d).attr("data-slick-index") - b.currentSlide) || 1))
                    : b.options.slidesToScroll
            );
        }),
        (b.prototype.goTo = b.prototype.slickGoTo = function (a, b) {
            var c = this;
            c.changeSlide({ data: { message: "index", index: parseInt(a) } }, b);
        }),
        (b.prototype.init = function (b) {
            var c = this;
            a(c.$slider).hasClass("slick-initialized") || (a(c.$slider).addClass("slick-initialized"), c.buildRows(), c.buildOut(), c.setProps(), c.startLoad(), c.loadSlider(), c.initializeEvents(), c.updateArrows(), c.updateDots()),
                b && c.$slider.trigger("init", [c]),
                c.options.accessibility === !0 && c.initADA();
        }),
        (b.prototype.initArrowEvents = function () {
            var a = this;
            a.options.arrows === !0 && a.slideCount > a.options.slidesToShow && (a.$prevArrow.on("click.slick", { message: "previous" }, a.changeSlide), a.$nextArrow.on("click.slick", { message: "next" }, a.changeSlide));
        }),
        (b.prototype.initDotEvents = function () {
            var b = this;
            b.options.dots === !0 && b.slideCount > b.options.slidesToShow && a("li", b.$dots).on("click.slick", { message: "index" }, b.changeSlide),
                b.options.dots === !0 && b.options.pauseOnDotsHover === !0 && b.options.autoplay === !0 && a("li", b.$dots).on("mouseenter.slick", a.proxy(b.setPaused, b, !0)).on("mouseleave.slick", a.proxy(b.setPaused, b, !1));
        }),
        (b.prototype.initializeEvents = function () {
            var b = this;
            b.initArrowEvents(),
                b.initDotEvents(),
                b.$list.on("touchstart.slick mousedown.slick", { action: "start" }, b.swipeHandler),
                b.$list.on("touchmove.slick mousemove.slick", { action: "move" }, b.swipeHandler),
                b.$list.on("touchend.slick mouseup.slick", { action: "end" }, b.swipeHandler),
                b.$list.on("touchcancel.slick mouseleave.slick", { action: "end" }, b.swipeHandler),
                b.$list.on("click.slick", b.clickHandler),
                a(document).on(b.visibilityChange, a.proxy(b.visibility, b)),
                b.$list.on("mouseenter.slick", a.proxy(b.setPaused, b, !0)),
                b.$list.on("mouseleave.slick", a.proxy(b.setPaused, b, !1)),
                b.options.accessibility === !0 && b.$list.on("keydown.slick", b.keyHandler),
                b.options.focusOnSelect === !0 && a(b.$slideTrack).children().on("click.slick", b.selectHandler),
                a(window).on("orientationchange.slick.slick-" + b.instanceUid, a.proxy(b.orientationChange, b)),
                a(window).on("resize.slick.slick-" + b.instanceUid, a.proxy(b.resize, b)),
                a("[draggable!=true]", b.$slideTrack).on("dragstart", b.preventDefault),
                a(window).on("load.slick.slick-" + b.instanceUid, b.setPosition),
                a(document).on("ready.slick.slick-" + b.instanceUid, b.setPosition);
        }),
        (b.prototype.initUI = function () {
            var a = this;
            a.options.arrows === !0 && a.slideCount > a.options.slidesToShow && (a.$prevArrow.show(), a.$nextArrow.show()),
                a.options.dots === !0 && a.slideCount > a.options.slidesToShow && a.$dots.show(),
                a.options.autoplay === !0 && a.autoPlay();
        }),
        (b.prototype.keyHandler = function (a) {
            var b = this;
            a.target.tagName.match("TEXTAREA|INPUT|SELECT") ||
                (37 === a.keyCode && b.options.accessibility === !0 ? b.changeSlide({ data: { message: "previous" } }) : 39 === a.keyCode && b.options.accessibility === !0 && b.changeSlide({ data: { message: "next" } }));
        }),
        (b.prototype.lazyLoad = function () {
            function g(b) {
                a("img[data-lazy]", b).each(function () {
                    var b = a(this),
                        c = a(this).attr("data-lazy"),
                        d = document.createElement("img");
                    (d.onload = function () {
                        b.animate({ opacity: 0 }, 100, function () {
                            b.attr("src", c).animate({ opacity: 1 }, 200, function () {
                                b.removeAttr("data-lazy").removeClass("slick-loading");
                            });
                        });
                    }),
                        (d.src = c);
                });
            }
            var c,
                d,
                e,
                f,
                b = this;
            b.options.centerMode === !0
                ? b.options.infinite === !0
                    ? ((e = b.currentSlide + (b.options.slidesToShow / 2 + 1)), (f = e + b.options.slidesToShow + 2))
                    : ((e = Math.max(0, b.currentSlide - (b.options.slidesToShow / 2 + 1))), (f = 2 + (b.options.slidesToShow / 2 + 1) + b.currentSlide))
                : ((e = b.options.infinite ? b.options.slidesToShow + b.currentSlide : b.currentSlide), (f = e + b.options.slidesToShow), b.options.fade === !0 && (e > 0 && e--, f <= b.slideCount && f++)),
                (c = b.$slider.find(".slick-slide").slice(e, f)),
                g(c),
                b.slideCount <= b.options.slidesToShow
                    ? ((d = b.$slider.find(".slick-slide")), g(d))
                    : b.currentSlide >= b.slideCount - b.options.slidesToShow
                    ? ((d = b.$slider.find(".slick-cloned").slice(0, b.options.slidesToShow)), g(d))
                    : 0 === b.currentSlide && ((d = b.$slider.find(".slick-cloned").slice(-1 * b.options.slidesToShow)), g(d));
        }),
        (b.prototype.loadSlider = function () {
            var a = this;
            a.setPosition(), a.$slideTrack.css({ opacity: 1 }), a.$slider.removeClass("slick-loading"), a.initUI(), "progressive" === a.options.lazyLoad && a.progressiveLazyLoad();
        }),
        (b.prototype.next = b.prototype.slickNext = function () {
            var a = this;
            a.changeSlide({ data: { message: "next" } });
        }),
        (b.prototype.orientationChange = function () {
            var a = this;
            a.checkResponsive(), a.setPosition();
        }),
        (b.prototype.pause = b.prototype.slickPause = function () {
            var a = this;
            a.autoPlayClear(), (a.paused = !0);
        }),
        (b.prototype.play = b.prototype.slickPlay = function () {
            var a = this;
            (a.paused = !1), a.autoPlay();
        }),
        (b.prototype.postSlide = function (a) {
            var b = this;
            b.$slider.trigger("afterChange", [b, a]), (b.animating = !1), b.setPosition(), (b.swipeLeft = null), b.options.autoplay === !0 && b.paused === !1 && b.autoPlay(), b.options.accessibility === !0 && b.initADA();
        }),
        (b.prototype.prev = b.prototype.slickPrev = function () {
            var a = this;
            a.changeSlide({ data: { message: "previous" } });
        }),
        (b.prototype.preventDefault = function (a) {
            a.preventDefault();
        }),
        (b.prototype.progressiveLazyLoad = function () {
            var c,
                d,
                b = this;
            (c = a("img[data-lazy]", b.$slider).length),
                c > 0 &&
                    ((d = a("img[data-lazy]", b.$slider).first()),
                    d
                        .attr("src", d.attr("data-lazy"))
                        .removeClass("slick-loading")
                        .load(function () {
                            d.removeAttr("data-lazy"), b.progressiveLazyLoad(), b.options.adaptiveHeight === !0 && b.setPosition();
                        })
                        .error(function () {
                            d.removeAttr("data-lazy"), b.progressiveLazyLoad();
                        }));
        }),
        (b.prototype.refresh = function (b) {
            var c = this,
                d = c.currentSlide;
            c.destroy(!0), a.extend(c, c.initials, { currentSlide: d }), c.init(), b || c.changeSlide({ data: { message: "index", index: d } }, !1);
        }),
        (b.prototype.registerBreakpoints = function () {
            var c,
                d,
                e,
                b = this,
                f = b.options.responsive || null;
            if ("array" === a.type(f) && f.length) {
                b.respondTo = b.options.respondTo || "window";
                for (c in f)
                    if (((e = b.breakpoints.length - 1), (d = f[c].breakpoint), f.hasOwnProperty(c))) {
                        for (; e >= 0; ) b.breakpoints[e] && b.breakpoints[e] === d && b.breakpoints.splice(e, 1), e--;
                        b.breakpoints.push(d), (b.breakpointSettings[d] = f[c].settings);
                    }
                b.breakpoints.sort(function (a, c) {
                    return b.options.mobileFirst ? a - c : c - a;
                });
            }
        }),
        (b.prototype.reinit = function () {
            var b = this;
            (b.$slides = b.$slideTrack.children(b.options.slide).addClass("slick-slide")),
                (b.slideCount = b.$slides.length),
                b.currentSlide >= b.slideCount && 0 !== b.currentSlide && (b.currentSlide = b.currentSlide - b.options.slidesToScroll),
                b.slideCount <= b.options.slidesToShow && (b.currentSlide = 0),
                b.registerBreakpoints(),
                b.setProps(),
                b.setupInfinite(),
                b.buildArrows(),
                b.updateArrows(),
                b.initArrowEvents(),
                b.buildDots(),
                b.updateDots(),
                b.initDotEvents(),
                b.checkResponsive(!1, !0),
                b.options.focusOnSelect === !0 && a(b.$slideTrack).children().on("click.slick", b.selectHandler),
                b.setSlideClasses(0),
                b.setPosition(),
                b.$slider.trigger("reInit", [b]),
                b.options.autoplay === !0 && b.focusHandler();
        }),
        (b.prototype.resize = function () {
            var b = this;
            a(window).width() !== b.windowWidth &&
                (clearTimeout(b.windowDelay),
                (b.windowDelay = window.setTimeout(function () {
                    (b.windowWidth = a(window).width()), b.checkResponsive(), b.unslicked || b.setPosition();
                }, 50)));
        }),
        (b.prototype.removeSlide = b.prototype.slickRemove = function (a, b, c) {
            var d = this;
            return (
                "boolean" == typeof a ? ((b = a), (a = b === !0 ? 0 : d.slideCount - 1)) : (a = b === !0 ? --a : a),
                d.slideCount < 1 || 0 > a || a > d.slideCount - 1
                    ? !1
                    : (d.unload(),
                      c === !0 ? d.$slideTrack.children().remove() : d.$slideTrack.children(this.options.slide).eq(a).remove(),
                      (d.$slides = d.$slideTrack.children(this.options.slide)),
                      d.$slideTrack.children(this.options.slide).detach(),
                      d.$slideTrack.append(d.$slides),
                      (d.$slidesCache = d.$slides),
                      d.reinit(),
                      void 0)
            );
        }),
        (b.prototype.setCSS = function (a) {
            var d,
                e,
                b = this,
                c = {};
            b.options.rtl === !0 && (a = -a),
                (d = "left" == b.positionProp ? Math.ceil(a) + "px" : "0px"),
                (e = "top" == b.positionProp ? Math.ceil(a) + "px" : "0px"),
                (c[b.positionProp] = a),
                b.transformsEnabled === !1
                    ? b.$slideTrack.css(c)
                    : ((c = {}), b.cssTransitions === !1 ? ((c[b.animType] = "translate(" + d + ", " + e + ")"), b.$slideTrack.css(c)) : ((c[b.animType] = "translate3d(" + d + ", " + e + ", 0px)"), b.$slideTrack.css(c)));
        }),
        (b.prototype.setDimensions = function () {
            var a = this;
            a.options.vertical === !1
                ? a.options.centerMode === !0 && a.$list.css({ padding: "0px " + a.options.centerPadding })
                : (a.$list.height(a.$slides.first().outerHeight(!0) * a.options.slidesToShow), a.options.centerMode === !0 && a.$list.css({ padding: a.options.centerPadding + " 0px" })),
                (a.listWidth = a.$list.width()),
                (a.listHeight = a.$list.height()),
                a.options.vertical === !1 && a.options.variableWidth === !1
                    ? ((a.slideWidth = Math.ceil(a.listWidth / a.options.slidesToShow)), a.$slideTrack.width(Math.ceil(a.slideWidth * a.$slideTrack.children(".slick-slide").length)))
                    : a.options.variableWidth === !0
                    ? a.$slideTrack.width(5e3 * a.slideCount)
                    : ((a.slideWidth = Math.ceil(a.listWidth)), a.$slideTrack.height(Math.ceil(a.$slides.first().outerHeight(!0) * a.$slideTrack.children(".slick-slide").length)));
            var b = a.$slides.first().outerWidth(!0) - a.$slides.first().width();
            a.options.variableWidth === !1 && a.$slideTrack.children(".slick-slide").width(a.slideWidth - b);
        }),
        (b.prototype.setFade = function () {
            var c,
                b = this;
            b.$slides.each(function (d, e) {
                (c = -1 * b.slideWidth * d),
                    b.options.rtl === !0 ? a(e).css({ position: "relative", right: c, top: 0, zIndex: b.options.zIndex - 2, opacity: 0 }) : a(e).css({ position: "relative", left: c, top: 0, zIndex: b.options.zIndex - 2, opacity: 0 });
            }),
                b.$slides.eq(b.currentSlide).css({ zIndex: b.options.zIndex - 1, opacity: 1 });
        }),
        (b.prototype.setHeight = function () {
            var a = this;
            if (1 === a.options.slidesToShow && a.options.adaptiveHeight === !0 && a.options.vertical === !1) {
                var b = a.$slides.eq(a.currentSlide).outerHeight(!0);
                a.$list.css("height", b);
            }
        }),
        (b.prototype.setOption = b.prototype.slickSetOption = function (b, c, d) {
            var f,
                g,
                e = this;
            if ("responsive" === b && "array" === a.type(c))
                for (g in c)
                    if ("array" !== a.type(e.options.responsive)) e.options.responsive = [c[g]];
                    else {
                        for (f = e.options.responsive.length - 1; f >= 0; ) e.options.responsive[f].breakpoint === c[g].breakpoint && e.options.responsive.splice(f, 1), f--;
                        e.options.responsive.push(c[g]);
                    }
            else e.options[b] = c;
            d === !0 && (e.unload(), e.reinit());
        }),
        (b.prototype.setPosition = function () {
            var a = this;
            a.setDimensions(), a.setHeight(), a.options.fade === !1 ? a.setCSS(a.getLeft(a.currentSlide)) : a.setFade(), a.$slider.trigger("setPosition", [a]);
        }),
        (b.prototype.setProps = function () {
            var a = this,
                b = document.body.style;
            (a.positionProp = a.options.vertical === !0 ? "top" : "left"),
                "top" === a.positionProp ? a.$slider.addClass("slick-vertical") : a.$slider.removeClass("slick-vertical"),
                (void 0 !== b.WebkitTransition || void 0 !== b.MozTransition || void 0 !== b.msTransition) && a.options.useCSS === !0 && (a.cssTransitions = !0),
                a.options.fade && ("number" == typeof a.options.zIndex ? a.options.zIndex < 3 && (a.options.zIndex = 3) : (a.options.zIndex = a.defaults.zIndex)),
                void 0 !== b.OTransform && ((a.animType = "OTransform"), (a.transformType = "-o-transform"), (a.transitionType = "OTransition"), void 0 === b.perspectiveProperty && void 0 === b.webkitPerspective && (a.animType = !1)),
                void 0 !== b.MozTransform && ((a.animType = "MozTransform"), (a.transformType = "-moz-transform"), (a.transitionType = "MozTransition"), void 0 === b.perspectiveProperty && void 0 === b.MozPerspective && (a.animType = !1)),
                void 0 !== b.webkitTransform &&
                    ((a.animType = "webkitTransform"), (a.transformType = "-webkit-transform"), (a.transitionType = "webkitTransition"), void 0 === b.perspectiveProperty && void 0 === b.webkitPerspective && (a.animType = !1)),
                void 0 !== b.msTransform && ((a.animType = "msTransform"), (a.transformType = "-ms-transform"), (a.transitionType = "msTransition"), void 0 === b.msTransform && (a.animType = !1)),
                void 0 !== b.transform && a.animType !== !1 && ((a.animType = "transform"), (a.transformType = "transform"), (a.transitionType = "transition")),
                (a.transformsEnabled = null !== a.animType && a.animType !== !1);
        }),
        (b.prototype.setSlideClasses = function (a) {
            var c,
                d,
                e,
                f,
                b = this;
            (d = b.$slider.find(".slick-slide").removeClass("slick-active slick-center slick-current").attr("aria-hidden", "true")),
                b.$slides.eq(a).addClass("slick-current"),
                b.options.centerMode === !0
                    ? ((c = Math.floor(b.options.slidesToShow / 2)),
                      b.options.infinite === !0 &&
                          (a >= c && a <= b.slideCount - 1 - c
                              ? b.$slides
                                    .slice(a - c, a + c + 1)
                                    .addClass("slick-active")
                                    .attr("aria-hidden", "false")
                              : ((e = b.options.slidesToShow + a),
                                d
                                    .slice(e - c + 1, e + c + 2)
                                    .addClass("slick-active")
                                    .attr("aria-hidden", "false")),
                          0 === a ? d.eq(d.length - 1 - b.options.slidesToShow).addClass("slick-center") : a === b.slideCount - 1 && d.eq(b.options.slidesToShow).addClass("slick-center")),
                      b.$slides.eq(a).addClass("slick-center"))
                    : a >= 0 && a <= b.slideCount - b.options.slidesToShow
                    ? b.$slides
                          .slice(a, a + b.options.slidesToShow)
                          .addClass("slick-active")
                          .attr("aria-hidden", "false")
                    : d.length <= b.options.slidesToShow
                    ? d.addClass("slick-active").attr("aria-hidden", "false")
                    : ((f = b.slideCount % b.options.slidesToShow),
                      (e = b.options.infinite === !0 ? b.options.slidesToShow + a : a),
                      b.options.slidesToShow == b.options.slidesToScroll && b.slideCount - a < b.options.slidesToShow
                          ? d
                                .slice(e - (b.options.slidesToShow - f), e + f)
                                .addClass("slick-active")
                                .attr("aria-hidden", "false")
                          : d
                                .slice(e, e + b.options.slidesToShow)
                                .addClass("slick-active")
                                .attr("aria-hidden", "false")),
                "ondemand" === b.options.lazyLoad && b.lazyLoad();
        }),
        (b.prototype.setupInfinite = function () {
            var c,
                d,
                e,
                b = this;
            if ((b.options.fade === !0 && (b.options.centerMode = !1), b.options.infinite === !0 && b.options.fade === !1 && ((d = null), b.slideCount > b.options.slidesToShow))) {
                for (e = b.options.centerMode === !0 ? b.options.slidesToShow + 1 : b.options.slidesToShow, c = b.slideCount; c > b.slideCount - e; c -= 1)
                    (d = c - 1),
                        a(b.$slides[d])
                            .clone(!0)
                            .attr("id", "")
                            .attr("data-slick-index", d - b.slideCount)
                            .prependTo(b.$slideTrack)
                            .addClass("slick-cloned");
                for (c = 0; e > c; c += 1)
                    (d = c),
                        a(b.$slides[d])
                            .clone(!0)
                            .attr("id", "")
                            .attr("data-slick-index", d + b.slideCount)
                            .appendTo(b.$slideTrack)
                            .addClass("slick-cloned");
                b.$slideTrack
                    .find(".slick-cloned")
                    .find("[id]")
                    .each(function () {
                        a(this).attr("id", "");
                    });
            }
        }),
        (b.prototype.setPaused = function (a) {
            var b = this;
            b.options.autoplay === !0 && b.options.pauseOnHover === !0 && ((b.paused = a), a ? b.autoPlayClear() : b.autoPlay());
        }),
        (b.prototype.selectHandler = function (b) {
            var c = this,
                d = a(b.target).is(".slick-slide") ? a(b.target) : a(b.target).parents(".slick-slide"),
                e = parseInt(d.attr("data-slick-index"));
            return e || (e = 0), c.slideCount <= c.options.slidesToShow ? (c.setSlideClasses(e), c.asNavFor(e), void 0) : (c.slideHandler(e), void 0);
        }),
        (b.prototype.slideHandler = function (a, b, c) {
            var d,
                e,
                f,
                g,
                h = null,
                i = this;
            return (
                (b = b || !1),
                (i.animating === !0 && i.options.waitForAnimate === !0) || (i.options.fade === !0 && i.currentSlide === a) || i.slideCount <= i.options.slidesToShow
                    ? void 0
                    : (b === !1 && i.asNavFor(a),
                      (d = a),
                      (h = i.getLeft(d)),
                      (g = i.getLeft(i.currentSlide)),
                      (i.currentLeft = null === i.swipeLeft ? g : i.swipeLeft),
                      i.options.infinite === !1 && i.options.centerMode === !1 && (0 > a || a > i.getDotCount() * i.options.slidesToScroll)
                          ? (i.options.fade === !1 &&
                                ((d = i.currentSlide),
                                c !== !0
                                    ? i.animateSlide(g, function () {
                                          i.postSlide(d);
                                      })
                                    : i.postSlide(d)),
                            void 0)
                          : i.options.infinite === !1 && i.options.centerMode === !0 && (0 > a || a > i.slideCount - i.options.slidesToScroll)
                          ? (i.options.fade === !1 &&
                                ((d = i.currentSlide),
                                c !== !0
                                    ? i.animateSlide(g, function () {
                                          i.postSlide(d);
                                      })
                                    : i.postSlide(d)),
                            void 0)
                          : (i.options.autoplay === !0 && clearInterval(i.autoPlayTimer),
                            (e =
                                0 > d
                                    ? 0 !== i.slideCount % i.options.slidesToScroll
                                        ? i.slideCount - (i.slideCount % i.options.slidesToScroll)
                                        : i.slideCount + d
                                    : d >= i.slideCount
                                    ? 0 !== i.slideCount % i.options.slidesToScroll
                                        ? 0
                                        : d - i.slideCount
                                    : d),
                            (i.animating = !0),
                            i.$slider.trigger("beforeChange", [i, i.currentSlide, e]),
                            (f = i.currentSlide),
                            (i.currentSlide = e),
                            i.setSlideClasses(i.currentSlide),
                            i.updateDots(),
                            i.updateArrows(),
                            i.options.fade === !0
                                ? (c !== !0
                                      ? (i.fadeSlideOut(f),
                                        i.fadeSlide(e, function () {
                                            i.postSlide(e);
                                        }))
                                      : i.postSlide(e),
                                  i.animateHeight(),
                                  void 0)
                                : (c !== !0
                                      ? i.animateSlide(h, function () {
                                            i.postSlide(e);
                                        })
                                      : i.postSlide(e),
                                  void 0)))
            );
        }),
        (b.prototype.startLoad = function () {
            var a = this;
            a.options.arrows === !0 && a.slideCount > a.options.slidesToShow && (a.$prevArrow.hide(), a.$nextArrow.hide()),
                a.options.dots === !0 && a.slideCount > a.options.slidesToShow && a.$dots.hide(),
                a.$slider.addClass("slick-loading");
        }),
        (b.prototype.swipeDirection = function () {
            var a,
                b,
                c,
                d,
                e = this;
            return (
                (a = e.touchObject.startX - e.touchObject.curX),
                (b = e.touchObject.startY - e.touchObject.curY),
                (c = Math.atan2(b, a)),
                (d = Math.round((180 * c) / Math.PI)),
                0 > d && (d = 360 - Math.abs(d)),
                45 >= d && d >= 0
                    ? e.options.rtl === !1
                        ? "left"
                        : "right"
                    : 360 >= d && d >= 315
                    ? e.options.rtl === !1
                        ? "left"
                        : "right"
                    : d >= 135 && 225 >= d
                    ? e.options.rtl === !1
                        ? "right"
                        : "left"
                    : e.options.verticalSwiping === !0
                    ? d >= 35 && 135 >= d
                        ? "left"
                        : "right"
                    : "vertical"
            );
        }),
        (b.prototype.swipeEnd = function () {
            var c,
                b = this;
            if (((b.dragging = !1), (b.shouldClick = b.touchObject.swipeLength > 10 ? !1 : !0), void 0 === b.touchObject.curX)) return !1;
            if ((b.touchObject.edgeHit === !0 && b.$slider.trigger("edge", [b, b.swipeDirection()]), b.touchObject.swipeLength >= b.touchObject.minSwipe))
                switch (b.swipeDirection()) {
                    case "left":
                        (c = b.options.swipeToSlide ? b.checkNavigable(b.currentSlide + b.getSlideCount()) : b.currentSlide + b.getSlideCount()),
                            b.slideHandler(c),
                            (b.currentDirection = 0),
                            (b.touchObject = {}),
                            b.$slider.trigger("swipe", [b, "left"]);
                        break;
                    case "right":
                        (c = b.options.swipeToSlide ? b.checkNavigable(b.currentSlide - b.getSlideCount()) : b.currentSlide - b.getSlideCount()),
                            b.slideHandler(c),
                            (b.currentDirection = 1),
                            (b.touchObject = {}),
                            b.$slider.trigger("swipe", [b, "right"]);
                }
            else b.touchObject.startX !== b.touchObject.curX && (b.slideHandler(b.currentSlide), (b.touchObject = {}));
        }),
        (b.prototype.swipeHandler = function (a) {
            var b = this;
            if (!(b.options.swipe === !1 || ("ontouchend" in document && b.options.swipe === !1) || (b.options.draggable === !1 && -1 !== a.type.indexOf("mouse"))))
                switch (
                    ((b.touchObject.fingerCount = a.originalEvent && void 0 !== a.originalEvent.touches ? a.originalEvent.touches.length : 1),
                    (b.touchObject.minSwipe = b.listWidth / b.options.touchThreshold),
                    b.options.verticalSwiping === !0 && (b.touchObject.minSwipe = b.listHeight / b.options.touchThreshold),
                    a.data.action)
                ) {
                    case "start":
                        b.swipeStart(a);
                        break;
                    case "move":
                        b.swipeMove(a);
                        break;
                    case "end":
                        b.swipeEnd(a);
                }
        }),
        (b.prototype.swipeMove = function (a) {
            var d,
                e,
                f,
                g,
                h,
                b = this;
            return (
                (h = void 0 !== a.originalEvent ? a.originalEvent.touches : null),
                !b.dragging || (h && 1 !== h.length)
                    ? !1
                    : ((d = b.getLeft(b.currentSlide)),
                      (b.touchObject.curX = void 0 !== h ? h[0].pageX : a.clientX),
                      (b.touchObject.curY = void 0 !== h ? h[0].pageY : a.clientY),
                      (b.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(b.touchObject.curX - b.touchObject.startX, 2)))),
                      b.options.verticalSwiping === !0 && (b.touchObject.swipeLength = Math.round(Math.sqrt(Math.pow(b.touchObject.curY - b.touchObject.startY, 2)))),
                      (e = b.swipeDirection()),
                      "vertical" !== e
                          ? (void 0 !== a.originalEvent && b.touchObject.swipeLength > 4 && a.preventDefault(),
                            (g = (b.options.rtl === !1 ? 1 : -1) * (b.touchObject.curX > b.touchObject.startX ? 1 : -1)),
                            b.options.verticalSwiping === !0 && (g = b.touchObject.curY > b.touchObject.startY ? 1 : -1),
                            (f = b.touchObject.swipeLength),
                            (b.touchObject.edgeHit = !1),
                            b.options.infinite === !1 &&
                                ((0 === b.currentSlide && "right" === e) || (b.currentSlide >= b.getDotCount() && "left" === e)) &&
                                ((f = b.touchObject.swipeLength * b.options.edgeFriction), (b.touchObject.edgeHit = !0)),
                            (b.swipeLeft = b.options.vertical === !1 ? d + f * g : d + f * (b.$list.height() / b.listWidth) * g),
                            b.options.verticalSwiping === !0 && (b.swipeLeft = d + f * g),
                            b.options.fade === !0 || b.options.touchMove === !1 ? !1 : b.animating === !0 ? ((b.swipeLeft = null), !1) : (b.setCSS(b.swipeLeft), void 0))
                          : void 0)
            );
        }),
        (b.prototype.swipeStart = function (a) {
            var c,
                b = this;
            return 1 !== b.touchObject.fingerCount || b.slideCount <= b.options.slidesToShow
                ? ((b.touchObject = {}), !1)
                : (void 0 !== a.originalEvent && void 0 !== a.originalEvent.touches && (c = a.originalEvent.touches[0]),
                  (b.touchObject.startX = b.touchObject.curX = void 0 !== c ? c.pageX : a.clientX),
                  (b.touchObject.startY = b.touchObject.curY = void 0 !== c ? c.pageY : a.clientY),
                  (b.dragging = !0),
                  void 0);
        }),
        (b.prototype.unfilterSlides = b.prototype.slickUnfilter = function () {
            var a = this;
            null !== a.$slidesCache && (a.unload(), a.$slideTrack.children(this.options.slide).detach(), a.$slidesCache.appendTo(a.$slideTrack), a.reinit());
        }),
        (b.prototype.unload = function () {
            var b = this;
            a(".slick-cloned", b.$slider).remove(),
                b.$dots && b.$dots.remove(),
                b.$prevArrow && b.htmlExpr.test(b.options.prevArrow) && b.$prevArrow.remove(),
                b.$nextArrow && b.htmlExpr.test(b.options.nextArrow) && b.$nextArrow.remove(),
                b.$slides.removeClass("slick-slide slick-active slick-visible slick-current").attr("aria-hidden", "true").css("width", "");
        }),
        (b.prototype.unslick = function (a) {
            var b = this;
            b.$slider.trigger("unslick", [b, a]), b.destroy();
        }),
        (b.prototype.updateArrows = function () {
            var b,
                a = this;
            (b = Math.floor(a.options.slidesToShow / 2)),
                a.options.arrows === !0 &&
                    a.slideCount > a.options.slidesToShow &&
                    !a.options.infinite &&
                    (a.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"),
                    a.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"),
                    0 === a.currentSlide
                        ? (a.$prevArrow.addClass("slick-disabled").attr("aria-disabled", "true"), a.$nextArrow.removeClass("slick-disabled").attr("aria-disabled", "false"))
                        : a.currentSlide >= a.slideCount - a.options.slidesToShow && a.options.centerMode === !1
                        ? (a.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), a.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false"))
                        : a.currentSlide >= a.slideCount - 1 &&
                          a.options.centerMode === !0 &&
                          (a.$nextArrow.addClass("slick-disabled").attr("aria-disabled", "true"), a.$prevArrow.removeClass("slick-disabled").attr("aria-disabled", "false")));
        }),
        (b.prototype.updateDots = function () {
            var a = this;
            null !== a.$dots &&
                (a.$dots.find("li").removeClass("slick-active").attr("aria-hidden", "true"),
                a.$dots
                    .find("li")
                    .eq(Math.floor(a.currentSlide / a.options.slidesToScroll))
                    .addClass("slick-active")
                    .attr("aria-hidden", "false"));
        }),
        (b.prototype.visibility = function () {
            var a = this;
            document[a.hidden] ? ((a.paused = !0), a.autoPlayClear()) : a.options.autoplay === !0 && ((a.paused = !1), a.autoPlay());
        }),
        (b.prototype.initADA = function () {
            var b = this;
            b.$slides.add(b.$slideTrack.find(".slick-cloned")).attr({ "aria-hidden": "true", tabindex: "-1" }).find("a, input, button, select").attr({ tabindex: "-1" }),
                b.$slideTrack.attr("role", "listbox"),
                b.$slides.not(b.$slideTrack.find(".slick-cloned")).each(function (c) {
                    a(this).attr({ role: "option", "aria-describedby": "slick-slide" + b.instanceUid + c });
                }),
                null !== b.$dots &&
                    b.$dots
                        .attr("role", "tablist")
                        .find("li")
                        .each(function (c) {
                            a(this).attr({ role: "presentation", "aria-selected": "false", "aria-controls": "navigation" + b.instanceUid + c, id: "slick-slide" + b.instanceUid + c });
                        })
                        .first()
                        .attr("aria-selected", "true")
                        .end()
                        .find("button")
                        .attr("role", "button")
                        .end()
                        .closest("div")
                        .attr("role", "toolbar"),
                b.activateADA();
        }),
        (b.prototype.activateADA = function () {
            var a = this,
                b = a.$slider.find("*").is(":focus");
            a.$slideTrack.find(".slick-active").attr({ "aria-hidden": "false", tabindex: "0" }).find("a, input, button, select").attr({ tabindex: "0" }), b && a.$slideTrack.find(".slick-active").focus();
        }),
        (b.prototype.focusHandler = function () {
            var b = this;
            b.$slider.on("focus.slick blur.slick", "*", function (c) {
                c.stopImmediatePropagation();
                var d = a(this);
                setTimeout(function () {
                    b.isPlay && (d.is(":focus") ? (b.autoPlayClear(), (b.paused = !0)) : ((b.paused = !1), b.autoPlay()));
                }, 0);
            });
        }),
        (a.fn.slick = function () {
            var g,
                a = this,
                c = arguments[0],
                d = Array.prototype.slice.call(arguments, 1),
                e = a.length,
                f = 0;
            for (f; e > f; f++) if (("object" == typeof c || "undefined" == typeof c ? (a[f].slick = new b(a[f], c)) : (g = a[f].slick[c].apply(a[f].slick, d)), "undefined" != typeof g)) return g;
            return a;
        });
});

/**
 * FitVids 1.1
 *
 * Copyright 2013, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
 * Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
 * Released under the WTFPL license - http://sam.zoy.org/wtfpl/
 */
!(function (t) {
    "use strict";
    t.fn.fitVids = function (e) {
        var i = { customSelector: null, ignore: null };
        if (!document.getElementById("fit-vids-style")) {
            var r = document.head || document.getElementsByTagName("head")[0],
                a =
                    ".fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}",
                d = document.createElement("div");
            (d.innerHTML = '<p>x</p><style id="fit-vids-style">' + a + "</style>"), r.appendChild(d.childNodes[1]);
        }
        return (
            e && t.extend(i, e),
            this.each(function () {
                var e = ['iframe[src*="player.vimeo.com"]', 'iframe[src*="youtube.com"]', 'iframe[src*="youtube-nocookie.com"]', 'iframe[src*="kickstarter.com"][src*="video.html"]', "object", "embed"];
                i.customSelector && e.push(i.customSelector);
                var r = ".fitvidsignore";
                i.ignore && (r = r + ", " + i.ignore);
                var a = t(this).find(e.join(","));
                (a = a.not("object object")),
                    (a = a.not(r)),
                    a.each(function (e) {
                        var i = t(this);
                        if (!(i.parents(r).length > 0 || ("embed" === this.tagName.toLowerCase() && i.parent("object").length) || i.parent(".fluid-width-video-wrapper").length)) {
                            i.css("height") || i.css("width") || (!isNaN(i.attr("height")) && !isNaN(i.attr("width"))) || (i.attr("height", 9), i.attr("width", 16));
                            var a = "object" === this.tagName.toLowerCase() || (i.attr("height") && !isNaN(parseInt(i.attr("height"), 10))) ? parseInt(i.attr("height"), 10) : i.height(),
                                d = isNaN(parseInt(i.attr("width"), 10)) ? i.width() : parseInt(i.attr("width"), 10),
                                o = a / d;
                            if (!i.attr("id")) {
                                var h = "fitvid" + e;
                                i.attr("id", h);
                            }
                            i
                                .wrap('<div class="fluid-width-video-wrapper"></div>')
                                .parent(".fluid-width-video-wrapper")
                                .css("padding-top", 100 * o + "%"),
                                i.removeAttr("height").removeAttr("width");
                        }
                    });
            })
        );
    };
})(window.jQuery || window.Zepto);

// Sticky Plugin v1.0.4 for jQuery
// =============
// Author: Anthony Garand
// Improvements by German M. Bravo (Kronuz) and Ruud Kamphuis (ruudk)
// Improvements by Leonardo C. Daronco (daronco)
// Custom: ThemeRuby
// Created: 02/14/2011
// Date: 07/20/2015
// Website: http://stickyjs.com/
// Description: Makes an element on the page stick on the screen as you scroll
//              It will only set the 'top' and 'position' of your element, you
//              might need to adjust the width in some cases.
!(function (t) {
    "function" == typeof define && define.amd ? define(["jquery"], t) : "object" == typeof module && module.exports ? (module.exports = t(require("jquery"))) : t(jQuery);
})(function (t) {
    var e = Array.prototype.slice,
        n = Array.prototype.splice,
        i = { topSpacing: 0, bottomSpacing: 0, className: "is-sticky", wrapperClassName: "sticky-wrapper", center: !1, getWidthFrom: "", smartSticky: !1, widthFromWrapper: !0, responsiveWidth: !1, zIndex: "inherit" },
        s = t(window),
        o = t(document),
        r = [],
        p = s.height(),
        c = function () {
            for (var t = s.scrollTop(), e = o.height(), n = e - p, i = t > n ? n - t : 0, c = 0, d = r.length; c < d; c++) {
                var m = r[c];
                !0 === m.smartSticky ? a(m, t, e, n, i) : l(m, t, e, n, i);
            }
        },
        a = function (e, n, i, s, o) {
            var r;
            if (
                ((elementTop = e.stickyWrapper.offset().top),
                (etse = elementTop - e.topSpacing - o),
                (elementBottom = elementTop + e.elementHeight),
                (etseBottom = elementBottom - e.topSpacing - o),
                n !== e.lastPos && ((r = n > e.lastPos ? "down" : "up"), (e.lastPos = n)),
                e.stickyWrapper.css("height", e.stickyElement.outerHeight()),
                n <= etse)
            )
                null !== e.currentTop &&
                    (e.stickyElement.css({ width: "", position: "", top: "", "z-index": "", "-webkit-transition": "none", "-moz-transition": "none", transition: "none" }),
                    e.stickyElement.parent().removeClass(e.className),
                    e.stickyElement.trigger("sticky-end", [e]),
                    (e.currentTop = null));
            else if (n > etseBottom) {
                "down" == r &&
                    null == e.downFlag &&
                    (e.stickyElement.css({
                        "-webkit-transition": "none",
                        "-moz-transition": "none",
                        transition: "none",
                        "-webkit-transform": "translate3d(0px,-" + e.elementHeight + "px, 0px)",
                        "-moz-transform": "translate3d(0px,-" + e.elementHeight + "px, 0px)",
                        transform: "translate3d(0px,-" + e.elementHeight + "px, 0px)",
                    }),
                    (e.downFlag = 1),
                    (e.upFlag = null)),
                    "up" == r &&
                        null == e.upFlag &&
                        (e.stickyElement.css({
                            "-webkit-transform": "translate3d(0px, 0px, 0px)",
                            "-moz-transform": "translate3d(0px, 0px, 0px)",
                            transform: "translate3d(0px, 0px, 0px)",
                            "-webkit-transition": "transform 0.1s",
                            "-moz-transition": "transform 0.1s",
                            transition: "transform 0.1s",
                        }),
                        (e.upFlag = 1),
                        (e.downFlag = null));
                var p,
                    c = i - e.stickyElement.outerHeight() - e.topSpacing - e.bottomSpacing - n - o;
                if ((c < 0 ? (c += e.topSpacing) : (c = e.topSpacing), e.currentTop !== c))
                    e.getWidthFrom ? ((padding = e.stickyElement.innerWidth() - e.stickyElement.width()), (p = t(e.getWidthFrom).width() - padding || null)) : e.widthFromWrapper && (p = e.stickyWrapper.width()),
                        null == p && (p = e.stickyElement.width()),
                        e.stickyElement.css("width", p).css("position", "fixed").css("top", c).css("z-index", e.zIndex),
                        e.stickyElement.parent().addClass(e.className),
                        null === e.currentTop ? e.stickyElement.trigger("sticky-start", [e]) : e.stickyElement.trigger("sticky-update", [e]),
                        (e.currentTop === e.topSpacing && e.currentTop > c) || (null === e.currentTop && c < e.topSpacing)
                            ? e.stickyElement.trigger("sticky-bottom-reached", [e])
                            : null !== e.currentTop && c === e.topSpacing && e.currentTop < c && e.stickyElement.trigger("sticky-bottom-unreached", [e]),
                        (e.currentTop = c);
                var a = e.stickyWrapper.parent();
                e.stickyElement.offset().top + e.stickyElement.outerHeight() >= a.offset().top + a.outerHeight() && e.stickyElement.offset().top <= e.topSpacing
                    ? e.stickyElement.css("position", "absolute").css("top", "").css("bottom", 0).css("z-index", "")
                    : e.stickyElement.css("position", "fixed").css("top", c).css("bottom", "").css("z-index", e.zIndex);
            }
        },
        l = function (e, n, i, s, o) {
            if (((elementTop = e.stickyWrapper.offset().top), (etse = elementTop - e.topSpacing - o), e.stickyWrapper.css("height", e.stickyElement.outerHeight()), n <= etse))
                null !== e.currentTop && (e.stickyElement.css({ width: "", position: "", top: "", "z-index": "" }), e.stickyElement.parent().removeClass(e.className), e.stickyElement.trigger("sticky-end", [e]), (e.currentTop = null));
            else {
                var r,
                    p = i - e.stickyElement.outerHeight() - e.topSpacing - e.bottomSpacing - n - o;
                if ((p < 0 ? (p += e.topSpacing) : (p = e.topSpacing), e.currentTop !== p))
                    e.getWidthFrom ? ((padding = e.stickyElement.innerWidth() - e.stickyElement.width()), (r = t(e.getWidthFrom).width() - padding || null)) : e.widthFromWrapper && (r = e.stickyWrapper.width()),
                        null == r && (r = e.stickyElement.width()),
                        e.stickyElement.css("width", r).css("position", "fixed").css("top", p).css("z-index", e.zIndex),
                        e.stickyElement.parent().addClass(e.className),
                        null === e.currentTop ? e.stickyElement.trigger("sticky-start", [e]) : e.stickyElement.trigger("sticky-update", [e]),
                        (e.currentTop === e.topSpacing && e.currentTop > p) || (null === e.currentTop && p < e.topSpacing)
                            ? e.stickyElement.trigger("sticky-bottom-reached", [e])
                            : null !== e.currentTop && p === e.topSpacing && e.currentTop < p && e.stickyElement.trigger("sticky-bottom-unreached", [e]),
                        (e.currentTop = p);
                var c = e.stickyWrapper.parent();
                e.stickyElement.offset().top + e.stickyElement.outerHeight() >= c.offset().top + c.outerHeight() && e.stickyElement.offset().top <= e.topSpacing
                    ? e.stickyElement.css("position", "absolute").css("top", "").css("bottom", 0).css("z-index", "")
                    : e.stickyElement.css("position", "fixed").css("top", p).css("bottom", "").css("z-index", e.zIndex);
            }
        },
        d = function () {
            p = s.height();
            for (var e = 0, n = r.length; e < n; e++) {
                var i = r[e],
                    o = null;
                i.getWidthFrom ? i.responsiveWidth && (o = t(i.getWidthFrom).width()) : i.widthFromWrapper && (o = i.stickyWrapper.width()), null != o && i.stickyElement.css("width", o);
            }
        },
        m = {
            init: function (e) {
                return this.each(function () {
                    var n = t.extend({}, i, e),
                        o = t(this),
                        p = o.attr("id"),
                        c = p ? p + "-" + i.wrapperClassName : i.wrapperClassName,
                        a = t("<div></div>").attr("id", c).addClass(n.wrapperClassName);
                    o.wrapAll(function () {
                        if (0 == t(this).parent("#" + c).length) return a;
                    });
                    var l = o.parent();
                    n.center && l.css({ width: o.outerWidth(), marginLeft: "auto", marginRight: "auto" }),
                        "right" === o.css("float") && o.css({ float: "none" }).parent().css({ float: "right" }),
                        (n.stickyElement = o),
                        (n.stickyWrapper = l),
                        (n.currentTop = null),
                        (n.elementHeight = t(o).outerHeight()),
                        (n.lastPos = s.scrollTop()),
                        r.push(n),
                        m.setWrapperHeight(this),
                        m.setupChangeListeners(this);
                });
            },
            setWrapperHeight: function (e) {
                var n = t(e),
                    i = n.parent();
                i && i.css("height", n.outerHeight());
            },
            setupChangeListeners: function (t) {
                window.MutationObserver
                    ? new window.MutationObserver(function (e) {
                          (e[0].addedNodes.length || e[0].removedNodes.length) && m.setWrapperHeight(t);
                      }).observe(t, { subtree: !0, childList: !0 })
                    : window.addEventListener
                    ? (t.addEventListener(
                          "DOMNodeInserted",
                          function () {
                              m.setWrapperHeight(t);
                          },
                          !1
                      ),
                      t.addEventListener(
                          "DOMNodeRemoved",
                          function () {
                              m.setWrapperHeight(t);
                          },
                          !1
                      ))
                    : window.attachEvent &&
                      (t.attachEvent("onDOMNodeInserted", function () {
                          m.setWrapperHeight(t);
                      }),
                      t.attachEvent("onDOMNodeRemoved", function () {
                          m.setWrapperHeight(t);
                      }));
            },
            update: c,
            unstick: function (e) {
                return this.each(function () {
                    for (var e = t(this), i = -1, s = r.length; s-- > 0; ) r[s].stickyElement.get(0) === this && (n.call(r, s, 1), (i = s));
                    -1 !== i && (e.unwrap(), e.css({ width: "", position: "", top: "", float: "", "z-index": "" }));
                });
            },
        };
    window.addEventListener ? (window.addEventListener("scroll", c, !1), window.addEventListener("resize", d, !1)) : window.attachEvent && (window.attachEvent("onscroll", c), window.attachEvent("onresize", d)),
        (t.fn.sticky = function (n) {
            return m[n] ? m[n].apply(this, e.call(arguments, 1)) : "object" != typeof n && n ? void t.error("Method " + n + " does not exist on jQuery.sticky") : m.init.apply(this, arguments);
        }),
        (t.fn.unstick = function (n) {
            return m[n] ? m[n].apply(this, e.call(arguments, 1)) : "object" != typeof n && n ? void t.error("Method " + n + " does not exist on jQuery.sticky") : m.unstick.apply(this, arguments);
        }),
        t(function () {
            setTimeout(c, 0);
        });
});
/**
 * tipsy, facebook style tooltips for jquery
 * version 1.0.0a
 * (c) 2008-2010 jason frame [jason@onehackoranother.com]
 *  released under the MIT license
 */
!(function (t) {
    function i(t, i) {
        return "function" == typeof t ? t.call(i) : t;
    }
    function e(t) {
        for (; (t = t.parentNode); ) if (t == document) return !0;
        return !1;
    }
    function s(i, e) {
        (this.$element = t(i)), (this.options = e), (this.enabled = !0), this.fixTitle();
    }
    (s.prototype = {
        show: function () {
            var e = this.getTitle();
            if (e && this.enabled) {
                var s = this.tip();
                s.find(".tipsy-inner")[this.options.html ? "html" : "text"](e), (s[0].className = "tipsy"), s.remove().css({ top: 0, left: 0, visibility: "hidden", display: "block" }).prependTo(document.body);
                var n,
                    o = t.extend({}, this.$element.offset(), { width: this.$element[0].offsetWidth, height: this.$element[0].offsetHeight }),
                    l = s[0].offsetWidth,
                    a = s[0].offsetHeight,
                    f = i(this.options.gravity, this.$element[0]);
                switch (f.charAt(0)) {
                    case "n":
                        n = { top: o.top + o.height + this.options.offset, left: o.left + o.width / 2 - l / 2 };
                        break;
                    case "s":
                        n = { top: o.top - a - this.options.offset, left: o.left + o.width / 2 - l / 2 };
                        break;
                    case "e":
                        n = { top: o.top + o.height / 2 - a / 2, left: o.left - l - this.options.offset };
                        break;
                    case "w":
                        n = { top: o.top + o.height / 2 - a / 2, left: o.left + o.width + this.options.offset };
                }
                2 == f.length && ("w" == f.charAt(1) ? (n.left = o.left + o.width / 2 - 15) : (n.left = o.left + o.width / 2 - l + 15)),
                    s.css(n).addClass("tipsy-" + f),
                    (s.find(".tipsy-arrow")[0].className = "tipsy-arrow tipsy-arrow-" + f.charAt(0)),
                    this.options.className && s.addClass(i(this.options.className, this.$element[0])),
                    this.options.fade ? s.stop().css({ opacity: 0, display: "block", visibility: "visible" }).animate({ opacity: this.options.opacity }) : s.css({ visibility: "visible", opacity: this.options.opacity });
            }
        },
        hide: function () {
            this.options.fade
                ? this.tip()
                      .stop()
                      .fadeOut(function () {
                          t(this).remove();
                      })
                : this.tip().remove();
        },
        fixTitle: function () {
            var t = this.$element;
            (t.attr("title") || "string" != typeof t.attr("original-title")) && t.attr("original-title", t.attr("title") || "").removeAttr("title");
        },
        getTitle: function () {
            var t,
                i = this.$element,
                e = this.options;
            this.fixTitle();
            var t,
                e = this.options;
            return "string" == typeof e.title ? (t = i.attr("title" == e.title ? "original-title" : e.title)) : "function" == typeof e.title && (t = e.title.call(i[0])), (t = ("" + t).replace(/(^\s*|\s*$)/, "")), t || e.fallback;
        },
        tip: function () {
            return this.$tip || ((this.$tip = t('<div class="tipsy"></div>').html('<div class="tipsy-arrow"></div><div class="tipsy-inner"></div>')), this.$tip.data("tipsy-pointee", this.$element[0])), this.$tip;
        },
        validate: function () {
            this.$element[0].parentNode || (this.hide(), (this.$element = null), (this.options = null));
        },
        enable: function () {
            this.enabled = !0;
        },
        disable: function () {
            this.enabled = !1;
        },
        toggleEnabled: function () {
            this.enabled = !this.enabled;
        },
    }),
        (t.fn.tipsy = function (i) {
            function e(e) {
                var n = t.data(e, "tipsy");
                return n || ((n = new s(e, t.fn.tipsy.elementOptions(e, i))), t.data(e, "tipsy", n)), n;
            }
            function n() {
                var t = e(this);
                (t.hoverState = "in"),
                    0 == i.delayIn
                        ? t.show()
                        : (t.fixTitle(),
                          setTimeout(function () {
                              "in" == t.hoverState && t.show();
                          }, i.delayIn));
            }
            function o() {
                var t = e(this);
                (t.hoverState = "out"),
                    0 == i.delayOut
                        ? t.hide()
                        : setTimeout(function () {
                              "out" == t.hoverState && t.hide();
                          }, i.delayOut);
            }
            if (i === !0) return this.data("tipsy");
            if ("string" == typeof i) {
                var l = this.data("tipsy");
                return l && l[i](), this;
            }
            if (
                ((i = t.extend({}, t.fn.tipsy.defaults, i)),
                i.live ||
                    this.each(function () {
                        e(this);
                    }),
                "manual" != i.trigger)
            ) {
                var a = i.live ? "live" : "bind",
                    f = "hover" == i.trigger ? "mouseenter" : "focus",
                    h = "hover" == i.trigger ? "mouseleave" : "blur";
                this[a](f, n)[a](h, o);
            }
            return this;
        }),
        (t.fn.tipsy.defaults = { className: null, delayIn: 0, delayOut: 0, fade: !1, fallback: "", gravity: "n", html: !1, live: !1, offset: 0, opacity: 0.8, title: "title", trigger: "hover" }),
        (t.fn.tipsy.revalidate = function () {
            t(".tipsy").each(function () {
                var i = t.data(this, "tipsy-pointee");
                (i && e(i)) || t(this).remove();
            });
        }),
        (t.fn.tipsy.elementOptions = function (i, e) {
            return t.metadata ? t.extend({}, e, t(i).metadata()) : e;
        }),
        (t.fn.tipsy.autoNS = function () {
            return t(this).offset().top > t(document).scrollTop() + t(window).height() / 2 ? "s" : "n";
        }),
        (t.fn.tipsy.autoWE = function () {
            return t(this).offset().left > t(document).scrollLeft() + t(window).width() / 2 ? "e" : "w";
        }),
        (t.fn.tipsy.autoBounds = function (i, e) {
            return function () {
                var s = { ns: e[0], ew: e.length > 1 ? e[1] : !1 },
                    n = t(document).scrollTop() + i,
                    o = t(document).scrollLeft() + i,
                    l = t(this);
                return (
                    l.offset().top < n && (s.ns = "n"),
                    l.offset().left < o && (s.ew = "w"),
                    t(window).width() + t(document).scrollLeft() - l.offset().left < i && (s.ew = "e"),
                    t(window).height() + t(document).scrollTop() - l.offset().top < i && (s.ns = "s"),
                    s.ns + (s.ew ? s.ew : "")
                );
            };
        });
})(jQuery);

/**
 * History.js Core
 * @author Benjamin Arthur Lupton <contact@balupton.com>
 * @copyright 2010-2011 Benjamin Arthur Lupton <contact@balupton.com>
 * @license New BSD License <http://creativecommons.org/licenses/BSD/>
 */
(function (e, t) {
    "use strict";
    var n = e.console || t,
        r = e.document,
        i = e.navigator,
        s = !1,
        o = e.setTimeout,
        u = e.clearTimeout,
        a = e.setInterval,
        f = e.clearInterval,
        l = e.JSON,
        c = e.alert,
        h = (e.History = e.History || {}),
        p = e.history;
    try {
        (s = e.sessionStorage), s.setItem("TEST", "1"), s.removeItem("TEST");
    } catch (d) {
        s = !1;
    }
    (l.stringify = l.stringify || l.encode), (l.parse = l.parse || l.decode);
    if (typeof h.init != "undefined") throw new Error("History.js Core has already been loaded...");
    (h.init = function (e) {
        return typeof h.Adapter == "undefined" ? !1 : (typeof h.initCore != "undefined" && h.initCore(), typeof h.initHtml4 != "undefined" && h.initHtml4(), !0);
    }),
        (h.initCore = function (d) {
            if (typeof h.initCore.initialized != "undefined") return !1;
            (h.initCore.initialized = !0),
                (h.options = h.options || {}),
                (h.options.hashChangeInterval = h.options.hashChangeInterval || 100),
                (h.options.safariPollInterval = h.options.safariPollInterval || 500),
                (h.options.doubleCheckInterval = h.options.doubleCheckInterval || 500),
                (h.options.disableSuid = h.options.disableSuid || !1),
                (h.options.storeInterval = h.options.storeInterval || 1e3),
                (h.options.busyDelay = h.options.busyDelay || 250),
                (h.options.debug = h.options.debug || !1),
                (h.options.initialTitle = h.options.initialTitle || r.title),
                (h.options.html4Mode = h.options.html4Mode || !1),
                (h.options.delayInit = h.options.delayInit || !1),
                (h.intervalList = []),
                (h.clearAllIntervals = function () {
                    var e,
                        t = h.intervalList;
                    if (typeof t != "undefined" && t !== null) {
                        for (e = 0; e < t.length; e++) f(t[e]);
                        h.intervalList = null;
                    }
                }),
                (h.debug = function () {
                    (h.options.debug || !1) && h.log.apply(h, arguments);
                }),
                (h.log = function () {
                    var e = typeof n != "undefined" && typeof n.log != "undefined" && typeof n.log.apply != "undefined",
                        t = r.getElementById("log"),
                        i,
                        s,
                        o,
                        u,
                        a;
                    e ? ((u = Array.prototype.slice.call(arguments)), (i = u.shift()), typeof n.debug != "undefined" ? n.debug.apply(n, [i, u]) : n.log.apply(n, [i, u])) : (i = "\n" + arguments[0] + "\n");
                    for (s = 1, o = arguments.length; s < o; ++s) {
                        a = arguments[s];
                        if (typeof a == "object" && typeof l != "undefined")
                            try {
                                a = l.stringify(a);
                            } catch (f) {}
                        i += "\n" + a + "\n";
                    }
                    return t ? ((t.value += i + "\n-----\n"), (t.scrollTop = t.scrollHeight - t.clientHeight)) : e || c(i), !0;
                }),
                (h.getInternetExplorerMajorVersion = function () {
                    var e = (h.getInternetExplorerMajorVersion.cached =
                        typeof h.getInternetExplorerMajorVersion.cached != "undefined"
                            ? h.getInternetExplorerMajorVersion.cached
                            : (function () {
                                  var e = 3,
                                      t = r.createElement("div"),
                                      n = t.getElementsByTagName("i");
                                  while ((t.innerHTML = "<!--[if gt IE " + ++e + "]><i></i><![endif]-->") && n[0]);
                                  return e > 4 ? e : !1;
                              })());
                    return e;
                }),
                (h.isInternetExplorer = function () {
                    var e = (h.isInternetExplorer.cached = typeof h.isInternetExplorer.cached != "undefined" ? h.isInternetExplorer.cached : Boolean(h.getInternetExplorerMajorVersion()));
                    return e;
                }),
                h.options.html4Mode
                    ? (h.emulated = { pushState: !0, hashChange: !0 })
                    : (h.emulated = {
                          pushState: !Boolean(e.history && e.history.pushState && e.history.replaceState && !/ Mobile\/([1-7][a-z]|(8([abcde]|f(1[0-8]))))/i.test(i.userAgent) && !/AppleWebKit\/5([0-2]|3[0-2])/i.test(i.userAgent)),
                          hashChange: Boolean(!("onhashchange" in e || "onhashchange" in r) || (h.isInternetExplorer() && h.getInternetExplorerMajorVersion() < 8)),
                      }),
                (h.enabled = !h.emulated.pushState),
                (h.bugs = {
                    setHash: Boolean(!h.emulated.pushState && i.vendor === "Apple Computer, Inc." && /AppleWebKit\/5([0-2]|3[0-3])/.test(i.userAgent)),
                    safariPoll: Boolean(!h.emulated.pushState && i.vendor === "Apple Computer, Inc." && /AppleWebKit\/5([0-2]|3[0-3])/.test(i.userAgent)),
                    ieDoubleCheck: Boolean(h.isInternetExplorer() && h.getInternetExplorerMajorVersion() < 8),
                    hashEscape: Boolean(h.isInternetExplorer() && h.getInternetExplorerMajorVersion() < 7),
                }),
                (h.isEmptyObject = function (e) {
                    for (var t in e) if (e.hasOwnProperty(t)) return !1;
                    return !0;
                }),
                (h.cloneObject = function (e) {
                    var t, n;
                    return e ? ((t = l.stringify(e)), (n = l.parse(t))) : (n = {}), n;
                }),
                (h.getRootUrl = function () {
                    var e = r.location.protocol + "//" + (r.location.hostname || r.location.host);
                    if (r.location.port || !1) e += ":" + r.location.port;
                    return (e += "/"), e;
                }),
                (h.getBaseHref = function () {
                    var e = r.getElementsByTagName("base"),
                        t = null,
                        n = "";
                    return e.length === 1 && ((t = e[0]), (n = t.href.replace(/[^\/]+$/, ""))), (n = n.replace(/\/+$/, "")), n && (n += "/"), n;
                }),
                (h.getBaseUrl = function () {
                    var e = h.getBaseHref() || h.getBasePageUrl() || h.getRootUrl();
                    return e;
                }),
                (h.getPageUrl = function () {
                    var e = h.getState(!1, !1),
                        t = (e || {}).url || h.getLocationHref(),
                        n;
                    return (
                        (n = t.replace(/\/+$/, "").replace(/[^\/]+$/, function (e, t, n) {
                            return /\./.test(e) ? e : e + "/";
                        })),
                        n
                    );
                }),
                (h.getBasePageUrl = function () {
                    var e =
                        h
                            .getLocationHref()
                            .replace(/[#\?].*/, "")
                            .replace(/[^\/]+$/, function (e, t, n) {
                                return /[^\/]$/.test(e) ? "" : e;
                            })
                            .replace(/\/+$/, "") + "/";
                    return e;
                }),
                (h.getFullUrl = function (e, t) {
                    var n = e,
                        r = e.substring(0, 1);
                    return (
                        (t = typeof t == "undefined" ? !0 : t),
                        /[a-z]+\:\/\//.test(e) ||
                            (r === "/"
                                ? (n = h.getRootUrl() + e.replace(/^\/+/, ""))
                                : r === "#"
                                ? (n = h.getPageUrl().replace(/#.*/, "") + e)
                                : r === "?"
                                ? (n = h.getPageUrl().replace(/[\?#].*/, "") + e)
                                : t
                                ? (n = h.getBaseUrl() + e.replace(/^(\.\/)+/, ""))
                                : (n = h.getBasePageUrl() + e.replace(/^(\.\/)+/, ""))),
                        n.replace(/\#$/, "")
                    );
                }),
                (h.getShortUrl = function (e) {
                    var t = e,
                        n = h.getBaseUrl(),
                        r = h.getRootUrl();
                    return h.emulated.pushState && (t = t.replace(n, "")), (t = t.replace(r, "/")), h.isTraditionalAnchor(t) && (t = "./" + t), (t = t.replace(/^(\.\/)+/g, "./").replace(/\#$/, "")), t;
                }),
                (h.getLocationHref = function (e) {
                    return (
                        (e = e || r),
                        e.URL === e.location.href
                            ? e.location.href
                            : e.location.href === decodeURIComponent(e.URL)
                            ? e.URL
                            : e.location.hash && decodeURIComponent(e.location.href.replace(/^[^#]+/, "")) === e.location.hash
                            ? e.location.href
                            : e.URL.indexOf("#") == -1 && e.location.href.indexOf("#") != -1
                            ? e.location.href
                            : e.URL || e.location.href
                    );
                }),
                (h.store = {}),
                (h.idToState = h.idToState || {}),
                (h.stateToId = h.stateToId || {}),
                (h.urlToId = h.urlToId || {}),
                (h.storedStates = h.storedStates || []),
                (h.savedStates = h.savedStates || []),
                (h.normalizeStore = function () {
                    (h.store.idToState = h.store.idToState || {}), (h.store.urlToId = h.store.urlToId || {}), (h.store.stateToId = h.store.stateToId || {});
                }),
                (h.getState = function (e, t) {
                    typeof e == "undefined" && (e = !0), typeof t == "undefined" && (t = !0);
                    var n = h.getLastSavedState();
                    return !n && t && (n = h.createStateObject()), e && ((n = h.cloneObject(n)), (n.url = n.cleanUrl || n.url)), n;
                }),
                (h.getIdByState = function (e) {
                    var t = h.extractId(e.url),
                        n;
                    if (!t) {
                        n = h.getStateString(e);
                        if (typeof h.stateToId[n] != "undefined") t = h.stateToId[n];
                        else if (typeof h.store.stateToId[n] != "undefined") t = h.store.stateToId[n];
                        else {
                            for (;;) {
                                t = new Date().getTime() + String(Math.random()).replace(/\D/g, "");
                                if (typeof h.idToState[t] == "undefined" && typeof h.store.idToState[t] == "undefined") break;
                            }
                            (h.stateToId[n] = t), (h.idToState[t] = e);
                        }
                    }
                    return t;
                }),
                (h.normalizeState = function (e) {
                    var t, n;
                    if (!e || typeof e != "object") e = {};
                    if (typeof e.normalized != "undefined") return e;
                    if (!e.data || typeof e.data != "object") e.data = {};
                    return (
                        (t = {}),
                        (t.normalized = !0),
                        (t.title = e.title || ""),
                        (t.url = h.getFullUrl(e.url ? e.url : h.getLocationHref())),
                        (t.hash = h.getShortUrl(t.url)),
                        (t.data = h.cloneObject(e.data)),
                        (t.id = h.getIdByState(t)),
                        (t.cleanUrl = t.url.replace(/\??\&_suid.*/, "")),
                        (t.url = t.cleanUrl),
                        (n = !h.isEmptyObject(t.data)),
                        (t.title || n) && h.options.disableSuid !== !0 && ((t.hash = h.getShortUrl(t.url).replace(/\??\&_suid.*/, "")), /\?/.test(t.hash) || (t.hash += "?"), (t.hash += "&_suid=" + t.id)),
                        (t.hashedUrl = h.getFullUrl(t.hash)),
                        (h.emulated.pushState || h.bugs.safariPoll) && h.hasUrlDuplicate(t) && (t.url = t.hashedUrl),
                        t
                    );
                }),
                (h.createStateObject = function (e, t, n) {
                    var r = { data: e, title: t, url: n };
                    return (r = h.normalizeState(r)), r;
                }),
                (h.getStateById = function (e) {
                    e = String(e);
                    var n = h.idToState[e] || h.store.idToState[e] || t;
                    return n;
                }),
                (h.getStateString = function (e) {
                    var t, n, r;
                    return (t = h.normalizeState(e)), (n = { data: t.data, title: e.title, url: e.url }), (r = l.stringify(n)), r;
                }),
                (h.getStateId = function (e) {
                    var t, n;
                    return (t = h.normalizeState(e)), (n = t.id), n;
                }),
                (h.getHashByState = function (e) {
                    var t, n;
                    return (t = h.normalizeState(e)), (n = t.hash), n;
                }),
                (h.extractId = function (e) {
                    var t, n, r, i;
                    return e.indexOf("#") != -1 ? (i = e.split("#")[0]) : (i = e), (n = /(.*)\&_suid=([0-9]+)$/.exec(i)), (r = n ? n[1] || e : e), (t = n ? String(n[2] || "") : ""), t || !1;
                }),
                (h.isTraditionalAnchor = function (e) {
                    var t = !/[\/\?\.]/.test(e);
                    return t;
                }),
                (h.extractState = function (e, t) {
                    var n = null,
                        r,
                        i;
                    return (
                        (t = t || !1),
                        (r = h.extractId(e)),
                        r && (n = h.getStateById(r)),
                        n || ((i = h.getFullUrl(e)), (r = h.getIdByUrl(i) || !1), r && (n = h.getStateById(r)), !n && t && !h.isTraditionalAnchor(e) && (n = h.createStateObject(null, null, i))),
                        n
                    );
                }),
                (h.getIdByUrl = function (e) {
                    var n = h.urlToId[e] || h.store.urlToId[e] || t;
                    return n;
                }),
                (h.getLastSavedState = function () {
                    return h.savedStates[h.savedStates.length - 1] || t;
                }),
                (h.getLastStoredState = function () {
                    return h.storedStates[h.storedStates.length - 1] || t;
                }),
                (h.hasUrlDuplicate = function (e) {
                    var t = !1,
                        n;
                    return (n = h.extractState(e.url)), (t = n && n.id !== e.id), t;
                }),
                (h.storeState = function (e) {
                    return (h.urlToId[e.url] = e.id), h.storedStates.push(h.cloneObject(e)), e;
                }),
                (h.isLastSavedState = function (e) {
                    var t = !1,
                        n,
                        r,
                        i;
                    return h.savedStates.length && ((n = e.id), (r = h.getLastSavedState()), (i = r.id), (t = n === i)), t;
                }),
                (h.saveState = function (e) {
                    return h.isLastSavedState(e) ? !1 : (h.savedStates.push(h.cloneObject(e)), !0);
                }),
                (h.getStateByIndex = function (e) {
                    var t = null;
                    return typeof e == "undefined" ? (t = h.savedStates[h.savedStates.length - 1]) : e < 0 ? (t = h.savedStates[h.savedStates.length + e]) : (t = h.savedStates[e]), t;
                }),
                (h.getCurrentIndex = function () {
                    var e = null;
                    return h.savedStates.length < 1 ? (e = 0) : (e = h.savedStates.length - 1), e;
                }),
                (h.getHash = function (e) {
                    var t = h.getLocationHref(e),
                        n;
                    return (n = h.getHashByUrl(t)), n;
                }),
                (h.unescapeHash = function (e) {
                    var t = h.normalizeHash(e);
                    return (t = decodeURIComponent(t)), t;
                }),
                (h.normalizeHash = function (e) {
                    var t = e.replace(/[^#]*#/, "").replace(/#.*/, "");
                    return t;
                }),
                (h.setHash = function (e, t) {
                    var n, i;
                    return t !== !1 && h.busy()
                        ? (h.pushQueue({ scope: h, callback: h.setHash, args: arguments, queue: t }), !1)
                        : (h.busy(!0),
                          (n = h.extractState(e, !0)),
                          n && !h.emulated.pushState ? h.pushState(n.data, n.title, n.url, !1) : h.getHash() !== e && (h.bugs.setHash ? ((i = h.getPageUrl()), h.pushState(null, null, i + "#" + e, !1)) : (r.location.hash = e)),
                          h);
                }),
                (h.escapeHash = function (t) {
                    var n = h.normalizeHash(t);
                    return (n = e.encodeURIComponent(n)), h.bugs.hashEscape || (n = n.replace(/\%21/g, "!").replace(/\%26/g, "&").replace(/\%3D/g, "=").replace(/\%3F/g, "?")), n;
                }),
                (h.getHashByUrl = function (e) {
                    var t = String(e).replace(/([^#]*)#?([^#]*)#?(.*)/, "$2");
                    return (t = h.unescapeHash(t)), t;
                }),
                (h.setTitle = function (e) {
                    var t = e.title,
                        n;
                    t || ((n = h.getStateByIndex(0)), n && n.url === e.url && (t = n.title || h.options.initialTitle));
                    try {
                        r.getElementsByTagName("title")[0].innerHTML = t.replace("<", "&lt;").replace(">", "&gt;").replace(" & ", " &amp; ");
                    } catch (i) {}
                    return (r.title = t), h;
                }),
                (h.queues = []),
                (h.busy = function (e) {
                    typeof e != "undefined" ? (h.busy.flag = e) : typeof h.busy.flag == "undefined" && (h.busy.flag = !1);
                    if (!h.busy.flag) {
                        u(h.busy.timeout);
                        var t = function () {
                            var e, n, r;
                            if (h.busy.flag) return;
                            for (e = h.queues.length - 1; e >= 0; --e) {
                                n = h.queues[e];
                                if (n.length === 0) continue;
                                (r = n.shift()), h.fireQueueItem(r), (h.busy.timeout = o(t, h.options.busyDelay));
                            }
                        };
                        h.busy.timeout = o(t, h.options.busyDelay);
                    }
                    return h.busy.flag;
                }),
                (h.busy.flag = !1),
                (h.fireQueueItem = function (e) {
                    return e.callback.apply(e.scope || h, e.args || []);
                }),
                (h.pushQueue = function (e) {
                    return (h.queues[e.queue || 0] = h.queues[e.queue || 0] || []), h.queues[e.queue || 0].push(e), h;
                }),
                (h.queue = function (e, t) {
                    return typeof e == "function" && (e = { callback: e }), typeof t != "undefined" && (e.queue = t), h.busy() ? h.pushQueue(e) : h.fireQueueItem(e), h;
                }),
                (h.clearQueue = function () {
                    return (h.busy.flag = !1), (h.queues = []), h;
                }),
                (h.stateChanged = !1),
                (h.doubleChecker = !1),
                (h.doubleCheckComplete = function () {
                    return (h.stateChanged = !0), h.doubleCheckClear(), h;
                }),
                (h.doubleCheckClear = function () {
                    return h.doubleChecker && (u(h.doubleChecker), (h.doubleChecker = !1)), h;
                }),
                (h.doubleCheck = function (e) {
                    return (
                        (h.stateChanged = !1),
                        h.doubleCheckClear(),
                        h.bugs.ieDoubleCheck &&
                            (h.doubleChecker = o(function () {
                                return h.doubleCheckClear(), h.stateChanged || e(), !0;
                            }, h.options.doubleCheckInterval)),
                        h
                    );
                }),
                (h.safariStatePoll = function () {
                    var t = h.extractState(h.getLocationHref()),
                        n;
                    if (!h.isLastSavedState(t)) return (n = t), n || (n = h.createStateObject()), h.Adapter.trigger(e, "popstate"), h;
                    return;
                }),
                (h.back = function (e) {
                    return e !== !1 && h.busy()
                        ? (h.pushQueue({ scope: h, callback: h.back, args: arguments, queue: e }), !1)
                        : (h.busy(!0),
                          h.doubleCheck(function () {
                              h.back(!1);
                          }),
                          p.go(-1),
                          !0);
                }),
                (h.forward = function (e) {
                    return e !== !1 && h.busy()
                        ? (h.pushQueue({ scope: h, callback: h.forward, args: arguments, queue: e }), !1)
                        : (h.busy(!0),
                          h.doubleCheck(function () {
                              h.forward(!1);
                          }),
                          p.go(1),
                          !0);
                }),
                (h.go = function (e, t) {
                    var n;
                    if (e > 0) for (n = 1; n <= e; ++n) h.forward(t);
                    else {
                        if (!(e < 0)) throw new Error("History.go: History.go requires a positive or negative integer passed.");
                        for (n = -1; n >= e; --n) h.back(t);
                    }
                    return h;
                });
            if (h.emulated.pushState) {
                var v = function () {};
                (h.pushState = h.pushState || v), (h.replaceState = h.replaceState || v);
            } else
                (h.onPopState = function (t, n) {
                    var r = !1,
                        i = !1,
                        s,
                        o;
                    return (
                        h.doubleCheckComplete(),
                        (s = h.getHash()),
                        s
                            ? ((o = h.extractState(s || h.getLocationHref(), !0)), o ? h.replaceState(o.data, o.title, o.url, !1) : (h.Adapter.trigger(e, "anchorchange"), h.busy(!1)), (h.expectedStateId = !1), !1)
                            : ((r = h.Adapter.extractEventData("state", t, n) || !1),
                              r ? (i = h.getStateById(r)) : h.expectedStateId ? (i = h.getStateById(h.expectedStateId)) : (i = h.extractState(h.getLocationHref())),
                              i || (i = h.createStateObject(null, null, h.getLocationHref())),
                              (h.expectedStateId = !1),
                              h.isLastSavedState(i) ? (h.busy(!1), !1) : (h.storeState(i), h.saveState(i), h.setTitle(i), h.Adapter.trigger(e, "statechange"), h.busy(!1), !0))
                    );
                }),
                    h.Adapter.bind(e, "popstate", h.onPopState),
                    (h.pushState = function (t, n, r, i) {
                        if (h.getHashByUrl(r) && h.emulated.pushState) throw new Error("History.js does not support states with fragement-identifiers (hashes/anchors).");
                        if (i !== !1 && h.busy()) return h.pushQueue({ scope: h, callback: h.pushState, args: arguments, queue: i }), !1;
                        h.busy(!0);
                        var s = h.createStateObject(t, n, r);
                        return h.isLastSavedState(s) ? h.busy(!1) : (h.storeState(s), (h.expectedStateId = s.id), p.pushState(s.id, s.title, s.url), h.Adapter.trigger(e, "popstate")), !0;
                    }),
                    (h.replaceState = function (t, n, r, i) {
                        if (h.getHashByUrl(r) && h.emulated.pushState) throw new Error("History.js does not support states with fragement-identifiers (hashes/anchors).");
                        if (i !== !1 && h.busy()) return h.pushQueue({ scope: h, callback: h.replaceState, args: arguments, queue: i }), !1;
                        h.busy(!0);
                        var s = h.createStateObject(t, n, r);
                        return h.isLastSavedState(s) ? h.busy(!1) : (h.storeState(s), (h.expectedStateId = s.id), p.replaceState(s.id, s.title, s.url), h.Adapter.trigger(e, "popstate")), !0;
                    });
            if (s) {
                try {
                    h.store = l.parse(s.getItem("History.store")) || {};
                } catch (m) {
                    h.store = {};
                }
                h.normalizeStore();
            } else (h.store = {}), h.normalizeStore();
            h.Adapter.bind(e, "unload", h.clearAllIntervals),
                h.saveState(h.storeState(h.extractState(h.getLocationHref(), !0))),
                s &&
                    ((h.onUnload = function () {
                        var e, t, n;
                        try {
                            e = l.parse(s.getItem("History.store")) || {};
                        } catch (r) {
                            e = {};
                        }
                        (e.idToState = e.idToState || {}), (e.urlToId = e.urlToId || {}), (e.stateToId = e.stateToId || {});
                        for (t in h.idToState) {
                            if (!h.idToState.hasOwnProperty(t)) continue;
                            e.idToState[t] = h.idToState[t];
                        }
                        for (t in h.urlToId) {
                            if (!h.urlToId.hasOwnProperty(t)) continue;
                            e.urlToId[t] = h.urlToId[t];
                        }
                        for (t in h.stateToId) {
                            if (!h.stateToId.hasOwnProperty(t)) continue;
                            e.stateToId[t] = h.stateToId[t];
                        }
                        (h.store = e), h.normalizeStore(), (n = l.stringify(e));
                        try {
                            s.setItem("History.store", n);
                        } catch (i) {
                            if (i.code !== DOMException.QUOTA_EXCEEDED_ERR) throw i;
                            s.length && (s.removeItem("History.store"), s.setItem("History.store", n));
                        }
                    }),
                    h.intervalList.push(a(h.onUnload, h.options.storeInterval)),
                    h.Adapter.bind(e, "beforeunload", h.onUnload),
                    h.Adapter.bind(e, "unload", h.onUnload));
            if (!h.emulated.pushState) {
                h.bugs.safariPoll && h.intervalList.push(a(h.safariStatePoll, h.options.safariPollInterval));
                if (i.vendor === "Apple Computer, Inc." || (i.appCodeName || "") === "Mozilla")
                    h.Adapter.bind(e, "hashchange", function () {
                        h.Adapter.trigger(e, "popstate");
                    }),
                        h.getHash() &&
                            h.Adapter.onDomLoad(function () {
                                h.Adapter.trigger(e, "hashchange");
                            });
            }
        }),
        (!h.options || !h.options.delayInit) && h.init();
})(window);
var RubyStickySidebar = (function (t, o) {
    "use strict";
    return (
        (t.$sections = []),
        (t.$lastHeight = 0),
        (t.$delay = 1),
        (t.$isEnabled = !1),
        (t.$wHeight = o(window).height()),
        (t.init = function () {
            var t = this;
            window.addEventListener
                ? (window.addEventListener(
                      "scroll",
                      function () {
                          clearTimeout(t.lastScrollEvent),
                              t.checkEventScroll(),
                              (t.lastScrollEvent = setTimeout(function () {
                                  t.reCalcSections(), t.checkEventScroll();
                              }, 50));
                      },
                      !1
                  ),
                  window.addEventListener(
                      "resize",
                      function () {
                          t.reload();
                      },
                      !1
                  ))
                : window.attachEvent &&
                  (window.attachEvent("onscroll", function () {
                      clearTimeout(t.lastScrollEvent),
                          t.checkEventScroll(),
                          (t.lastScrollEvent = setTimeout(function () {
                              t.reCalcSections(), t.checkEventScroll();
                          }, 50));
                  }),
                  window.attachEvent("onresize", function () {
                      t.reload();
                  }));
        }),
        (t.stick = function (t) {
            var n = this;
            991 > o(window).width() ? ((n.$isEnabled = !1), n.restoreCSS()) : (n.$isEnabled = !0),
                t.length > 0 &&
                    t.each(function () {
                        var t = o(this);
                        n.addSection(t);
                    }),
                n.init();
        }),
        (t.addSection = function (t) {
            var o = this.createSection(t);
            void 0 !== o && (this.addClearFix(o), (o.contentTop = 0), (o.contentBottom = 0), (o.sidebarTop = 0), (o.sidebarBottom = 0), (o.status = "top_content"), this.sectionPos(o), this.$sections.push(o));
        }),
        (t.createSection = function (t) {
            var o = {};
            if (((o.sidebar = t.find(".sidebar-inner")), (o.content = t.parent().find(".ruby-content-wrap")), void 0 !== o.content)) return o;
        }),
        (t.addClearFix = function (t) {
            t.content.parent().addClass("clearfix"), t.sidebar.after('<div class="clearfix"></div>');
        }),
        (t.sectionPos = function (t) {
            return (
                (t.contentTop = t.content.offset().top), (t.contentHeight = t.content.height()), (t.contentBottom = t.contentTop + t.contentHeight), (t.sidebarHeight = t.sidebar.height()), (t.sidebarWidth = t.sidebar.parent().width()), t
            );
        }),
        (t.sidebarPos = function (t) {
            return (t.sidebarTop = t.sidebar.offset().top), (t.sidebarBottom = t.sidebarTop + t.sidebarHeight), t;
        }),
        (t.sectionStatus = function (t, o, n) {
            var e = this.$wHeight + n;
            return (
                t.sidebarHeight + 60 >= t.contentHeight
                    ? (t.status = "content_small")
                    : t.sidebarHeight <= this.$wHeight
                    ? n < t.contentTop
                        ? (t.status = "top_content")
                        : t.contentBottom - t.sidebarHeight >= n
                        ? (t.status = "fixed_top")
                        : (t.status = "bottom_content")
                    : t.sidebarBottom < n
                    ? (t.status = "bottom_content")
                    : (t.sidebarBottom < e && t.sidebarBottom < t.contentBottom && "down" == o && t.contentBottom > e
                          ? (t.status = "fixed_bottom")
                          : t.sidebarTop <= t.contentTop && "up" == o && t.contentBottom >= e
                          ? (t.status = "top_content")
                          : (t.contentBottom <= t.sidebarBottom && "down" == o) || t.contentBottom < e
                          ? (t.status = "bottom_content")
                          : n <= t.sidebarTop && "up" == o && t.contentTop <= n && (t.status = "fixed_top"),
                      (("up" == o && "fixed_bottom" == t.status) || ("fixed_top" == t.status && "down" == o)) && (t.status = "absolute")),
                t.status
            );
        }),
        (t.checkEventScroll = function () {
            if (this.$isEnabled) {
                var n,
                    e = o(window).scrollTop();
                (n = e != this.$lastHeight && e > this.$lastHeight ? "down" : "up"), (this.$lastHeight = e);
                for (var i = 0; i < this.$sections.length; i++) {
                    var s = this.$sections[i];
                    this.sidebarPos(s), (s.status = this.sectionStatus(s, n, e)), t.calcCSS(s);
                }
            }
        }),
        (t.restoreCSS = function () {
            for (var t = 0; t < this.$sections.length; t++) this.$sections[t].sidebar.css({ width: "auto", position: "static", top: "auto", bottom: "auto" });
        }),
        (t.calcCSS = function (t) {
            switch (t.status) {
                case "fixed_bottom":
                    if (!0 === t.fixed_bottom_run_once) break;
                    (t.fixed_top_run_once = !1),
                        (t.fixed_bottom_run_once = !0),
                        (t.top_content_run_once = !1),
                        (t.bottom_content_run_once = !1),
                        (t.absolute_run_once = !1),
                        (t.content_small_run_once = !1),
                        t.sidebar.css({ width: t.sidebarWidth, position: "fixed", top: "auto", bottom: "0", "z-index": "100" });
                    break;
                case "top_content":
                    if (!0 === t.top_content_run_once) break;
                    (t.fixed_top_run_once = !1),
                        (t.fixed_bottom_run_once = !1),
                        (t.top_content_run_once = !0),
                        (t.bottom_content_run_once = !1),
                        (t.absolute_run_once = !1),
                        (t.content_small_run_once = !1),
                        t.sidebar.css({ width: "auto", position: "static", top: "auto", bottom: "auto" });
                    break;
                case "bottom_content":
                    if (!0 === t.bottom_content_run_once && t.bottom_content_last_sidebar_height == t.sidebarHeight && t.bottom_content_last_content_height == t.contentHeight) break;
                    (t.fixed_top_run_once = !1),
                        (t.fixed_bottom_run_once = !1),
                        (t.top_content_run_once = !1),
                        (t.bottom_content_run_once = !0),
                        (t.absolute_run_once = !1),
                        (t.content_small_run_once = !1),
                        (t.bottom_content_last_sidebar_height = t.sidebarHeight),
                        (t.bottom_content_last_content_height = t.contentHeight),
                        t.sidebar.css({ width: t.sidebarWidth, position: "absolute", top: t.contentBottom - t.sidebarHeight - t.contentTop, bottom: "auto" });
                    break;
                case "fixed_top":
                    if (!0 === t.fixed_top_run_once) break;
                    (t.fixed_top_run_once = !0),
                        (t.fixed_bottom_run_once = !1),
                        (t.top_content_run_once = !1),
                        (t.bottom_content_run_once = !1),
                        (t.absolute_run_once = !1),
                        (t.content_small_run_once = !1),
                        t.sidebar.css({ width: t.sidebarWidth, position: "fixed", top: '130px', bottom: "auto" });
                    break;
                case "absolute":
                    if (!0 === t.absolute_run_once) break;
                    (t.fixed_top_run_once = !1),
                        (t.fixed_bottom_run_once = !1),
                        (t.top_content_run_once = !1),
                        (t.bottom_content_run_once = !1),
                        (t.absolute_run_once = !0),
                        (t.content_small_run_once = !1),
                        t.sidebar.css({ width: t.sidebarWidth, position: "absolute", top: t.sidebarTop - t.contentTop, bottom: "auto" });
                    break;
                case "content_small":
                    if (!0 === t.content_small_run_once) break;
                    (t.fixed_top_run_once = !1),
                        (t.fixed_bottom_run_once = !1),
                        (t.top_content_run_once = !1),
                        (t.bottom_content_run_once = !1),
                        (t.absolute_run_once = !1),
                        (t.content_small_run_once = !0),
                        t.sidebar.css({ width: "auto", position: "static", top: "auto", bottom: "auto" });
            }
        }),
        (t.resetFlags = function () {
            for (var t = 0; t < this.$sections.length; t++)
                (this.$sections[t].fixed_top_run_once = !1),
                    (this.$sections[t].fixed_bottom_run_once = !1),
                    (this.$sections[t].top_content_run_once = !1),
                    (this.$sections[t].bottom_content_run_once = !1),
                    (this.$sections[t].absolute_run_once = !1),
                    (this.$sections[t].content_small_run_once = !1),
                    (this.$sections[t].bottom_content_last_sidebar_height = 0),
                    (this.$sections[t].bottom_content_last_contentHeight = 0);
        }),
        (t.reload = function () {
            991 > o(window).width() ? ((this.$isEnabled = !1), this.restoreCSS()) : (this.$isEnabled = !0);
        }),
        (t.reCalcSections = function () {
            for (var t = 0; t < this.$sections.length; t++) this.sectionPos(this.$sections[t]);
        }),
        t
    );
})(RubyStickySidebar || {}, jQuery);
