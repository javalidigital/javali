/* dCodes Framework: (c) TemplateAccess */
(function (a, b) {
    function p(c, d, e) {
        var f = 2;
        c.find(".creative_layer div").each(function (c) {
            var e = a(this);
            if (e.data("_top") == b) e.data("_top", e.position().top);
            if (e.data("_left") == b) e.data("_left", e.position().left);
            if (e.data("_op") == b) {
                e.data("_op", e.css("opacity"))
            }
            e.css({
                "z-index": 1200
            });
            if (e.hasClass("fadeup")) {
                e.animate({
                    top: e.data("_top") + 20 + "px",
                    opacity: 0
                }, {
                    duration: 0,
                    queue: false
                }).delay(d + (f + 1) * 350).animate({
                    top: e.data("_top") + "px",
                    opacity: e.data("_op")
                }, {
                    duration: 500,
                    queue: true
                });
                f++
            }
            if (e.hasClass("faderight")) {
                e.animate({
                    left: e.data("_left") - 20 + "px",
                    opacity: 0
                }, {
                    duration: 0,
                    queue: false
                }).delay(d + (f + 1) * 350).animate({
                    left: e.data("_left") + "px",
                    opacity: e.data("_op")
                }, {
                    duration: 500,
                    queue: true
                });
                f++
            }
            if (e.hasClass("fadedown")) {
                e.animate({
                    top: e.data("_top") - 20 + "px",
                    opacity: 0
                }, {
                    duration: 0,
                    queue: false
                }).delay(d + (f + 1) * 350).animate({
                    top: e.data("_top") + "px",
                    opacity: e.data("_op")
                }, {
                    duration: 500,
                    queue: true
                });
                f++
            }
            if (e.hasClass("fadeleft")) {
                e.animate({
                    left: e.data("_left") + 20 + "px",
                    opacity: 0
                }, {
                    duration: 0,
                    queue: false
                }).delay(d + (f + 1) * 350).animate({
                    left: e.data("_left") + "px",
                    opacity: e.data("_op")
                }, {
                    duration: 500,
                    queue: true
                });
                f++
            }
            if (e.hasClass("fade")) {
                e.animate({
                    opacity: 0
                }, {
                    duration: 0,
                    queue: false
                }).delay(d + (f + 1) * 350).animate({
                    opacity: e.data("_op")
                }, {
                    duration: 500,
                    queue: true
                });
                f++
            }
        })
    }
    function o(c, d) {
        d.cd = 0;
        if (a.browser.msie) c.find(".kenburn_thumb_container #thumbmask .thumbsslide").cssAnimate({
            left: "0px"
        }, {
            duration: 300,
            queue: false
        });
        else c.find(".kenburn_thumb_container #thumbmask .thumbsslide").animate({
            left: "0px"
        }, {
            duration: 300,
            queue: false
        });
        var e = c.find(".kenburn_thumb_container #thumbmask");
        var f = e.find(".thumbsslide");
        var g = c.find(".slide_mainmask");
        var g = c.find(".slide_mainmask");
        d.timerinterval = setInterval(function () {
            if (d.loaded == 1) {
                var e = c.data("currentSlide");
                var h = c.data("currentThumb");
                if (!g.hasClass("overme") && !g.hasClass("videoon")) {
                    d.cd = d.cd + 1;
                    if (d.cd == d.timer) {
                        d.cd = 0;
                        if (e != b) {
                            if (e.index() < d.maxitem - 1) {
                                var i = c.find("ul li:eq(" + (e.index() + 1) + ")");
                                m(e, i, c, d);
                                if (d.thumbStyle != "none") {
                                    var j = 0 - parseInt(h.parent().css("left"), 0);
                                    if (f != null && f != b) {
                                        f.css({
                                            position: "absolute"
                                        });
                                        if (Math.abs(j) <= c.data("thumbnailmaxdif")) {
                                            if (a.browser.msie) f.animate({
                                                left: j + "px"
                                            }, {
                                                duration: 300,
                                                queue: false
                                            });
                                            else f.cssAnimate({
                                                left: j + "px"
                                            }, {
                                                duration: 300,
                                                queue: false
                                            })
                                        } else {
                                            j = 0 - c.data("thumbnailmaxdif");
                                            if (a.browser.msie) f.animate({
                                                left: j + "px"
                                            }, {
                                                duration: 300,
                                                queue: false
                                            });
                                            else f.cssAnimate({
                                                left: j + "px"
                                            }, {
                                                duration: 300,
                                                queue: false
                                            })
                                        }
                                    }
                                }
                            } else {
                                m(e, c.find("ul li:first"), c, d);
                                if (f != null && f != b) {
                                    if (a.browser.msie) f.animate({
                                        left: "0px"
                                    }, {
                                        duration: 300,
                                        queue: false
                                    });
                                    else f.cssAnimate({
                                        left: "0px"
                                    }, {
                                        duration: 300,
                                        queue: false
                                    })
                                }
                            }
                        }
                    }
                }
            }
        }, 100)
    }
    function n() {
        var a = document.createElement("canvas");
        return !!(a.getContext && a.getContext("2d"))
    }
    function m(c, d, e, f) {
        var g = false;
        e.find("ul >li").each(function (b) {
            var e = a(this);
            clearInterval(e.data("interval"));
            if (e.index() != c.index() && e.index() != d.index()) {
                e.css({
                    display: "none",
                    position: "absolute",
                    left: "0px",
                    "z-index": "994"
                })
            }
        });
        var h = e.find(".slide_mainmask .video_kenburn");
        setTimeout(function () {
            h.remove()
        }, 600);
        var i = e.find(".slide_mainmask");
        i.removeClass("videoon");
        c.css({
            position: "absolute",
            top: "0px",
            left: "0px",
            "z-index": "900"
        });
        d.css({
            position: "absolute",
            top: "0px",
            left: "0px",
            "z-index": "1000"
        });
        d.css({
            display: "block"
        });
        var j = d.find("img:first");
        var k = d.find(".bw-main-image");
        if (d.data("ww") == b) {
            var m = d.find("img").width();
            var o = d.find("img").height();
            if (m != 0) {
                if (j.width() > 0 && j.width() < f.width) {
                    var q = f.width / m;
                    m = m * q;
                    o = o * q
                }
                if (j.height() > 0 && j.height() < f.height) {
                    var q = f.height / o;
                    m = m * q;
                    o = o * q
                }
                d.data("ww", m);
                d.data("hh", o)
            }
        } else {
            var m = d.data("ww");
            var o = d.data("hh")
        }
        var r = 0;
        var s = 0;
        var t = 0;
        var u = 0;
        var v = d.data("startalign");
        var w = d.data("endalign");
        if (v == "random") v = l();
        if (w == "random") w = l();
        if (v != b) {
            var x = v;
            var y = x.split(",")[0];
            var z = x.split(",")[1];
            if (y == "left") s = 0;
            else if (y == "center") s = f.width / 2 - m / 2;
            else if (y == "right") s = 0 - Math.abs(f.width - m);
            if (z == "top") r = 0;
            else if (z == "center") r = f.height / 2 - o / 2;
            else if (z == "bottom") r = 0 - Math.abs(f.height - o)
        }
        if (w != b) {
            var A = w;
            var y = A.split(",")[0];
            var z = A.split(",")[1];
            if (y == "left") u = 0;
            else if (y == "center") u = f.width / 2 - m / 2;
            else if (y == "right") u = 0 - Math.abs(f.width - m);
            if (z == "top") t = 0;
            else if (z == "center") t = f.height / 2 - o / 2;
            else if (z == "bottom") t = 0 - Math.abs(f.height - o)
        }
        clearInterval(c.data("interval"));
        j.parent().find(".canvas-now").remove();
        j.parent().find(".canvas-now-bw").remove();
        var B = n();
        var C = a.browser.msie && a.browser.version < 9;
        if (C) B = false;
        var D = d.find(".creative_layer div").outerWidth();
        var E = d.find(".creative_layer div").outerHeight();
        var F = d.find(".creative_layer div").position().top;
        var G = d.find(".creative_layer div").position().left;
        if (B) {
            j.parent().append('<div style="position:absolute;z-index:1" class="canvas-now"><canvas class="canvas-now-canvas" width="' + m + '" height="' + o + '"></canvas></div>');
            j.css({
                display: "none"
            });
            var H = j.parent().find(".canvas-now-canvas")[0];
            var I = H.getContext("2d");
            if (k.length > 0) {
                j.parent().append('<div style="position:absolute;z-index:20" class="canvas-now-bw"><canvas class="canvas-now-canvas-bw" width="' + m + '" height="' + o + '"></canvas></div>');
                k.css({
                    display: "none"
                });
                var J = j.parent().find(".canvas-now-canvas-bw")[0];
                j.parent().find(".canvas-now-bw").wrap('<div class="blurwrap" style="width:' + D + "px;height:" + E + "px;position:absolute;top:" + F + "px;left:" + G + 'px;overflow:hidden"></div>');
                var K = J.getContext("2d")
            }
        } else {
            k.wrap('<div class="blurwrap" style="width:' + D + "px;height:" + E + "px;position:absolute;top:" + F + "px;left:" + G + 'px;overflow:hidden;"></div>')
        }
        var L = d.data("panduration");
        var M = 0;
        var N = 0;
        var O = m;
        var P = o;
        var Q = d.data("zoomfact");
        var R = d.data("zoom");
        if (R == "random") {
            if (Math.floor(Math.random() * 2) == 0) R = "out";
            else R = "in"
        }
        if (d.data("zoomfact") == "random") {
            Q = Math.random() * 1 + 1
        }
        if (R == "out") {
            O = O * Q;
            P = P * Q;
            s = s * Q;
            r = r * Q
        }
        var S = (u - s) / (L * 25);
        var T = (t - r) / (L * 25);
        var U = 1 / (L * 25);
        M = m * Q / (L * 25) / 10;
        N = o * Q / (L * 25) / 10;
        if (R == "out") {
            M = M * -1;
            N = N * -1
        }
        if (d.data("endalign") != b) {
            var A = d.data("endalign");
            var y = A.split(",")[0];
            var z = A.split(",")[1];
            if (y == "left") S = S + M / 4;
            else if (y == "center") S = S - M / 2;
            else if (y == "right") S = S - M;
            if (z == "top") T = T + N / 4;
            else if (z == "center") T = T - N / 2;
            else if (z == "bottom") T = T - N
        }
        if (f.timer > parseInt(d.data("panduration"), 0) * 10) {
            f.timer = parseInt(d.data("panduration"), 0) * 10
        } else {
            f.timer = f.savedTimer * 10
        }
        j.parent().find(".canvas-now-bw").css({
            opacity: 0
        });
        if (B) {
            I.drawImage(j[0], s, r, O, P);
            if (k.length > 0) {
                K.drawImage(k[0], s, r, O, P);
                setTimeout(function () {
                    j.parent().find(".canvas-now-bw").cssAnimate({
                        opacity: "1.0"
                    }, {
                        duration: 1e3,
                        queue: false
                    })
                }, 1200)
            }
        }
        j.cssStop(true, true);
        k.cssStop(true, true);
        j.css({
            position: "absolute",
            left: s + "px",
            top: r + "px",
            width: O + "px",
            height: P + "px",
            opacity: 1
        });
        k.css({
            position: "absolute",
            left: s + "px",
            top: r + "px",
            width: O + "px",
            height: P + "px",
            opacity: 1
        });
        var V = s;
        var W = r;
        var X = O;
        step = 0;
        if (!B) {
            setTimeout(function () {}, 500)
        }
        d.data("interval", setInterval(function () {
            if (!e.parent().parent().find(".kenburn_thumb_container #thumbmask").hasClass("overme") && !e.find(".slide_mainmask").hasClass("overme") && !e.find(".slide_mainmask").hasClass("videoon")) {
                O = O + M;
                P = P + N;
                s = s + S;
                r = r + T;
                if (s > 0) s = 0;
                if (r > 0) r = 0;
                if (s < f.width - O) s = f.width - O;
                if (r < f.height - P) r = f.height - P;
                if (B) {
                    I.drawImage(j[0], s, r, O, P);
                    if (k.length > 0) K.drawImage(k[0], s - G, r - F, O, P)
                } else {
                    var a = O / X;
                    var b = s - V;
                    var c = r - W;
                    var d = s - V - G;
                    var g = r - W - F;
                    if (jQuery.browser.msie) {
                        j.css({
                            filter: 'progid:DXImageTransform.Microsoft.Matrix(FilterType="bilinear",M11=' + a + ",M12=0,M21=0,M22=" + a + ",Dx=" + b + ",Dy=" + c + ")"
                        });
                        j.css({
                            "-ms-filter": 'progid:DXImageTransform.Microsoft.Matrix(FilterType="bilinear",M11=' + a + ",M12=0,M21=0,M22=" + a + ",Dx=" + b + ",Dy=" + c + ")"
                        });
                        k.remove()
                    } else {
                        j.cssAnimate({
                            left: s + "px",
                            top: r + "px",
                            width: O + "px",
                            height: P + "px"
                        }, {
                            duration: 38,
                            easing: "linear",
                            queue: false
                        });
                        if (k.length > 0) {
                            k.cssAnimate({
                                left: s + "px",
                                top: r + "px",
                                width: O + "px",
                                height: P + "px"
                            }, {
                                duration: 38,
                                easing: "linear",
                                queue: false
                            })
                        }
                    }
                }
            }
        }, 40));
        f.aktKenInterval = d.data("interval");
        if (d.data("transition") == "slide") {
            if (g == false) {
                var Y = true;
                if (c.index() > d.index()) Y = false;
                if (Y) {
                    h.animate({
                        left: 0 - f.width + "px"
                    }, {
                        duration: 600,
                        queue: false
                    });
                    d.find(".slide_container").stop(true, true);
                    d.find(".slide_container").css({
                        opacity: "1.0",
                        left: f.width + "px"
                    });
                    c.find(".slide_container").animate({
                        left: 0 - f.width + "px"
                    }, {
                        duration: 600,
                        queue: false
                    });
                    d.find(".slide_container").animate({
                        left: "0px",
                        top: "0px",
                        opacity: "1.0"
                    }, {
                        duration: 600,
                        queue: false
                    })
                } else {
                    h.animate({
                        left: f.width + "px"
                    }, {
                        duration: 600,
                        queue: false
                    });
                    d.find(".slide_container").stop(true, true);
                    d.find(".slide_container").css({
                        opacity: "1.0",
                        position: "absolute",
                        top: "0px",
                        left: 0 - f.width + "px"
                    });
                    c.find(".slide_container").animate({
                        left: f.width + "px"
                    }, {
                        duration: 600,
                        queue: false
                    });
                    d.find(".slide_container").animate({
                        left: "0px",
                        top: "0px",
                        opacity: "1.0"
                    }, {
                        duration: 600,
                        queue: false
                    })
                }
            }
        } else {
            c.find(".slide_container").stop(true, true);
            c.find(".slide_container").animate({
                opacity: "0"
            }, {
                duration: 600,
                queue: false
            });
            h.animate({
                opacity: "0.0"
            }, {
                duration: 600,
                queue: false
            });
            d.find(".slide_container").stop(true, true);
            d.find(".slide_container").css({
                opacity: "0.0",
                left: "0px",
                top: "0px"
            });
            d.find(".slide_container").animate({
                opacity: "1.0"
            }, {
                duration: 600,
                queue: false
            })
        }
        if (e.find(".kenburn_thumb_container").length > 0) {
            var Z = e.find(".kenburn_thumb_container #thumbmask .thumbsslide #thumb" + d.index());
            e.find(".kenburn_thumb_container #thumbmask .thumbsslide #thumb" + c.index()).each(function (b) {
                var c = a(this);
                if (c.attr("id") != "thumb" + d.index()) {
                    c.removeClass("selected");
                    c.stop();
                    c.find(".overlay").animate({
                        opacity: .75
                    }, {
                        duration: 300,
                        queue: false
                    })
                }
            });
            Z.addClass("selected");
            Z.find(".overlay").animate({
                opacity: 0
            }, {
                duration: 300,
                queue: false
            });
            e.data("currentThumb", Z);
            f.currentThumb = Z.index();
            if (Z.position().left + f.thumbWidth == f.thumbmaxwidth && Z.index() != f.maxitem - 1) {
                Z.parent().find(".kenburn-thumbs").each(function () {
                    var b = a(this);
                    b.cssAnimate({
                        left: b.position().left - f.thumbWidth + "px"
                    }, {
                        duration: 300,
                        queue: false
                    })
                })
            }
            if (Z.position().left == 0 && Z.index() > 0) {
                Z.parent().find(".kenburn-thumbs").each(function () {
                    var b = a(this);
                    b.cssAnimate({
                        left: b.position().left + f.thumbWidth + "px"
                    }, {
                        duration: 300,
                        queue: false
                    })
                })
            }
            if (Z.index() == 0) {
                Z.parent().find(".kenburn-thumbs").each(function () {
                    var b = a(this);
                    b.cssAnimate({
                        left: 0 + b.index() * f.thumbWidth + "px"
                    }, {
                        duration: 300,
                        queue: false
                    })
                })
            }
        }
        if (e.find(".minithumb").length > 0) {
            var Z = e.find("#minithumb" + d.index());
            e.find(".minithumb").removeClass("selected");
            Z.addClass("selected");
            if (f.thumbStyle != "both") e.data("currentThumb", Z);
            f.currentThumb = Z.index()
        }
        e.data("currentSlide", d);
        p(d, 100, e);
        f.cd = 0
    }
    function l() {
        var a = "";
        var b = Math.floor(Math.random() * 3);
        var c = Math.floor(Math.random() * 3);
        if (b == 0) a = "left";
        else if (b == 1) a = "center";
        else a = "right";
        if (c == 0) a = a + ",top";
        else if (c == 1) a = a + ",center";
        else a = a + ",bottom";
        return a
    }
    function k(b, c) {
        var d = b.find(".slide_mainmask");
        d.data("maxwidth", c.width + c.padleft + c.padright);
        d.data("maxheight", c.height + c.padtop + c.padbottom);
        d.data("pdistance", c.parallaxX);
        d.data("pdistancey", c.parallaxY);
        d.data("cdistance", c.captionParallaxX);
        d.data("cdistancey", c.captionParallaxY);
        d.data("opt", c);
        var e = d.parent().data("currentSlide");
        var f = d.find(".parallax_container");
        var g = e.find(".layer_container");
        d.mouseenter(function (d) {
            var e = a(this);
            var f = e.parent().find(".kenburn_thumb_container #thumbmask");
            var g = e.parent().data("currentSlide");
            var h = g.find(".parallax_container");
            var i = g.find(".layer_container");
            e.addClass("overon");
            clearTimeout(c.hideThumb);
            b.find(".kenburn_thumb_container").animate({
                opacity: 1
            }, {
                duration: 300,
                queue: false
            })
        });
        d.mouseleave(function (d) {
            var e = a(this);
            var f = e.parent().data("currentSlide");
            var g = f.find(".parallax_container");
            var h = f.find(".layer_container");
            e.removeClass("overme");
            e.removeClass("overon");
            var i = b.find(".kenburn_thumb_container");
            setTimeout(function () {
                if (c.hideThumbs == "on" && !i.hasClass("overme") && !a("body").hasClass("tp_showthumbsalways")) {
                    b.find(".kenburn_thumb_container").animate({
                        opacity: 0
                    }, {
                        duration: 300,
                        queue: false
                    })
                }
            }, 10)
        });
        d.mousemove(function (d) {
            var e = a(this);
            if (c.pauseOnRollOverMain != "off") e.addClass("overme");
            var f = e.parent().find(".kenburn_thumb_container #thumbmask");
            b.find(".kenburn_thumb_container").css({
                display: "block"
            });
            if (!f.hasClass("overme") && !e.hasClass("overon")) {
                var g = e.parent().data("currentSlide");
                var h = g.find(".parallax_container");
                var i = g.find(".layer_container")
            } else {
                setTimeout(function () {
                    e.removeClass("overon")
                }, 100)
            }
        })
    }
    function j(c, d) {
        if (a.browser.msie) {
            c.find(".kenburn-preloader").animate({
                opacity: "0.0"
            }, {
                duration: 300,
                queue: false
            })
        } else {
            c.find(".kenburn-preloader").cssAnimate({
                opacity: "0.0"
            }, {
                duration: 300,
                queue: false
            })
        }
        setTimeout(function () {
            c.find(".kenburn-preloader").remove()
        }, 300);
        if (d.lastThumb == b) d.lastThumb = 0;
        var e = c.find("ul li:eq(" + d.lastThumb + ")");
        m(e, e, c, d);
        k(c, d);
        d.loaded = 1;
        if (d.videoWasOn == 1) c.parent().find(".kenburn-video-button").click();
        d.videoWasOn = -1
    }
    function i(b, c) {
        var d = b.find("ul >li").length;
        var e = c.width + c.padleft + c.padright;
        b.append('<div class="thumbbuttons"><div class="grainme"><div class="leftarrow"></div><div class="thumbs"></div><div class="rightarrow"></div></div></div>');
        var f = b.find(".leftarrow");
        var g = b.find(".rightarrow");
        g.click(function () {
            var a = b.data("currentSlide");
            if (a.index() < c.maxitem - 1) {
                var d = b.find("ul li:eq(" + (a.index() + 1) + ")")
            } else {
                var d = b.find("ul li:first")
            }
            m(a, d, b, c)
        });
        f.click(function () {
            var a = b.data("currentSlide");
            if (a.index() > 0) {
                var d = b.find("ul li:eq(" + (a.index() - 1) + ")")
            } else {
                var d = b.find("ul li:eq(" + (c.maxitem - 1) + ")")
            }
            m(a, d, b, c)
        });
        var h = b.find(".thumbs");
        b.find("ul >li").each(function (d) {
            var e = a(this);
            var f = a('<div class="minithumb" id="minithumb' + d + '"></div>');
            f.data("id", d);
            h.append(f);
            f.click(function () {
                var d = a(this);
                if (!d.hasClass("selected")) {
                    var e = b.find("ul li:eq(" + d.data("id") + ")");
                    m(b.data("currentSlide"), e, b, c)
                }
            })
        });
        h.waitForImages(function () {
            var a = parseInt(h.parent().parent().css("top"), 0);
            h.parent().parent().css({
                top: a + c.bulletYOffset + "px",
                left: e / 2 - parseInt(h.parent().width(), 0) / 2 + c.bulletXOffset + "px"
            })
        })
    }
    function h(b, c) {
        var d = b.find("ul >li").length;
        var e = c.thumbAmount * c.thumbWidth;
        c.thumbmaxwidth = e;
        var f = c.thumbHeight;
        var g = e;
        var h = f;
        var i = c.width + c.padleft + c.padright;
        var j = Math.round(i / 2 - g / 2);
        var k = d * c.thumbWidth;
        b.append('<div class="kenburn_thumb_container" style="position:absolute;left:' + j + "px;top:" + (1 + c.height + c.padtop + c.padbottom) + "px;width:" + (g + 2) + "px;height:" + (h + 2) + 'px;"></div>');
        var l = b.find(".kenburn_thumb_container");
        if (c.thumbAmount == 0) l.css({
            visibility: "hidden"
        });
        l.append('<div class="kenburn_thumb_container_bg" style="position:absolute;left:1px;top:0px;width:' + g + "px;height:" + h + 'px"></div>');
        l.append('<div id="thumbmask" style="overflow:hidden;position:absolute;top:0px;left:1px; width:' + e + "px;\theight:" + c.thumbHeight + 'px;overflow:hidden;"></div>');
        var n = l.find("#thumbmask");
        n.append('<div class="thumbsslide" style="width:' + k + 'px"></div>');
        var o = n.find(".thumbsslide");
        l.hover(function () {
            a(this).addClass("overme");
            l.animate({
                opacity: 1
            }, {
                duration: 300,
                queue: false
            })
        }, function () {
            a(this).removeClass("overme");
            var c = b.find(".slide_mainmask");
            setTimeout(function () {
                if (!c.hasClass("overon") && !a("body").hasClass("tp_showthumbsalways")) {
                    l.animate({
                        opacity: 0
                    }, {
                        duration: 300,
                        queue: false
                    })
                }
            }, 10)
        });
        b.find("ul >li").each(function (e) {
            var f = a(this);
            var g = f.find("img:first");
            var h = g.data("thumb");
            var i = f.find(".slide_container").data("video") == 1;
            var j = a('<div class="kenburn-thumbs" id="thumb' + e + '" style="cursor:pointer;position:absolute;top:0px;left:' + e * c.thumbWidth + "px;width:" + c.thumbWidth + "px;height:" + c.thumbHeight + "px;background:url(" + h + ');"></div>');
            j.data("id", e);
            var k = a('<div class="overlay"></div>');
            j.append(k);
            if (e == d) j.css({
                "margin-right": "0px"
            });
            o.append(j);
            if (e == c.lastThumb) {
                j.addClass("selected");
                j.find(".overlay").css({
                    opacity: 0
                })
            } else {
                j.find(".overlay").css({
                    opacity: .75
                });
                j.removeClass("selecte")
            }
            if (i && c.thumbVideoIcon == "on") {
                var l = a('<div class="video"></div>');
                j.append(l);
                j.find(".video").css({
                    position: "absolute",
                    top: c.thumbHeight / 2 + "px",
                    left: c.thumbWidth / 2 + "px",
                    "z-index": "1000"
                })
            }
            var n = o.find("#thumb" + e);
            n.hover(function () {
                var b = a(this);
                b.stop();
                b.find(".overlay").animate({
                    opacity: 0
                }, {
                    duration: 300,
                    queue: false
                })
            }, function () {
                var b = a(this);
                b.stop();
                if (!b.hasClass("selected")) b.find(".overlay").animate({
                    opacity: .75
                }, {
                    duration: 300,
                    queue: false
                })
            });
            n.click(function () {
                var e = a(this);
                if (e.position().left + c.thumbWidth == c.thumbmaxwidth && e.index() != d - 1) {
                    e.parent().find(".kenburn-thumbs").each(function () {
                        var b = a(this);
                        b.cssAnimate({
                            left: b.position().left - c.thumbWidth + "px"
                        }, {
                            duration: 300,
                            queue: false
                        })
                    })
                }
                if (e.position().left == 0 && e.index() > 0) {
                    e.parent().find(".kenburn-thumbs").each(function () {
                        var b = a(this);
                        b.cssAnimate({
                            left: b.position().left + c.thumbWidth + "px"
                        }, {
                            duration: 300,
                            queue: false
                        })
                    })
                }
                if (!e.hasClass("selected")) {
                    var f = b.find("ul li:eq(" + e.data("id") + ")");
                    m(b.data("currentSlide"), f, b, c)
                }
            })
        });
        c.thumbVertical = "bottom";
        if (c.thumbVertical == "bottom") {
            l.css({
                "z-index": 1e3,
                top: c.thumbYOffset + (c.height - c.thumbHeight) + "px"
            })
        } else {
            if (c.thumbVertical == "center") {
                l.css({
                    "z-index": 1e3,
                    top: c.thumbYOffset + (c.height / 2 - c.thumbHeight / 2) + "px"
                })
            } else {
                l.css({
                    "z-index": 1e3,
                    top: c.thumbYOffset + "px"
                })
            }
        }
        if (c.thumbHorizontal == "left") {
            l.css({
                left: c.thumbXOffset + "px"
            })
        } else {
            if (c.thumbHorizontal == "right") {
                l.css({
                    left: c.thumbXOffset + (c.width - e) + "px"
                })
            } else {
                l.css({
                    left: c.thumbXOffset + l.position().left + "px"
                })
            }
        }
    }
    function g(a, b) {
        a.append('<div class="kenburn-bg" style="z-index:7;position:absolute;top:0px;left:0px;width:' + b.width + "px;height:" + b.height + 'px;overflow:hidden"></div>');
        var c = a.find(".kenburn-bg");
        b.padtop = parseInt(c.css("paddingTop"), 0);
        b.padleft = parseInt(c.css("paddingLeft"), 0);
        b.padright = parseInt(c.css("paddingRight"), 0);
        b.padbottom = parseInt(c.css("paddingBottom"), 0)
    }
    function f(c, d, e) {
		
        c.find("ul >li").each(function (f) {
            if (f == e) { 
                var g = a(this);
                g.find(".creative_layer").wrap('<div class="layer_container layer'+ f +'" style="position:absolute;left:0px;top:0px;width:' + d.width + "px;height:" + d.height + 'px"></div>');
				//i=i+1;
                c.removeClass("kb-minisize").removeClass("kb-halfsize").removeClass("kb-fullsize");
                if (a(window).width() <= 480) c.addClass("kb-minisize");
                else if (a(window).width() <= 767) c.addClass("kb-smallsize");
                else if (a(window).width() <= 959) c.addClass("kb-mediumsize");
                else if (a(window).width() > 959) c.addClass("kb-fullsize");
                g.wrapInner('<div class="slide_container" style="z-index:10;position:absolute;top:0px;left:0px;width:' + d.width + "px;height:" + d.height + 'px;overflow:hidden"><div class="parallax_container" style="position:absolute;top:0pxleft:0px"><div class="kb_container"></div></div></div>');
                var h = a.browser.msie && a.browser.version < 9;
                if (g.find("img:first").data("bw") != b && g.find("img:first").data("bw").length > 0 && !h) g.find(".kb_container").append('<img class="bw-main-image" src="' + g.find("img:first").data("bw") + '" style="position:absolute;top:0px;left:0px">');
                g.find("img:first").attr("src", g.find("img:first").data("src"));
                g.find(".slide_container").css({
                    opacity: "0.0"
                });
                g.find(".slide_container .parallax_container .kb_container .video_kenburner").each(function () {
                    var b = a(this);
                    b.closest(".slide_container").append('<div class="kenburn-video-overlay"></div>');
                    b.closest(".slide_container").append('<div class="kenburn-video-button"></div>');
                    b.closest(".slide_container").data("video", 1);
                    var e = b.closest(".slide_container").parent().find(".kenburn-video-button");
                    var f = b.closest(".slide_container").parent().find(".kenburn-video-overlay");
                    var g = parseInt(e.css("width"), 0);
                    var h = parseInt(e.css("height"), 0);
                    var i = parseInt(b.closest(".slide_container").css("width"), 0);
                    var j = parseInt(b.closest(".slide_container").css("height"), 0);
                    e.css({
                        left: i / 2 - g / 2 + "px",
                        top: j / 2 - h / 2 + "px"
                    });
                    e.data("top", c);
                    e.data("url", b.html());
                    b.remove();
                    f.data("origopa", f.css("opacity"));
                    e.hover(function () {
                        var b = a(this);
                        var c = b.parent().find(".kenburn-video-overlay");
                        if (a.browser.msie) c.animate({
                            opacity: "0.5"
                        }, {
                            duration: 100
                        });
                        else c.cssAnimate({
                            opacity: "0.5"
                        }, {
                            duration: 100
                        });
                        if (a.browser.version > 7 && a.browser.version < 9) {
                            c.css({
                                display: "block"
                            })
                        }
                    }, function () {
                        var b = a(this);
                        var c = b.parent().find(".kenburn-video-overlay");
                        if (a.browser.msie) c.animate({
                            opacity: c.data("origopa")
                        }, {
                            duration: 100
                        });
                        else c.cssAnimate({
                            opacity: c.data("origopa")
                        }, {
                            duration: 100
                        });
                        if (a.browser.msie && a.browser.version > 7 && a.browser.version < 9) {
                            c.css({
                                display: "none"
                            })
                        }
                    });
                    e.click(function () {
                        var b = a(this);
                        var c = b.data("top");
                        var e = c.find(".slide_mainmask");
                        e.addClass("videoon");
                        c.data("currentSlide").animate({
                            top: d.height + "px"
                        }, {
                            duration: 500,
                            queue: false
                        });
                        c.find(".slide_mainmask").append('<div class="video_kenburn" style="z-index:9999;width:' + d.width + "px;height:" + d.height + 'px">' + b.data("url") + "</div>");
                        var f = c.find(".slide_mainmask .video_kenburn");
                        f.css({
                            top: 0 - d.height + "px"
                        });
                        if (d.videoWasOn == 1) f.animate({
                            top: "0px"
                        }, {
                            duration: 0,
                            queue: false
                        });
                        else f.animate({
                            top: "0px"
                        }, {
                            duration: 500,
                            queue: false
                        });
                        f.find("* .close").click(function () {
                            var a = c.find(".slide_mainmask");
                            a.removeClass("videoon");
                            c.data("currentSlide").animate({
                                top: "0px"
                            }, {
                                duration: 600,
                                queue: false
                            });
                            f.animate({
                                top: 0 - d.height + "px"
                            }, {
                                duration: 600,
                                queue: false
                            });
                            setTimeout(function () {
                                f.remove()
                            }, 600)
                        })
                    })
                }) 
            }
        })
    }
    function e(a, b) {
        for (var c = b.preloadedSlides; c < b.maxitem; c++) {
            f(a, b, c)
        }
    }
    function d(b, c) {
        b.find("iframe").attr("frameborder", 0);
        b.find("ul").wrap('<div class="slide_mainmask" style="z-index:10;position:absolute;top:' + (c.padtop + 1) + "px;left:" + (c.padleft + 1) + "px;width:" + c.width + "px;height:" + c.height + 'px;overflow:hidden"></div>');
        b.find("ul .slide_mainmask").css({
            opacity: "0.0"
        });
        c.maxitem = 0;
        b.find("ul >li").each(function (b) {
            c.maxitem = c.maxitem + 1;
            var d = a(this);
            var e = d.find("img:first");
            e.data("src", e.attr("src"));
            e.attr("src", "")
        });
        for (var d = 0; d < c.preloadedSlides; d++) {
            f(b, c, d)
        }
    }
    function c(c, f) {
        if (f.debug === "on") a("body").append('<div class="khinfo" style="background:#fff;color:#000;width:300px;height:250px;position:fixed;left:10px;top:10px;"></div>');
        c.append('<div class="kenburn-preloader"></div>');
        a("body").find(".khinfo").html("Start Slider");
        g(c, f);
        a("body").find(".khinfo").html("Prepared Container");
        d(c, f);
        a("body").find(".khinfo").html("Prepared Preloaded Slides");
        a("body").find(".khinfo").html("Waiting for Images...");
        f.loadedImages = 0;
        c.waitForImages(function () {
            a("body").find(".khinfo").html("Preloaded Images has been loaded");
            f.waitForWF = setInterval(function () {
                a("body").find(".khinfo").html("Waiting for Google Fonts");
                if (a("body").data("googlefonts") != b && a("body").data("googlefonts") == "loaded") {
                    f.lastThumb = f.currentThumb;
                    if (f.thumbStyle == "image" || f.thumbStyle == "both" || f.thumbStyle == "thumb") h(c, f);
                    if (f.thumbStyle == "bullet" || f.thumbStyle == "both") i(c, f);
                    a("body").find(".khinfo").html("Google Fonts are here");
                    clearInterval(f.waitForWF);
                    j(c, f);
                    a("body").find(".khinfo").html("Rotation Started");
                    e(c, f);
                    if (f.thumbStyle == "both") c.find(".thumbbuttons").css({
                        visibility: "hidden"
                    });
                    c.css({
                        "background-color": "transparent"
                    })
                }
            }, 10)
        }, function () {
            a("body").find(".khinfo").html(f.loadedImages + ". Image has been Loaded");
            f.loadedImages = f.loadedImages + 1
        });
        o(c, f);
        if (f.touchenabled == "on") c.swipe({
            data: c,
            swipeLeft: function () {
                var a = c.data("currentSlide");
                if (a.index() < f.maxitem - 1) {
                    var b = c.find("ul li:eq(" + (a.index() + 1) + ")")
                } else {
                    var b = c.find("ul li:first")
                }
                m(a, b, c, f)
            },
            swipeRight: function () {
                var a = c.data("currentSlide");
                if (a.index() > 0) {
                    var b = c.find("ul li:eq(" + (a.index() - 1) + ")")
                } else {
                    var b = c.find("ul li:eq(" + (f.maxitem - 1) + ")")
                }
                m(a, b, c, f)
            },
            allowPageScroll: "auto"
        })
    }
    a.fn.extend({
        kenburn: function (d) {
            var e = {
                width: 876,
                height: 300,
                responsiveWidths: [800, 500, 200],
                responsiveHeights: [300, 300, 300],
                thumbWidth: 50,
                thumbHeight: 50,
                thumbAmount: 6,
                thumbStyle: "bullet",
                thumbXOffset: 0,
                thumbYOffsetm: 0,
                bulletXOffset: 0,
                bulletYOffset: 0,
                shadow: "true",
                timer: 2e3,
                touchenabled: "on",
                pauseOnRollOverThumbs: "off",
                pauseOnRollOverMain: "on",
                preloadedSlides: 50,
                googleFonts: "PT+Sans+Narrow:400,700",
                googleFontJS: "http://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js",
                debug: "no",
                rescaleBGColor: "#333"
            };
            d = a.extend({}, a.fn.kenburn.defaults, d);
            WebFontConfig = {
                google: {
                    families: [d.googleFonts]
                },
                active: function () {
                    jQuery("body").data("googlefonts", "loaded")
                },
                inactive: function () {
                    jQuery("body").data("googlefonts", "loaded")
                }
            };
            return this.each(function () {
                var e = d;
                if (e.googleFonts != b && e.googleFonts.length > 0) {
                    var f = document.createElement("script");
                    f.src = e.googleFontJS;
                    f.type = "text/javascript";
                    f.async = "true";
                    var g = document.getElementsByTagName("script")[0];
                    g.parentNode.insertBefore(f, g);
                    jQuery("body").data("googlefonts", "wait")
                } else {
                    jQuery("body").data("googlefonts", "loaded")
                }
                e.savedTimer = e.timer;
                var h = a(this);
                e.width = h.width() - 10;
                e.height = h.height() - 10;
                var bannerId = h.attr("id");
                h.wrap('<div class="responsiveholder"></div>');
                /*
                alert( a("#"+bannerId).parents(".responsiveholder").html() );
                */
                //e.fullHTML = a("body").find(".responsiveholder").html();
                e.fullHTML = a("#"+bannerId).parents(".responsiveholder").html();
                a("#"+bannerId).parents(".responsiveholder").attr("id", "responsive-holder"+bannerId);
                c(h, e);
                e.videoWasOn = -1;
                var i = h.css("minWidth");
                var j = h.css("maxWidth");
                var k = true;
                if (i == j || j == "none") k = false;
                if (k) a(window).resize(function () {
                    if (h.find(".videoon").length > 0 && e.videoWasOn == -1) {
                        e.videoWasOn = 1
                    } else {
                        if (e.videoWasOn == -1) e.videoWasOn = 0
                    }
                    clearInterval(e.aktKenInterval);
                    clearInterval(e.timerinterval);
                    clearInterval(e.waitForWF);
                    clearTimeout(e.resetAll);
                    e.width = h.width() - 10;
                    e.height = h.height() - 10;
                    e.preloadedSlides = 200;
                    h.empty();
                    h.remove();
                    /*
                    a("body").find(".responsiveholder").append(e.fullHTML);
                    */
                    a("body").find("#responsive-holder"+bannerId).append(e.fullHTML);
                    h = a("body").find("#responsive-holder"+bannerId).find("div:first");

                    e.resetAll = setTimeout(function () {
                        c(h, e)
                    }, 200)
                })
            })
        }
    })
})(jQuery)