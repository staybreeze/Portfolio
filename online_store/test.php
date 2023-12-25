<!DOCTYPE html>
<!--[if IE 9 ]> <html lang="zh-TW" class="ie9 loading-site no-js bg-fill"> <![endif]-->
<!--[if IE 8 ]> <html lang="zh-TW" class="ie8 loading-site no-js bg-fill"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="zh-TW" class="loading-site no-js bg-fill">
    <!--<![endif]-->
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <link rel="profile" href="http://gmpg.org/xfn/11"/>
        <link rel="dns-prefetch" href="https://imgxcdn.dogcatstar.com/">
        <link rel="dns-prefetch" href="https://static.xx.fbcdn.net">
        <link rel="dns-prefetch" href="https://www.facebook.com">
        <link rel="dns-prefetch" href="https://www.google-analytics.com">
        <script data-cfasync="false" data-no-defer="1">
            var ewww_webp_supported = !1;
            function check_webp_feature(A, e) {
                var w;
                e = void 0 !== e ? e : function() {}
                ,
                ewww_webp_supported ? e(ewww_webp_supported) : ((w = new Image).onload = function() {
                    ewww_webp_supported = 0 < w.width && 0 < w.height,
                    e && e(ewww_webp_supported)
                }
                ,
                w.onerror = function() {
                    e && e(!1)
                }
                ,
                w.src = "data:image/webp;base64," + {
                    alpha: "UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA=="
                }[A])
            }
            check_webp_feature("alpha");
        </script>
        <script data-cfasync="false" data-no-defer="1">
            var Arrive = function(c, w) {
                "use strict";
                if (c.MutationObserver && "undefined" != typeof HTMLElement) {
                    var r, a = 0, u = (r = HTMLElement.prototype.matches || HTMLElement.prototype.webkitMatchesSelector || HTMLElement.prototype.mozMatchesSelector || HTMLElement.prototype.msMatchesSelector,
                    {
                        matchesSelector: function(e, t) {
                            return e instanceof HTMLElement && r.call(e, t)
                        },
                        addMethod: function(e, t, r) {
                            var a = e[t];
                            e[t] = function() {
                                return r.length == arguments.length ? r.apply(this, arguments) : "function" == typeof a ? a.apply(this, arguments) : void 0
                            }
                        },
                        callCallbacks: function(e, t) {
                            t && t.options.onceOnly && 1 == t.firedElems.length && (e = [e[0]]);
                            for (var r, a = 0; r = e[a]; a++)
                                r && r.callback && r.callback.call(r.elem, r.elem);
                            t && t.options.onceOnly && 1 == t.firedElems.length && t.me.unbindEventWithSelectorAndCallback.call(t.target, t.selector, t.callback)
                        },
                        checkChildNodesRecursively: function(e, t, r, a) {
                            for (var i, n = 0; i = e[n]; n++)
                                r(i, t, a) && a.push({
                                    callback: t.callback,
                                    elem: i
                                }),
                                0 < i.childNodes.length && u.checkChildNodesRecursively(i.childNodes, t, r, a)
                        },
                        mergeArrays: function(e, t) {
                            var r, a = {};
                            for (r in e)
                                e.hasOwnProperty(r) && (a[r] = e[r]);
                            for (r in t)
                                t.hasOwnProperty(r) && (a[r] = t[r]);
                            return a
                        },
                        toElementsArray: function(e) {
                            return e = void 0 !== e && ("number" != typeof e.length || e === c) ? [e] : e
                        }
                    }), e = (l.prototype.addEvent = function(e, t, r, a) {
                        a = {
                            target: e,
                            selector: t,
                            options: r,
                            callback: a,
                            firedElems: []
                        };
                        return this._beforeAdding && this._beforeAdding(a),
                        this._eventsBucket.push(a),
                        a
                    }
                    ,
                    l.prototype.removeEvent = function(e) {
                        for (var t, r = this._eventsBucket.length - 1; t = this._eventsBucket[r]; r--)
                            e(t) && (this._beforeRemoving && this._beforeRemoving(t),
                            (t = this._eventsBucket.splice(r, 1)) && t.length && (t[0].callback = null))
                    }
                    ,
                    l.prototype.beforeAdding = function(e) {
                        this._beforeAdding = e
                    }
                    ,
                    l.prototype.beforeRemoving = function(e) {
                        this._beforeRemoving = e
                    }
                    ,
                    l), t = function(i, n) {
                        var o = new e
                          , l = this
                          , s = {
                            fireOnAttributesModification: !1
                        };
                        return o.beforeAdding(function(t) {
                            var e = t.target;
                            e !== c.document && e !== c || (e = document.getElementsByTagName("html")[0]);
                            var r = new MutationObserver(function(e) {
                                n.call(this, e, t)
                            }
                            )
                              , a = i(t.options);
                            r.observe(e, a),
                            t.observer = r,
                            t.me = l
                        }),
                        o.beforeRemoving(function(e) {
                            e.observer.disconnect()
                        }),
                        this.bindEvent = function(e, t, r) {
                            t = u.mergeArrays(s, t);
                            for (var a = u.toElementsArray(this), i = 0; i < a.length; i++)
                                o.addEvent(a[i], e, t, r)
                        }
                        ,
                        this.unbindEvent = function() {
                            var r = u.toElementsArray(this);
                            o.removeEvent(function(e) {
                                for (var t = 0; t < r.length; t++)
                                    if (this === w || e.target === r[t])
                                        return !0;
                                return !1
                            })
                        }
                        ,
                        this.unbindEventWithSelectorOrCallback = function(r) {
                            var a = u.toElementsArray(this)
                              , i = r
                              , e = "function" == typeof r ? function(e) {
                                for (var t = 0; t < a.length; t++)
                                    if ((this === w || e.target === a[t]) && e.callback === i)
                                        return !0;
                                return !1
                            }
                            : function(e) {
                                for (var t = 0; t < a.length; t++)
                                    if ((this === w || e.target === a[t]) && e.selector === r)
                                        return !0;
                                return !1
                            }
                            ;
                            o.removeEvent(e)
                        }
                        ,
                        this.unbindEventWithSelectorAndCallback = function(r, a) {
                            var i = u.toElementsArray(this);
                            o.removeEvent(function(e) {
                                for (var t = 0; t < i.length; t++)
                                    if ((this === w || e.target === i[t]) && e.selector === r && e.callback === a)
                                        return !0;
                                return !1
                            })
                        }
                        ,
                        this
                    }, i = new function() {
                        var s = {
                            fireOnAttributesModification: !1,
                            onceOnly: !1,
                            existing: !1
                        };
                        function n(e, t, r) {
                            return !(!u.matchesSelector(e, t.selector) || (e._id === w && (e._id = a++),
                            -1 != t.firedElems.indexOf(e._id))) && (t.firedElems.push(e._id),
                            !0)
                        }
                        var c = (i = new t(function(e) {
                            var t = {
                                attributes: !1,
                                childList: !0,
                                subtree: !0
                            };
                            return e.fireOnAttributesModification && (t.attributes = !0),
                            t
                        }
                        ,function(e, i) {
                            e.forEach(function(e) {
                                var t = e.addedNodes
                                  , r = e.target
                                  , a = [];
                                null !== t && 0 < t.length ? u.checkChildNodesRecursively(t, i, n, a) : "attributes" === e.type && n(r, i) && a.push({
                                    callback: i.callback,
                                    elem: r
                                }),
                                u.callCallbacks(a, i)
                            })
                        }
                        )).bindEvent;
                        return i.bindEvent = function(e, t, r) {
                            t = void 0 === r ? (r = t,
                            s) : u.mergeArrays(s, t);
                            var a = u.toElementsArray(this);
                            if (t.existing) {
                                for (var i = [], n = 0; n < a.length; n++)
                                    for (var o = a[n].querySelectorAll(e), l = 0; l < o.length; l++)
                                        i.push({
                                            callback: r,
                                            elem: o[l]
                                        });
                                if (t.onceOnly && i.length)
                                    return r.call(i[0].elem, i[0].elem);
                                setTimeout(u.callCallbacks, 1, i)
                            }
                            c.call(this, e, t, r)
                        }
                        ,
                        i
                    }
                    , o = new function() {
                        var a = {};
                        function i(e, t) {
                            return u.matchesSelector(e, t.selector)
                        }
                        var n = (o = new t(function() {
                            return {
                                childList: !0,
                                subtree: !0
                            }
                        }
                        ,function(e, r) {
                            e.forEach(function(e) {
                                var t = e.removedNodes
                                  , e = [];
                                null !== t && 0 < t.length && u.checkChildNodesRecursively(t, r, i, e),
                                u.callCallbacks(e, r)
                            })
                        }
                        )).bindEvent;
                        return o.bindEvent = function(e, t, r) {
                            t = void 0 === r ? (r = t,
                            a) : u.mergeArrays(a, t),
                            n.call(this, e, t, r)
                        }
                        ,
                        o
                    }
                    ;
                    d(HTMLElement.prototype),
                    d(NodeList.prototype),
                    d(HTMLCollection.prototype),
                    d(HTMLDocument.prototype),
                    d(Window.prototype);
                    var n = {};
                    return s(i, n, "unbindAllArrive"),
                    s(o, n, "unbindAllLeave"),
                    n
                }
                function l() {
                    this._eventsBucket = [],
                    this._beforeAdding = null,
                    this._beforeRemoving = null
                }
                function s(e, t, r) {
                    u.addMethod(t, r, e.unbindEvent),
                    u.addMethod(t, r, e.unbindEventWithSelectorOrCallback),
                    u.addMethod(t, r, e.unbindEventWithSelectorAndCallback)
                }
                function d(e) {
                    e.arrive = i.bindEvent,
                    s(i, e, "unbindArrive"),
                    e.leave = o.bindEvent,
                    s(o, e, "unbindLeave")
                }
            }(window, void 0)
              , ewww_webp_supported = !1;
            function check_webp_feature(e, t) {
                var r;
                ewww_webp_supported ? t(ewww_webp_supported) : ((r = new Image).onload = function() {
                    ewww_webp_supported = 0 < r.width && 0 < r.height,
                    t(ewww_webp_supported)
                }
                ,
                r.onerror = function() {
                    t(!1)
                }
                ,
                r.src = "data:image/webp;base64," + {
                    alpha: "UklGRkoAAABXRUJQVlA4WAoAAAAQAAAAAAAAAAAAQUxQSAwAAAARBxAR/Q9ERP8DAABWUDggGAAAABQBAJ0BKgEAAQAAAP4AAA3AAP7mtQAAAA==",
                    animation: "UklGRlIAAABXRUJQVlA4WAoAAAASAAAAAAAAAAAAQU5JTQYAAAD/////AABBTk1GJgAAAAAAAAAAAAAAAAAAAGQAAABWUDhMDQAAAC8AAAAQBxAREYiI/gcA"
                }[e])
            }
            function ewwwLoadImages(e) {
                if (e) {
                    for (var t = document.querySelectorAll(".batch-image img, .image-wrapper a, .ngg-pro-masonry-item a, .ngg-galleria-offscreen-seo-wrapper a"), r = 0, a = t.length; r < a; r++)
                        ewwwAttr(t[r], "data-src", t[r].getAttribute("data-webp")),
                        ewwwAttr(t[r], "data-thumbnail", t[r].getAttribute("data-webp-thumbnail"));
                    for (var i = document.querySelectorAll(".rev_slider ul li"), r = 0, a = i.length; r < a; r++) {
                        ewwwAttr(i[r], "data-thumb", i[r].getAttribute("data-webp-thumb"));
                        for (var n = 1; n < 11; )
                            ewwwAttr(i[r], "data-param" + n, i[r].getAttribute("data-webp-param" + n)),
                            n++
                    }
                    for (r = 0,
                    a = (i = document.querySelectorAll(".rev_slider img")).length; r < a; r++)
                        ewwwAttr(i[r], "data-lazyload", i[r].getAttribute("data-webp-lazyload"));
                    for (var o = document.querySelectorAll("div.woocommerce-product-gallery__image"), r = 0, a = o.length; r < a; r++)
                        ewwwAttr(o[r], "data-thumb", o[r].getAttribute("data-webp-thumb"))
                }
                for (var l = document.querySelectorAll("video"), r = 0, a = l.length; r < a; r++)
                    ewwwAttr(l[r], "poster", e ? l[r].getAttribute("data-poster-webp") : l[r].getAttribute("data-poster-image"));
                for (var s, c = document.querySelectorAll("img.ewww_webp_lazy_load"), r = 0, a = c.length; r < a; r++)
                    e && (ewwwAttr(c[r], "data-lazy-srcset", c[r].getAttribute("data-lazy-srcset-webp")),
                    ewwwAttr(c[r], "data-srcset", c[r].getAttribute("data-srcset-webp")),
                    ewwwAttr(c[r], "data-lazy-src", c[r].getAttribute("data-lazy-src-webp")),
                    ewwwAttr(c[r], "data-src", c[r].getAttribute("data-src-webp")),
                    ewwwAttr(c[r], "data-orig-file", c[r].getAttribute("data-webp-orig-file")),
                    ewwwAttr(c[r], "data-medium-file", c[r].getAttribute("data-webp-medium-file")),
                    ewwwAttr(c[r], "data-large-file", c[r].getAttribute("data-webp-large-file")),
                    null != (s = c[r].getAttribute("srcset")) && !1 !== s && s.includes("R0lGOD") && ewwwAttr(c[r], "src", c[r].getAttribute("data-lazy-src-webp"))),
                    c[r].className = c[r].className.replace(/\bewww_webp_lazy_load\b/, "");
                for (var w = document.querySelectorAll(".ewww_webp"), r = 0, a = w.length; r < a; r++)
                    e ? (ewwwAttr(w[r], "srcset", w[r].getAttribute("data-srcset-webp")),
                    ewwwAttr(w[r], "src", w[r].getAttribute("data-src-webp")),
                    ewwwAttr(w[r], "data-orig-file", w[r].getAttribute("data-webp-orig-file")),
                    ewwwAttr(w[r], "data-medium-file", w[r].getAttribute("data-webp-medium-file")),
                    ewwwAttr(w[r], "data-large-file", w[r].getAttribute("data-webp-large-file")),
                    ewwwAttr(w[r], "data-large_image", w[r].getAttribute("data-webp-large_image")),
                    ewwwAttr(w[r], "data-src", w[r].getAttribute("data-webp-src"))) : (ewwwAttr(w[r], "srcset", w[r].getAttribute("data-srcset-img")),
                    ewwwAttr(w[r], "src", w[r].getAttribute("data-src-img"))),
                    w[r].className = w[r].className.replace(/\bewww_webp\b/, "ewww_webp_loaded");
                window.jQuery && jQuery.fn.isotope && jQuery.fn.imagesLoaded && (jQuery(".fusion-posts-container-infinite").imagesLoaded(function() {
                    jQuery(".fusion-posts-container-infinite").hasClass("isotope") && jQuery(".fusion-posts-container-infinite").isotope()
                }),
                jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").imagesLoaded(function() {
                    jQuery(".fusion-portfolio:not(.fusion-recent-works) .fusion-portfolio-wrapper").isotope()
                }))
            }
            function ewwwWebPInit(e) {
                ewwwLoadImages(e),
                ewwwNggLoadGalleries(e),
                document.arrive(".ewww_webp", function() {
                    ewwwLoadImages(e)
                }),
                document.arrive(".ewww_webp_lazy_load", function() {
                    ewwwLoadImages(e)
                }),
                document.arrive("videos", function() {
                    ewwwLoadImages(e)
                }),
                "loading" == document.readyState ? document.addEventListener("DOMContentLoaded", ewwwJSONParserInit) : ("undefined" != typeof galleries && ewwwNggParseGalleries(e),
                ewwwWooParseVariations(e))
            }
            function ewwwAttr(e, t, r) {
                null != r && !1 !== r && e.setAttribute(t, r)
            }
            function ewwwJSONParserInit() {
                "undefined" != typeof galleries && check_webp_feature("alpha", ewwwNggParseGalleries),
                check_webp_feature("alpha", ewwwWooParseVariations)
            }
            function ewwwWooParseVariations(e) {
                if (e)
                    for (var t = document.querySelectorAll("form.variations_form"), r = 0, a = t.length; r < a; r++) {
                        var i = t[r].getAttribute("data-product_variations")
                          , n = !1;
                        try {
                            for (var o in i = JSON.parse(i))
                                void 0 !== i[o] && void 0 !== i[o].image && (void 0 !== i[o].image.src_webp && (i[o].image.src = i[o].image.src_webp,
                                n = !0),
                                void 0 !== i[o].image.srcset_webp && (i[o].image.srcset = i[o].image.srcset_webp,
                                n = !0),
                                void 0 !== i[o].image.full_src_webp && (i[o].image.full_src = i[o].image.full_src_webp,
                                n = !0),
                                void 0 !== i[o].image.gallery_thumbnail_src_webp && (i[o].image.gallery_thumbnail_src = i[o].image.gallery_thumbnail_src_webp,
                                n = !0),
                                void 0 !== i[o].image.thumb_src_webp && (i[o].image.thumb_src = i[o].image.thumb_src_webp,
                                n = !0));
                            n && ewwwAttr(t[r], "data-product_variations", JSON.stringify(i))
                        } catch (e) {}
                    }
            }
            function ewwwNggParseGalleries(e) {
                if (e)
                    for (var t in galleries) {
                        var r = galleries[t];
                        galleries[t].images_list = ewwwNggParseImageList(r.images_list)
                    }
            }
            function ewwwNggLoadGalleries(e) {
                e && document.addEventListener("ngg.galleria.themeadded", function(e, t) {
                    window.ngg_galleria._create_backup = window.ngg_galleria.create,
                    window.ngg_galleria.create = function(e, t) {
                        var r = $(e).data("id");
                        return galleries["gallery_" + r].images_list = ewwwNggParseImageList(galleries["gallery_" + r].images_list),
                        window.ngg_galleria._create_backup(e, t)
                    }
                })
            }
            function ewwwNggParseImageList(e) {
                for (var t in e) {
                    var r = e[t];
                    if (void 0 !== r["image-webp"] && (e[t].image = r["image-webp"],
                    delete e[t]["image-webp"]),
                    void 0 !== r["thumb-webp"] && (e[t].thumb = r["thumb-webp"],
                    delete e[t]["thumb-webp"]),
                    void 0 !== r.full_image_webp && (e[t].full_image = r.full_image_webp,
                    delete e[t].full_image_webp),
                    void 0 !== r.srcsets)
                        for (var a in r.srcsets)
                            nggSrcset = r.srcsets[a],
                            void 0 !== r.srcsets[a + "-webp"] && (e[t].srcsets[a] = r.srcsets[a + "-webp"],
                            delete e[t].srcsets[a + "-webp"]);
                    if (void 0 !== r.full_srcsets)
                        for (var i in r.full_srcsets)
                            nggFSrcset = r.full_srcsets[i],
                            void 0 !== r.full_srcsets[i + "-webp"] && (e[t].full_srcsets[i] = r.full_srcsets[i + "-webp"],
                            delete e[t].full_srcsets[i + "-webp"])
                }
                return e
            }
            check_webp_feature("alpha", ewwwWebPInit);
        </script>
        <script>
            (function(html) {
                html.className = html.className.replace(/\bno-js\b/, 'js')
            }
            )(document.documentElement);
        </script>
        <script type='text/javascript'>
            var sms_config = {
                "is_set_pass": "no",
                "strength": "",
                "ajax_url": "https:\/\/www.dogcatstar.com\/wp-admin\/admin-ajax.php"
            };
        </script>
        <script>
            var react_menu_data = '{\"msg\":\"OK\",\"location\":null,\"is_cache\":true,\"data\":{\"items\":[{\"level\":1,\"ID\":1335682,\"title\":\"\\u95dc\\u65bc\\u6c6a\\u55b5\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/about/\",\"object\":\"page\",\"object_id\":1061130,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_about-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"button_text\":\"\",\"card_type\":\"text\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":2,\"ID\":1335683,\"title\":\"\\u95dc\\u65bc\\u6c6a\\u55b5\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/about/\",\"object\":\"page\",\"object_id\":1061130,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"text\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":2,\"ID\":1335684,\"title\":\"\\u516c\\u958b\\u900f\\u660e\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/principle/\",\"object\":\"page\",\"object_id\":4772,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"text\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":2,\"ID\":1736021,\"title\":\"\\u516c\\u76ca\\u6545\\u4e8b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/category/charitystory/\",\"object\":\"category\",\"object_id\":206,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"text\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":2,\"ID\":1335685,\"title\":\"\\u52a0\\u5165\\u6211\\u5011\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/join-us/\",\"object\":\"page\",\"object_id\":1061296,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"text\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":2,\"ID\":1335826,\"title\":\"\\u5408\\u4f5c\\u5546\\u5e97\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/store/\",\"object\":\"page\",\"object_id\":1075977,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_store-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"text\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"has_child\":true},{\"level\":1,\"ID\":1335686,\"title\":\"\\u72d7\\u72d7\\u5c08\\u5340\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/dog/\",\"object\":\"product_cat\",\"object_id\":56,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_dog-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":2,\"ID\":1693030,\"title\":\"\\u72d7\\u72d7\\u71b1\\u92b7\\u5fc5\\u8cb7\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e7%8b%97%e7%8b%97%e7%86%b1%e9%8a%b7top5/\",\"object\":\"product_cat\",\"object_id\":200,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":2046440,\"title\":\"\\u3010\\u6c6a\\u55b5\\u54c1\\u724c\\u6708\\u301110 \\u4ef6\\u65b0\\u54c1\\u514d\\u904b\\u4e2d\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/2312brand_10freeshipping/\",\"object\":\"custom\",\"object_id\":2046440,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/12/05/2045833/1TOP-BN-3-150x150.jpg\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"media\",\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/12/05/2045833/1TOP-BN-3-150x150.jpg\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1756460,\"title\":\"\\u73a9\\u5177\\u7e3d\\u52d5\\u54e1\\u6b3e\\uff5c\\u72d7\\u72d7\\u5f48\\u529b\\u7403\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-dogball/\",\"object\":\"product\",\"object_id\":1715571,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/05/25/1715571/Disney_tennis1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1756464,\"title\":\"\\u72d7\\u72d7\\u76ca\\u751f\\u83cc\\u6c90\\u6d74\\u4e73\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-dogspa/\",\"object\":\"product\",\"object_id\":1705740,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/05/11/1705740/toystory-dogspa_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5c08\\u70ba\\u654f\\u611f\\u808c\\u72d7\\u72d7\\u6253\\u9020\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1713415,\"title\":\"\\u6f54\\u7259\\u8b77\\u7406\\u9175\\u7d20\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/oralcare/\",\"object\":\"product\",\"object_id\":1102590,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/09/01/1102590/oralcare_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u65b0\\u6539\\u7248\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1693032,\"title\":\"Fantastic \\u7121\\u81a0\\u9bae\\u8089\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fantasticdog/\",\"object\":\"product\",\"object_id\":42495,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2017/07/06/42495/dogcan-P1-2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1693033,\"title\":\"\\u9bae\\u98df\\u9910\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/dogfreshfood/\",\"object\":\"product\",\"object_id\":1237730,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/05/26/1237730/dogfreshfood-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1693034,\"title\":\"\\u96f6\\u4e73\\u7cd6\\u725b\\u4e73\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/petmilk/\",\"object\":\"product\",\"object_id\":1411955,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/02/18/1411955/petmilk-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1693035,\"title\":\"\\u7121\\u81a0\\u9ede\\u5fc3\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/yumcatcan/\",\"object\":\"product\",\"object_id\":1166501,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/01/19/1166501/snackcan_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-sale\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1693038,\"title\":\"\\u8178\\u80c3\\u76ca\\u751f\\u83cc\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/probiotics-enzyme/\",\"object\":\"product\",\"object_id\":1419818,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/03/1419818/probiotics-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":8,\"has_tab_bar\":false},{\"level\":2,\"ID\":1336619,\"title\":\"\\u8fea\\u58eb\\u5c3c\\u5c08\\u5340\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/disney/\",\"object\":\"custom\",\"object_id\":1336619,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M6.72,15.63V12a.44.44,0,0,1,.35-.43.44.44,0,0,1,.5.25l.84,1.8V12a.45.45,0,0,1,.89,0v3.63a.45.45,0,0,1-.35.43H8.86a.46.46,0,0,1-.41-.26L7.61,14v1.62a.45.45,0,0,1-.89,0Zm3.38,0a.44.44,0,0,0,.44.44h1.69a.45.45,0,1,0,0-.89H11v-.92h1.24a.45.45,0,1,0,0-.89H11v-.92h1.24a.45.45,0,1,0,0-.89H10.54a.44.44,0,0,0-.44.44Zm3.79-3.73a.45.45,0,0,0-.54-.33.45.45,0,0,0-.33.53l.85,3.63a.44.44,0,0,0,.86,0L15.14,14l.42,1.77a.43.43,0,0,0,.43.34.44.44,0,0,0,.43-.34l.85-3.63a.45.45,0,0,0-.34-.53.44.44,0,0,0-.53.33L16,13.67l-.41-1.77a.45.45,0,0,0-.87,0l-.41,1.77Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M15.26,5.33v1.1H14.07V5.33a2.07,2.07,0,1,0-4.14,0v1.1H8.74V5.33a3.26,3.26,0,0,1,6.52,0ZM18.81,7a.59.59,0,0,1,.59.56l.69,12.14A2.07,2.07,0,0,1,18,21.93H6a2.07,2.07,0,0,1-2.07-2.2L4.6,7.59A.59.59,0,0,1,5.19,7Zm.1,12.77L18.25,8.21H5.75L5.09,19.8a.9.9,0,0,0,.25.66.85.85,0,0,0,.64.28H18a.85.85,0,0,0,.64-.28A.9.9,0,0,0,18.91,19.8Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1684306,\"title\":\"\\u539f\\u8089\\u96f6\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-snack/\",\"object\":\"product\",\"object_id\":1656955,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1656955/Disney_snack-12-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1684305,\"title\":\"\\u4eae\\u6bdb\\u8b77\\u819a\\u9c49\\u86cb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-turtleegg/\",\"object\":\"product\",\"object_id\":1657058,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1657058/Disney_hairb-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1684304,\"title\":\"\\u6392\\u6bdb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-hairballrelief/\",\"object\":\"product\",\"object_id\":1657061,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1657061/Disney_hairball-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1756215,\"title\":\"\\u72d7\\u72d7\\u76ca\\u751f\\u83cc\\u6c90\\u6d74\\u4e73\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-dogspa/\",\"object\":\"product\",\"object_id\":1705740,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/05/11/1705740/toystory-dogspa_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1756216,\"title\":\"\\u72d7\\u72d7\\u5f48\\u529b\\u7403\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-dogball/\",\"object\":\"product\",\"object_id\":1715571,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/05/25/1715571/Disney_tennis1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1756231,\"title\":\"\\u5438\\u6c34\\u901f\\u4e7e\\u5bf5\\u7269\\u6d74\\u5dfe\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-pettowel/\",\"object\":\"product\",\"object_id\":1715103,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/09/28/2009703/08_toystory-pettowel-1-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0,\"has_tab_bar\":false},{\"level\":2,\"ID\":1336618,\"title\":\"\\u9ad4\\u9a57\\u7d44\\u5c08\\u5340\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/free_shipping/\",\"object\":\"custom\",\"object_id\":1336618,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M10.3,7.74v.65h1.26a.3.3,0,0,1,0,.59H10.3v.95a.3.3,0,0,1-.6,0V7.44a.31.31,0,0,1,.3-.3h1.56a.3.3,0,0,1,0,.6ZM13.47,9l.9.72a.31.31,0,0,1,0,.42.3.3,0,0,1-.23.11.26.26,0,0,1-.18-.07L12.92,9.3v.63a.3.3,0,1,1-.59,0V8.69h0V7.44a.3.3,0,0,1,.3-.3h.77a1,1,0,0,1,1.08.92A1,1,0,0,1,13.47,9Zm.41-.92c0-.17-.22-.32-.48-.32h-.48v.65h.48C13.66,8.39,13.88,8.24,13.88,8.06Zm2.83-.32a.3.3,0,0,0,0-.6H15.35a.31.31,0,0,0-.3.3V9.77a.3.3,0,0,0,.3.3h1.36a.3.3,0,0,0,0-.59H15.64V8.9h1.07a.3.3,0,0,0,0-.59H15.64V7.74ZM19.33,8.9a.3.3,0,1,0,0-.59H18.27V7.74h1.06a.3.3,0,0,0,0-.6H18a.3.3,0,0,0-.29.3V9.77a.29.29,0,0,0,.29.3h1.36a.3.3,0,1,0,0-.59H18.27V8.9Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M2.67,17.28H3.92a3.54,3.54,0,0,1,.43-1.19H3.26V13.22H20.74v2.87H20a4,4,0,0,1,.43,1.19h.95a.6.6,0,0,0,.6-.59V3.35a.59.59,0,0,0-.6-.59H8a.58.58,0,0,0-.59.59V5.43H5.33a.58.58,0,0,0-.47.23,14.32,14.32,0,0,0-2.62,6.56.59.59,0,0,0-.17.41v4.06A.6.6,0,0,0,2.67,17.28ZM7.41,6.61V12H3.48A13.36,13.36,0,0,1,5.63,6.61ZM8.59,6V3.94H20.74V12H8.59Zm4.22,11.26H11.49a4,4,0,0,0-.43-1.19h2.18A3.54,3.54,0,0,0,12.81,17.28ZM7.7,14.72A3.26,3.26,0,1,0,11,18,3.27,3.27,0,0,0,7.7,14.72ZM9.78,18A2.08,2.08,0,1,1,7.7,15.91,2.08,2.08,0,0,1,9.78,18Zm6.81-3.26A3.26,3.26,0,1,0,19.85,18,3.27,3.27,0,0,0,16.59,14.72ZM18.67,18a2.08,2.08,0,1,1-2.08-2.07A2.08,2.08,0,0,1,18.67,18Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1335688,\"title\":\"\\u5e7c\\u72ac\\uff5c\\u71df\\u990a\\u7f50\\u9ad4\\u9a57\\u7d44\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/puppycantry/\",\"object\":\"product\",\"object_id\":1231644,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/05/18/1231626/puppycantry_220620-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335689,\"title\":\"\\u5168\\u9f61\\uff5c\\u4e3b\\u98df\\u7f50\\u7d9c\\u5408\\u9ad4\\u9a57\\u7d44\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/dogcan_try/\",\"object\":\"product\",\"object_id\":1022912,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/03/26/1022912/dogcan_try-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335690,\"title\":\"\\u5168\\u9f61\\uff5c\\u751f\\u98df\\u65b0\\u624b\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/try-dog-rawfood/\",\"object\":\"product\",\"object_id\":90202,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/06/12/90202/try-dog-rawfood-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0,\"has_tab_bar\":false},{\"level\":2,\"ID\":1335687,\"title\":\"\\u72d7\\u72d7\\u4e3b\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e7%8b%97%e7%8b%97%e4%b8%bb%e9%a3%9f/\",\"object\":\"product_cat\",\"object_id\":140,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M9.46,5.11a2.81,2.81,0,0,1,.65.07,4.4,4.4,0,0,1,7.56,3.06v.29a3.72,3.72,0,0,1-1.18.57V8.24A3.23,3.23,0,0,0,13.27,5a3.19,3.19,0,0,0-2.5,1.2.59.59,0,0,1-.66.19,1.82,1.82,0,0,0-.65-.12,2,2,0,0,0-2,2V9.1a3.72,3.72,0,0,1-1.18-.57V8.24A3.13,3.13,0,0,1,9.46,5.11Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M19.44,8.4a.59.59,0,0,0-1.14.21c0,.57-2.23,1.7-6.3,1.7S5.7,9.18,5.7,8.61A.59.59,0,0,0,4.56,8.4l-2.3,6.12a.52.52,0,0,0,0,.21c0,2.43,6.27,3.65,9.78,3.65s9.78-1.22,9.78-3.65a.52.52,0,0,0,0-.21ZM12,17.2c-4.22,0-8.35-1.48-8.58-2.39L5.25,9.93c1.27,1,4,1.56,6.75,1.56s5.48-.53,6.75-1.56l1.83,4.88C20.35,15.72,16.22,17.2,12,17.2Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1336620,\"title\":\"\\u51b7\\u51cd\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e7%8b%97%e7%8b%97%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1336620,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335691,\"title\":\"\\u751f\\u98df\\u9910\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/doghpprawfood/\",\"object\":\"product\",\"object_id\":7222,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2015/12/10/7222/doghpprawfood-01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336621,\"title\":\"\\u5e38\\u6eab\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e7%8b%97%e7%8b%97%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1336621,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335692,\"title\":\"\\u51cd\\u4e7e\\u751f\\u98df\\u9910\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/dogfreezedriedrawfood/\",\"object\":\"product\",\"object_id\":14840,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2016/07/25/14840/dogfreezedriedrawfood-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335693,\"title\":\"\\u5168\\u9f61\\uff5cFantastic \\u7121\\u81a0\\u9bae\\u8089\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fantasticdog/\",\"object\":\"product\",\"object_id\":42495,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2017/07/06/42495/dogcan-P1-2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335694,\"title\":\"\\u5e7c\\u72ac\\uff5c\\u7121\\u81a0\\u71df\\u990a\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/puppycan/\",\"object\":\"product\",\"object_id\":1098736,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/08/21/1098736/puppycan-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335695,\"title\":\"\\u8001\\u72ac\\uff5c\\u7121\\u81a0\\u4f4e\\u9209\\u9280\\u990a\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/seniordogcan/\",\"object\":\"product\",\"object_id\":1161550,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/01/08/1161550/\\u8001\\u72ac\\u7f50_P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335696,\"title\":\"\\u9bae\\u98df\\u9910\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/dogfreshfood/\",\"object\":\"product\",\"object_id\":1237730,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/05/26/1237730/dogfreshfood-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335698,\"title\":\"\\u7f8e\\u570b\\u8c9d\\u514b \\u72ac\\u7528\\u5976\\u7c89\\uff08\\u6c6a\\u55b5\\u56b4\\u9078\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/petag_puppymilk/\",\"object\":\"product\",\"object_id\":1062429,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/05/22/1062429/puppymilk-01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336622,\"title\":\"\\u751f\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e7%8b%97%e7%8b%97%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1336622,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1336636,\"title\":\"\\u751f\\u98df\\u9910\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/doghpprawfood/\",\"object\":\"product\",\"object_id\":7222,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2015/12/10/7222/doghpprawfood-01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336635,\"title\":\"\\u51cd\\u4e7e\\u751f\\u98df\\u9910\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/dogfreezedriedrawfood/\",\"object\":\"product\",\"object_id\":14840,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2016/07/25/14840/dogfreezedriedrawfood-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336623,\"title\":\"\\u4e3b\\u98df\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e7%8b%97%e7%8b%97%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1336623,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1336637,\"title\":\"\\u5168\\u9f61\\uff5cFantastic \\u7121\\u81a0\\u9bae\\u8089\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fantasticdog/\",\"object\":\"product\",\"object_id\":42495,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2017/07/06/42495/dogcan-P1-2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336638,\"title\":\"\\u5e7c\\u72ac\\uff5c\\u7121\\u81a0\\u71df\\u990a\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/puppycan/\",\"object\":\"product\",\"object_id\":1098736,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/08/21/1098736/puppycan-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336639,\"title\":\"\\u8001\\u72ac\\uff5c\\u7121\\u81a0\\u4f4e\\u9209\\u9280\\u990a\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/seniordogcan/\",\"object\":\"product\",\"object_id\":1161550,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/01/08/1161550/\\u8001\\u72ac\\u7f50_P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336624,\"title\":\"\\u9bae\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e7%8b%97%e7%8b%97%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1336624,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1336640,\"title\":\"\\u9bae\\u98df\\u9910\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/dogfreshfood/\",\"object\":\"product\",\"object_id\":1237730,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/05/26/1237730/dogfreshfood-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336625,\"title\":\"\\u5976\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e7%8b%97%e7%8b%97%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1336625,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1336642,\"title\":\"\\u7f8e\\u570b\\u8c9d\\u514b \\u72ac\\u7528\\u5976\\u7c89\\uff08\\u6c6a\\u55b5\\u56b4\\u9078\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/petag_puppymilk/\",\"object\":\"product\",\"object_id\":1062429,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/05/22/1062429/puppymilk-01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0}],\"item_count\":10,\"has_tab_bar\":true},{\"level\":2,\"ID\":1335701,\"title\":\"\\u4fdd\\u5065\\u7cfb\\u5217\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e4%bf%9d%e5%81%a5%e5%93%81/\",\"object\":\"custom\",\"object_id\":1335701,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M18.58,14.11h-2.2v-2.2a.6.6,0,0,0-.59-.6H13a.59.59,0,0,0-.59.6v2.2H10.19a.6.6,0,0,0-.59.59v2.8a.59.59,0,0,0,.59.59H12.4V20.3a.59.59,0,0,0,.59.59h2.8a.6.6,0,0,0,.59-.59V18.09h2.2a.58.58,0,0,0,.59-.59V14.7A.59.59,0,0,0,18.58,14.11ZM18,16.91h-2.2a.59.59,0,0,0-.6.59v2.2H13.58V17.5a.58.58,0,0,0-.59-.59H10.78V15.3H13a.59.59,0,0,0,.59-.6V12.5h1.61v2.2a.6.6,0,0,0,.6.6H18Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M11.8,19H6.64A.64.64,0,0,1,6,18.39V9.82a.63.63,0,0,1,.63-.63A1.57,1.57,0,0,0,8.21,7.62V7.46h3.23v.16A1.57,1.57,0,0,0,13,9.19a.63.63,0,0,1,.63.63v.9h1.18v-.9A1.81,1.81,0,0,0,13,8a.39.39,0,0,1-.39-.39V7.46h.51a.58.58,0,0,0,.59-.59V3.7a.59.59,0,0,0-.59-.59H6.52a.59.59,0,0,0-.59.59V6.87a.58.58,0,0,0,.59.59H7v.16A.39.39,0,0,1,6.64,8,1.81,1.81,0,0,0,4.83,9.82v8.57a1.81,1.81,0,0,0,1.81,1.82H11.8Zm.74-12.75H7.11v-2h5.43Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1336628,\"title\":\"\\u76ae\\u819a\\u8b77\\u7406\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336628,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1428811,\"title\":\"\\u76ae\\u819a\\u76ca\\u751f\\u83cc\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/probiotics-allergic-symptom/\",\"object\":\"product\",\"object_id\":1419870,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/03/1419870/probiotics-skin-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1685396,\"title\":\"\\u8fea\\u58eb\\u5c3c\\u6b3e\\uff5c\\u4eae\\u6bdb\\u8b77\\u819a\\u9c49\\u86cb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-turtleegg/\",\"object\":\"product\",\"object_id\":1657058,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1657058/Disney_hairb-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335705,\"title\":\"\\u4eae\\u6bdb\\u8b77\\u819a\\u9c49\\u86cb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/turtleegg/\",\"object\":\"product\",\"object_id\":177195,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/03/19/177195/turtleegg_P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336646,\"title\":\"\\u514d\\u75ab\\u529b\\u63d0\\u5347\\u4fdd\\u990a\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/immune_systemup/\",\"object\":\"product\",\"object_id\":150044,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/11/27/150044/immune_systemup_2022-P1-2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1469049,\"title\":\"Omega-3 \\u5168\\u4fdd\\u990a\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil-spray/\",\"object\":\"product\",\"object_id\":1448193,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/19/1448193/fishoil-spray-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335714,\"title\":\"85% Omega-3 \\u6a5f\\u80fd\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil_q10/\",\"object\":\"product\",\"object_id\":1079706,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/07/1079706/fish_oil_2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336629,\"title\":\"\\u8178\\u80c3\\u5065\\u5eb7\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336629,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1432336,\"title\":\"\\u8178\\u80c3\\u76ca\\u751f\\u83cc\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/probiotics-enzyme/\",\"object\":\"product\",\"object_id\":1419818,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/03/1419818/probiotics-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1491110,\"title\":\"\\u8edf\\u4fbf\\u524b\\u661f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/digestive-relief/\",\"object\":\"product\",\"object_id\":1325071,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/10/09/1325071/digestive-relief-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":2019201,\"title\":\"\\u9ad4\\u614b\\u7ba1\\u7406\\u76ca\\u751f\\u83cc\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fit-healthy-probiotics/\",\"object\":\"product\",\"object_id\":1783881,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/08/24/1783881/01fit-healthy-probiotics-home-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1685387,\"title\":\"\\u8fea\\u58eb\\u5c3c\\u7cfb\\u5217\\uff5c\\u6392\\u6bdb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-hairballrelief/\",\"object\":\"product\",\"object_id\":1657061,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1657061/Disney_hairball-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335716,\"title\":\"\\u6392\\u6bdb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/hairball_relief_digestive_aid/\",\"object\":\"product\",\"object_id\":31215,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2017/03/16/31215/hairball_relief_digestive_aid-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336626,\"title\":\"\\u95dc\\u7bc0\\u4fdd\\u990a\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336626,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335708,\"title\":\"UC-II \\u4fdd\\u990a\\u7c89\\uff08\\u65e5\\u5e38\\u7248\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/ucll/\",\"object\":\"product\",\"object_id\":67118,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/01/24/67118/ucll-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335709,\"title\":\"MSM \\u4fdd\\u990a\\u7c89\\uff08\\u52a0\\u5f37\\u7248\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/msm/\",\"object\":\"product\",\"object_id\":72452,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/03/02/72452/MSM-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1469048,\"title\":\"Omega-3 \\u5168\\u4fdd\\u990a\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil-spray/\",\"object\":\"product\",\"object_id\":1448193,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/19/1448193/fishoil-spray-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u53f0\\u9996\\u5275\\u9b5a\\u6cb9\\u5674\\u9727\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336631,\"title\":\"\\u5fc3\\u81df\\uff0f\\u8166\\u90e8\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336631,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335703,\"title\":\"\\u725b\\u78fa\\u9178\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/taurine/\",\"object\":\"product\",\"object_id\":158744,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/01/07/158744/taurine-P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1469050,\"title\":\"Omega-3 \\u5168\\u4fdd\\u990a\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil-spray/\",\"object\":\"product\",\"object_id\":1448193,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/19/1448193/fishoil-spray-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u53f0\\u9996\\u5275\\u9b5a\\u6cb9\\u5674\\u9727\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336644,\"title\":\"85% Omega-3 \\u6a5f\\u80fd\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil_q10/\",\"object\":\"product\",\"object_id\":1079706,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/07/1079706/fish_oil_2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336630,\"title\":\"\\u773c\\u775b\\u4fdd\\u990a\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336630,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335710,\"title\":\"\\u8b77\\u773c\\u597d\\u660e\\u4eae\\u4fdd\\u990a\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/eyeshealth/\",\"object\":\"product\",\"object_id\":151568,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/12/04/151568/eyeshealth_P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1469051,\"title\":\"Omega-3 \\u5168\\u4fdd\\u990a\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil-spray/\",\"object\":\"product\",\"object_id\":1448193,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/19/1448193/fishoil-spray-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u53f0\\u9996\\u5275\\u9b5a\\u6cb9\\u5674\\u9727\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336669,\"title\":\"85% Omega-3 \\u6a5f\\u80fd\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil_q10/\",\"object\":\"product\",\"object_id\":1079706,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/07/1079706/fish_oil_2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336632,\"title\":\"\\u60c5\\u7dd2\\u7a69\\u5b9a\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336632,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335712,\"title\":\"\\u60c5\\u7dd2\\u597d\\u653e\\u9b06\\u4fdd\\u990a\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/stressrelief/\",\"object\":\"product\",\"object_id\":512005,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/11/18/512005/stressrelief-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335715,\"title\":\"\\u7d13\\u58d3\\u80fa\\u57fa\\u9178\\uff08\\u7a81\\u767c\\u58d3\\u529b\\u7528\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/petcalm/\",\"object\":\"product\",\"object_id\":727477,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/01/08/727477/petcalm-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336627,\"title\":\"\\u7259\\u9f52\\u8b77\\u7406\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336627,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1710176,\"title\":\"\\u6f54\\u7259\\u8b77\\u7406\\u9175\\u7d20\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/oralcare/\",\"object\":\"product\",\"object_id\":1102590,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/09/01/1102590/oralcare_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u65b0\\u6539\\u7248\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336643,\"title\":\"\\u5bf5\\u7269\\u5c08\\u7528\\u7259\\u5237\\uff08\\u7d30\\u8edf\\u6bdb\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/pet_toothbrush/\",\"object\":\"product\",\"object_id\":1102648,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/09/01/1102648/toothbrush_01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336633,\"title\":\"\\u9867\\u597d\\u514d\\u75ab\\u529b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336633,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335711,\"title\":\"\\u514d\\u75ab\\u529b\\u63d0\\u5347\\u4fdd\\u990a\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/immune_systemup/\",\"object\":\"product\",\"object_id\":150044,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/11/27/150044/immune_systemup_2022-P1-2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336634,\"title\":\"\\u6ccc\\u5c3f\\u9053\\u5065\\u5eb7\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336634,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1801313,\"title\":\"\\u6ccc\\u5c3f\\u9053\\u5065\\u5eb7\\u4fdd\\u990a\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/urinary-health-support-2/\",\"object\":\"product\",\"object_id\":1767851,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/07/31/1767851/01_urinary-health-support-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u65b0\\u5347\\u7d1a\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}}],\"item_count\":0}],\"item_count\":0,\"has_tab_bar\":true},{\"level\":2,\"ID\":1335718,\"title\":\"\\u526f\\u98df&\\u96f6\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e7%8a%ac%e8%b2%93%e9%9b%b6%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1335718,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M16.89,12.77V11.58H15.71a.59.59,0,1,1,0-1.18h1.18V9.21a.6.6,0,0,1,1.19,0V10.4h1.18a.59.59,0,1,1,0,1.18H18.08v1.19a.6.6,0,0,1-1.19,0Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M12.77,5,12.35,5h-.1a.66.66,0,0,1-.49-.24l0,0a5.16,5.16,0,0,0-4-1.86h0a5.06,5.06,0,0,0-2.11.45A5.18,5.18,0,0,0,2.84,6.5a5.17,5.17,0,0,0,7.52,6l.11-.07.08,0L14.76,10a2.75,2.75,0,0,0,1.29-1.78c0-.1,0-.19.05-.28l.67-.39a2.5,2.5,0,0,0,.61.09,2.07,2.07,0,0,0,1.94-2.78,2,2,0,0,0-.42-.69,2,2,0,0,0-.4-.71,2,2,0,0,0-1.57-.72h0a2,2,0,0,0-.8.16,2.09,2.09,0,0,0-1.22,1.45l-.79.46L13.89,5a2.32,2.32,0,0,0-.53,0A2.88,2.88,0,0,0,12.77,5Zm3.31,0a.87.87,0,0,1,.51-1,.8.8,0,0,1,.34-.07.91.91,0,0,1,.67.3.88.88,0,0,1,.21.58.88.88,0,0,1,.11,1.47.94.94,0,0,1-.54.18.88.88,0,0,1-.63-.26L15.39,7a.67.67,0,0,1-.91-.24.67.67,0,0,1,.24-.9Zm-6.2,6.43-.12.07a4,4,0,0,1-5.44-1.43,4,4,0,0,1,6.5-4.55l0,0a1.84,1.84,0,0,0,1.41.69,1.45,1.45,0,0,0,.35,0L13,6.12a.83.83,0,0,1,.22,0,1.83,1.83,0,0,0,.23,1.22,1.88,1.88,0,0,0,1.35.9,1.55,1.55,0,0,1-.65.74L10,11.4ZM5.37,19.75A6.93,6.93,0,0,0,10,21.26h.38a15,15,0,0,0,5.89-1.57,6.5,6.5,0,0,0,2.74,1,1.36,1.36,0,0,0,1.28-.5,1.65,1.65,0,0,0,.25-1.6,4.34,4.34,0,0,1-.1-2.78,1.58,1.58,0,0,0-.36-1.57,1.32,1.32,0,0,0-1.31-.41,6.58,6.58,0,0,0-2.66,1.25,15,15,0,0,0-6-1.11c-3.27.13-5.78,1.81-5.71,3.84A2.68,2.68,0,0,0,5.37,19.75ZM16,16.37a.61.61,0,0,0,.7-.11A5,5,0,0,1,19.08,15a.18.18,0,0,1,.17.07.42.42,0,0,1,.09.41,5.43,5.43,0,0,0,.12,3.56.42.42,0,0,1-.06.42s-.1.1-.17.08a5.05,5.05,0,0,1-2.49-1,.6.6,0,0,0-.7-.06,13.31,13.31,0,0,1-5.68,1.6,6.07,6.07,0,0,1-4.18-1.18,1.55,1.55,0,0,1-.56-1.07c0-1.18,1.79-2.51,4.58-2.61h.36A13.17,13.17,0,0,1,16,16.37Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1335700,\"title\":\"\\u7121\\u81a0\\u9ede\\u5fc3\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/yumcatcan/\",\"object\":\"product\",\"object_id\":1166501,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/01/19/1166501/snackcan_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1419042,\"title\":\"\\u96f6\\u4e73\\u7cd6\\u725b\\u4e73\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/petmilk/\",\"object\":\"product\",\"object_id\":1411955,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/02/18/1411955/petmilk-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1384203,\"title\":\"\\u5929\\u7136\\u8d77\\u53f8\\u7403\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/cheeseball/\",\"object\":\"product\",\"object_id\":1323273,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/10/07/1323273/cheeseball-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1685397,\"title\":\"\\u8fea\\u58eb\\u5c3c\\u6b3e\\uff5c\\u539f\\u8089\\u96f6\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-snack/\",\"object\":\"product\",\"object_id\":1656955,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1656955/Disney_snack-12-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335719,\"title\":\"\\u539f\\u8089\\u96f6\\u98df\\uff5c\\u5c71\\u5473\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/mountainsnack/\",\"object\":\"product\",\"object_id\":11560,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2016/04/29/11560/snackm210618-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335720,\"title\":\"\\u539f\\u8089\\u96f6\\u98df\\uff5c\\u6d77\\u5473\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/seasnack/\",\"object\":\"product\",\"object_id\":17112,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2016/08/17/17112/snacks210618-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1755671,\"title\":\"\\u539f\\u8089\\u96f6\\u98df\\uff5c\\u9b77\\u9b5a\\u9999\\u9b06\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/squidsnack/\",\"object\":\"product\",\"object_id\":1732261,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/06/16/1732261/\\u671f\\u9593\\u9650\\u5b9a\\u7522\\u54c1\\u5716_\\u5c71\\u5473\\u9996\\u5716-K-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u9650\\u91cf\\u8ca9\\u552e\\u4e2d\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335721,\"title\":\"\\u990a\\u751f\\u98df\\u88dc\\u96de\\u8089\\u9905\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/meatsnack/\",\"object\":\"product\",\"object_id\":105592,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/08/27/105592/meatsnack-01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335722,\"title\":\"\\u4e73\\u916a\\u68d2\\u68d2\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/cheese-stick/\",\"object\":\"product\",\"object_id\":61288,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2017/12/06/61288/cheese-stick-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335724,\"title\":\"\\u72d7\\u8349\\u65b0\\u9bae\\u683d\\u57f9\\u76d2\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/doggrass/\",\"object\":\"product\",\"object_id\":2849,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2015/06/04/3299/catgrass-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0,\"has_tab_bar\":false},{\"level\":2,\"ID\":1335725,\"title\":\"\\u6c90\\u6d74&\\u6f54\\u6de8\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/clean/\",\"object\":\"custom\",\"object_id\":1335725,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M3.56,13.36a.6.6,0,1,1,0-1.19H4.3V11a.59.59,0,0,1,1.18,0v1.18h.74a.6.6,0,0,1,0,1.19H5.48v1.18a.59.59,0,1,1-1.18,0V13.36ZM20.52,8H19V5.33a.59.59,0,1,0-1.18,0V8H16.22a.59.59,0,0,0,0,1.18h1.56v2.64a.59.59,0,1,0,1.18,0V9.15h1.56a.59.59,0,0,0,0-1.18Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M10.15,10.2A2.72,2.72,0,0,0,8,12.85v5.92a2.71,2.71,0,0,0,2.71,2.71h2.54A2.71,2.71,0,0,0,16,18.77V12.85a2.72,2.72,0,0,0-2.12-2.65V8.33l1.35-2.68a2.17,2.17,0,0,0-.1-2.11,2.15,2.15,0,0,0-1.84-1H8.2a.59.59,0,0,0-.59.59V4.52A.58.58,0,0,0,8,5.06l.22.1.15.07A5.79,5.79,0,0,1,7.13,7,1,1,0,0,0,6.9,8.15a1,1,0,0,0,.95.63h.44a3.09,3.09,0,0,0,1.86-.61v0h0ZM8.22,7.6A6.79,6.79,0,0,0,9.3,6a3.44,3.44,0,0,1,.56.86L9.67,7a1.94,1.94,0,0,1-1.38.57ZM8.8,3.7h4.48a1,1,0,0,1,.88,1.42L12.92,7.6H11.3A4.53,4.53,0,0,0,8.8,4.14Zm6,15.07a1.54,1.54,0,0,1-1.53,1.53H10.74a1.53,1.53,0,0,1-1.52-1.53V12.85a1.53,1.53,0,0,1,1.52-1.53.59.59,0,0,0,.6-.59v-2h1.35v2a.59.59,0,0,0,.59.59,1.54,1.54,0,0,1,1.53,1.53Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1756230,\"title\":\"\\u72d7\\u72d7\\u76ca\\u751f\\u83cc\\u6c90\\u6d74\\u4e73\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-dogspa/\",\"object\":\"product\",\"object_id\":1705740,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/05/11/1705740/toystory-dogspa_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5c08\\u70ba\\u654f\\u611f\\u808c\\u72d7\\u72d7\\u6253\\u9020\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335728,\"title\":\"\\u6fd5\\u5f0f\\u885b\\u751f\\u7d19\\uff08\\u53ef\\u6c96\\u99ac\\u6876\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/petwipes/\",\"object\":\"product\",\"object_id\":947139,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/02/25/947139/petwipes-P1-220216-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335729,\"title\":\"\\u6d88\\u81ed\\u6297\\u83cc\\u5674\\u9727\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/deodorantspray/\",\"object\":\"product\",\"object_id\":757614,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/01/14/757614/deodorantspray-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":2045370,\"title\":\"\\u690d\\u8403\\u6d17\\u7897\\u9175\\u7d20\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/dishsoap/\",\"object\":\"product\",\"object_id\":1138617,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/11/18/1138617/P1-dishsoap-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u6d17\\u6de8\\u529b\\u5168\\u65b0\\u5347\\u7d1a\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335727,\"title\":\"\\u690d\\u8403\\u6d17\\u8863\\u9175\\u7d20\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/laundry/\",\"object\":\"product\",\"object_id\":1241188,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/06/01/1241188/laundry-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0,\"has_tab_bar\":false},{\"level\":2,\"ID\":1335730,\"title\":\"\\u751f\\u6d3b\\u7528\\u54c1\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/\",\"object\":\"custom\",\"object_id\":1335730,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M9.17,14.29a.9.9,0,0,1-.73,1.06.94.94,0,0,1-.92-.93.91.91,0,0,1,.73-1.07A1,1,0,0,1,9.17,14.29Zm1.13-.94a1,1,0,0,0-.93.94.91.91,0,0,0,.74,1.06.94.94,0,0,0,.92-.93A.92.92,0,0,0,10.3,13.35ZM6.83,14.94a.79.79,0,0,0-.62,1,1,1,0,0,0,1,.76.79.79,0,0,0,.63-1A1,1,0,0,0,6.83,14.94Zm3.87.76a.78.78,0,0,0,.63,1,1,1,0,0,0,1-.76.8.8,0,0,0-.63-1A1,1,0,0,0,10.7,15.7Zm-1.48-.26c-.77,0-1.4.94-1.4,2,0,.67.65.57,1.07.39a.65.65,0,0,1,.74,0c.53.25,1.37.36,1-1.07C10.38,16,9.84,15.42,9.22,15.44Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M9.1,4.47a3.13,3.13,0,0,1,5.8,0l1.23-1.24a2.39,2.39,0,0,1,4.08,1.69V14a2.4,2.4,0,0,1-2.12,2.38,2.77,2.77,0,0,0,.17-1v-.28A1.2,1.2,0,0,0,19,14V4.91A1.2,1.2,0,0,0,17,4.06l-.59.58a2.94,2.94,0,0,0-1-.17H13.54a1.92,1.92,0,0,0-3.08,0ZM5.92,6.32A2.28,2.28,0,0,1,8,5.06h7.42a2.28,2.28,0,0,1,2.28,2.28v8.07a2.25,2.25,0,0,1-.24,1l-1.89,3.79a2.28,2.28,0,0,1-2,1.26H6.07A2.28,2.28,0,0,1,3.79,19.2V11.13a2.25,2.25,0,0,1,.24-1Zm-.83,4.32a1,1,0,0,0-.12.49V19.2a1.11,1.11,0,0,0,1.1,1.1h7.42a1.12,1.12,0,0,0,1-.61l1.89-3.79a1,1,0,0,0,.12-.49V7.34a1.11,1.11,0,0,0-1.1-1.1H8a1.12,1.12,0,0,0-1,.61Zm.63.09a.44.44,0,0,0,.45.44h6.21a.44.44,0,0,0,0-.88H6.17A.44.44,0,0,0,5.72,10.73Zm8.84,6.66V11.51a.45.45,0,0,0-.89,0v5.88a.45.45,0,0,0,.89,0ZM14.9,7.22,13.71,9.89a.44.44,0,0,0,.23.59.37.37,0,0,0,.18,0,.44.44,0,0,0,.4-.26l1.2-2.68a.45.45,0,1,0-.82-.36Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1431185,\"title\":\"\\u5c0f\\u65b9\\u584a\\u4e8c\\u4ee3\\uff5c\\u5bf5\\u7269\\u5916\\u51fa\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/pet_cube_backpack/\",\"object\":\"product\",\"object_id\":1427645,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/16/1427645/cube2-P32-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335732,\"title\":\"\\u5bf5\\u7269\\u5c08\\u7528\\u7259\\u5237 (\\u7d30\\u8edf\\u6bdb)\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/pet_toothbrush/\",\"object\":\"product\",\"object_id\":1102648,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/09/01/1102648/toothbrush_01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335735,\"title\":\"Philocomb \\u8c9d\\u6bbc\\u68b3\\uff08\\u6c6a\\u55b5\\u56b4\\u9078\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/philocomb/\",\"object\":\"product\",\"object_id\":1180668,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/02/05/1180668/philocomb-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1756226,\"title\":\"\\u73a9\\u5177\\u7e3d\\u52d5\\u54e1\\u6b3e\\uff5c\\u72d7\\u72d7\\u5f48\\u529b\\u7403\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-dogball/\",\"object\":\"product\",\"object_id\":1715571,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/05/25/1715571/Disney_tennis1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1756228,\"title\":\"\\u73a9\\u5177\\u7e3d\\u52d5\\u54e1\\u6b3e\\uff5c\\u5bf5\\u7269\\u6d74\\u5dfe\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-pettowel/\",\"object\":\"product\",\"object_id\":1715103,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/09/28/2009703/08_toystory-pettowel-1-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u65b0\\u6b3e\\u5f0f\\u4e0a\\u67b6\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1696269,\"title\":\"\\u5438\\u6c34\\u901f\\u4e7e\\u5bf5\\u7269\\u6d74\\u5dfe\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/towel/\",\"object\":\"product\",\"object_id\":1509906,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/08/02/1509906/03-towel-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u9650\\u91cf\\u8ca9\\u552e\\u4e2d\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335733,\"title\":\"TOLI \\u5bf5\\u7269\\u6b62\\u6ed1\\u5730\\u588a\\uff5cAK270 \\u6297\\u6c61\\u7cfb\\u5217\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toli270/\",\"object\":\"product\",\"object_id\":1198662,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/03/17/1198662/toli_270-1P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-sale\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335734,\"title\":\"TOLI \\u5bf5\\u7269\\u6b62\\u6ed1\\u5730\\u588a\\uff5cAK350 & AK1000 \\u5438\\u9707\\u7cfb\\u5217\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toli350/\",\"object\":\"product\",\"object_id\":1198992,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/03/17/1198992/toli_350-1P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-sale\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335736,\"title\":\"\\u6c6a\\u55b5 X PEHOM \\u806f\\u540d\\uff5c\\u72d7\\u72d7\\u96e8\\u8863\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/raincoat/\",\"object\":\"product\",\"object_id\":1327841,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/10/14/1327841/raincoat_P5-100x100.jpeg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335738,\"title\":\"ANKOMN \\u771f\\u7a7a\\u4fdd\\u9bae\\u7f50\\uff08\\u6c6a\\u55b5\\u56b4\\u9078\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/ankomn/\",\"object\":\"product\",\"object_id\":303482,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/07/03/303482/ankomn-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0,\"has_tab_bar\":false}],\"has_child\":true},{\"level\":1,\"ID\":1335739,\"title\":\"\\u8c93\\u54aa\\u5c08\\u5340\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/cat/\",\"object\":\"product_cat\",\"object_id\":59,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_cat-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":2,\"ID\":1693031,\"title\":\"\\u8c93\\u54aa\\u71b1\\u92b7\\u5fc5\\u8cb7\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e8%b2%93%e5%92%aa%e7%86%b1%e9%8a%b7top5/\",\"object\":\"product_cat\",\"object_id\":199,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":2046441,\"title\":\"\\u3010\\u6c6a\\u55b5\\u54c1\\u724c\\u6708\\u301110 \\u4ef6\\u65b0\\u54c1\\u514d\\u904b\\u4e2d\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/2312brand_10freeshipping/\",\"object\":\"custom\",\"object_id\":2046441,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/12/05/2045833/1TOP-BN-3-150x150.jpg\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"media\",\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/12/05/2045833/1TOP-BN-3-150x150.jpg\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":2050790,\"title\":\"\\u73a9\\u5177\\u7e3d\\u52d5\\u54e1\\u6b3e\\uff5c\\u96d9\\u5c64\\u8c93\\u6293\\u5c4b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-cathouse/\",\"object\":\"product\",\"object_id\":2024098,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/10/30/2024098/01-toystory-ca-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1805125,\"title\":\"\\u7d93\\u51788\\u5b57\\u578b\\u8c93\\u6293\\u677f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/mini-scratcher/\",\"object\":\"product\",\"object_id\":1777481,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/08/14/1777481/mini-scratcher-2@2x-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1713412,\"title\":\"\\u6f54\\u7259\\u8b77\\u7406\\u9175\\u7d20\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/oralcare/\",\"object\":\"product\",\"object_id\":1102590,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/09/01/1102590/oralcare_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u65b0\\u6539\\u7248\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1693040,\"title\":\"\\u5e7c\\u6bcd\\u8c93\\u7121\\u81a0\\u71df\\u990a\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/momkittycat/\",\"object\":\"product\",\"object_id\":143267,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/11/02/143267/momkittycat2022-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1693041,\"title\":\"Fantastic \\u7121\\u81a0\\u9bae\\u8089\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fantasticcat/\",\"object\":\"product\",\"object_id\":32602,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2015/03/17/6/fantasticcat2021-P1-2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1693045,\"title\":\"\\u76ca\\u751f\\u83cc\\u6d88\\u81ed\\u8c46\\u8150\\u7802\\uff08\\u7c73\\u7c92\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/shortcatlitter/\",\"object\":\"product\",\"object_id\":1517933,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/08/15/1517933/shortcatlitter-P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1693043,\"title\":\"\\u6392\\u6bdb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/hairball_relief_digestive_aid/\",\"object\":\"product\",\"object_id\":31215,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2017/03/16/31215/hairball_relief_digestive_aid-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1693042,\"title\":\"\\u7121\\u81a0\\u9ede\\u5fc3\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/yumcatcan/\",\"object\":\"product\",\"object_id\":1166501,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/01/19/1166501/snackcan_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}}],\"item_count\":8,\"has_tab_bar\":false},{\"level\":2,\"ID\":1336549,\"title\":\"\\u8fea\\u58eb\\u5c3c\\u5c08\\u5340\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/disney/\",\"object\":\"custom\",\"object_id\":1336549,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M6.72,15.63V12a.44.44,0,0,1,.35-.43.44.44,0,0,1,.5.25l.84,1.8V12a.45.45,0,0,1,.89,0v3.63a.45.45,0,0,1-.35.43H8.86a.46.46,0,0,1-.41-.26L7.61,14v1.62a.45.45,0,0,1-.89,0Zm3.38,0a.44.44,0,0,0,.44.44h1.69a.45.45,0,1,0,0-.89H11v-.92h1.24a.45.45,0,1,0,0-.89H11v-.92h1.24a.45.45,0,1,0,0-.89H10.54a.44.44,0,0,0-.44.44Zm3.79-3.73a.45.45,0,0,0-.54-.33.45.45,0,0,0-.33.53l.85,3.63a.44.44,0,0,0,.86,0L15.14,14l.42,1.77a.43.43,0,0,0,.43.34.44.44,0,0,0,.43-.34l.85-3.63a.45.45,0,0,0-.34-.53.44.44,0,0,0-.53.33L16,13.67l-.41-1.77a.45.45,0,0,0-.87,0l-.41,1.77Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M15.26,5.33v1.1H14.07V5.33a2.07,2.07,0,1,0-4.14,0v1.1H8.74V5.33a3.26,3.26,0,0,1,6.52,0ZM18.81,7a.59.59,0,0,1,.59.56l.69,12.14A2.07,2.07,0,0,1,18,21.93H6a2.07,2.07,0,0,1-2.07-2.2L4.6,7.59A.59.59,0,0,1,5.19,7Zm.1,12.77L18.25,8.21H5.75L5.09,19.8a.9.9,0,0,0,.25.66.85.85,0,0,0,.64.28H18a.85.85,0,0,0,.64-.28A.9.9,0,0,0,18.91,19.8Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1684303,\"title\":\"\\u539f\\u8089\\u96f6\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-snack/\",\"object\":\"product\",\"object_id\":1656955,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1656955/Disney_snack-12-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1684301,\"title\":\"\\u6392\\u6bdb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-hairballrelief/\",\"object\":\"product\",\"object_id\":1657061,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1657061/Disney_hairball-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u8c93\\u54aa\\u4eba\\u6c23Top1\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1684302,\"title\":\"\\u9c49\\u86cb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-turtleegg/\",\"object\":\"product\",\"object_id\":1657058,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1657058/Disney_hairb-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1756214,\"title\":\"\\u8c93\\u54aa\\u76ca\\u751f\\u83cc\\u6c90\\u6d74\\u4e73\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-catspa/\",\"object\":\"product\",\"object_id\":1705755,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/05/11/1705755/toystory-catspa_P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u6155\\u65af\\u6ce1\\u6ce1\\u4e00\\u6c96\\u5373\\u6de8\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1756217,\"title\":\"\\u7279\\u6fc3\\u8c93\\u8349\\u7403\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-catball/\",\"object\":\"product\",\"object_id\":1715549,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/05/25/1715549/01_toystory-catball_toystory-ca-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1756218,\"title\":\"\\u5438\\u6c34\\u901f\\u4e7e\\u5bf5\\u7269\\u6d74\\u5dfe\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-pettowel/\",\"object\":\"product\",\"object_id\":1715103,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/09/28/2009703/08_toystory-pettowel-1-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u65b0\\u6b3e\\u5f0f\\u4e0a\\u67b6\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":2050294,\"title\":\"\\u96d9\\u5c64\\u8c93\\u6293\\u5c4b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-cathouse/\",\"object\":\"product\",\"object_id\":2024098,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/10/30/2024098/01-toystory-ca-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u4e09\\u5165\\u7d44\\u512a\\u60e0\\u4e2d\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}}],\"item_count\":0,\"has_tab_bar\":false},{\"level\":2,\"ID\":1336523,\"title\":\"\\u9ad4\\u9a57\\u7d44\\u5c08\\u5340\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/free_shipping/\",\"object\":\"custom\",\"object_id\":1336523,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M10.3,7.74v.65h1.26a.3.3,0,0,1,0,.59H10.3v.95a.3.3,0,0,1-.6,0V7.44a.31.31,0,0,1,.3-.3h1.56a.3.3,0,0,1,0,.6ZM13.47,9l.9.72a.31.31,0,0,1,0,.42.3.3,0,0,1-.23.11.26.26,0,0,1-.18-.07L12.92,9.3v.63a.3.3,0,1,1-.59,0V8.69h0V7.44a.3.3,0,0,1,.3-.3h.77a1,1,0,0,1,1.08.92A1,1,0,0,1,13.47,9Zm.41-.92c0-.17-.22-.32-.48-.32h-.48v.65h.48C13.66,8.39,13.88,8.24,13.88,8.06Zm2.83-.32a.3.3,0,0,0,0-.6H15.35a.31.31,0,0,0-.3.3V9.77a.3.3,0,0,0,.3.3h1.36a.3.3,0,0,0,0-.59H15.64V8.9h1.07a.3.3,0,0,0,0-.59H15.64V7.74ZM19.33,8.9a.3.3,0,1,0,0-.59H18.27V7.74h1.06a.3.3,0,0,0,0-.6H18a.3.3,0,0,0-.29.3V9.77a.29.29,0,0,0,.29.3h1.36a.3.3,0,1,0,0-.59H18.27V8.9Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M2.67,17.28H3.92a3.54,3.54,0,0,1,.43-1.19H3.26V13.22H20.74v2.87H20a4,4,0,0,1,.43,1.19h.95a.6.6,0,0,0,.6-.59V3.35a.59.59,0,0,0-.6-.59H8a.58.58,0,0,0-.59.59V5.43H5.33a.58.58,0,0,0-.47.23,14.32,14.32,0,0,0-2.62,6.56.59.59,0,0,0-.17.41v4.06A.6.6,0,0,0,2.67,17.28ZM7.41,6.61V12H3.48A13.36,13.36,0,0,1,5.63,6.61ZM8.59,6V3.94H20.74V12H8.59Zm4.22,11.26H11.49a4,4,0,0,0-.43-1.19h2.18A3.54,3.54,0,0,0,12.81,17.28ZM7.7,14.72A3.26,3.26,0,1,0,11,18,3.27,3.27,0,0,0,7.7,14.72ZM9.78,18A2.08,2.08,0,1,1,7.7,15.91,2.08,2.08,0,0,1,9.78,18Zm6.81-3.26A3.26,3.26,0,1,0,19.85,18,3.27,3.27,0,0,0,16.59,14.72ZM18.67,18a2.08,2.08,0,1,1-2.08-2.07A2.08,2.08,0,0,1,18.67,18Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1335741,\"title\":\"\\u5e7c\\u8c93\\uff5c\\u71df\\u990a\\u7f50\\u9ad4\\u9a57\\u7d44\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/kittycantry/\",\"object\":\"product\",\"object_id\":1231626,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/05/18/1231626/kittycantry_220620-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335742,\"title\":\"\\u5168\\u9f61\\uff5c\\u9bae\\u8089\\u7f50\\u7d9c\\u5408\\u9ad4\\u9a57\\u7d44\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/catcan_try/\",\"object\":\"product\",\"object_id\":1022895,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/03/26/1022895/catcan_try-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335743,\"title\":\"\\u5168\\u9f61\\uff5c\\u751f\\u98df\\u65b0\\u624b\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/try-cat-rawfood/\",\"object\":\"product\",\"object_id\":90021,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/06/11/90021/try-cat-rawfood-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0,\"has_tab_bar\":false},{\"level\":2,\"ID\":1335740,\"title\":\"\\u8c93\\u54aa\\u4e3b\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e8%b2%93%e5%92%aa%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1335740,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M9.46,5.11a2.81,2.81,0,0,1,.65.07,4.4,4.4,0,0,1,7.56,3.06v.29a3.72,3.72,0,0,1-1.18.57V8.24A3.23,3.23,0,0,0,13.27,5a3.19,3.19,0,0,0-2.5,1.2.59.59,0,0,1-.66.19,1.82,1.82,0,0,0-.65-.12,2,2,0,0,0-2,2V9.1a3.72,3.72,0,0,1-1.18-.57V8.24A3.13,3.13,0,0,1,9.46,5.11Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M19.44,8.4a.59.59,0,0,0-1.14.21c0,.57-2.23,1.7-6.3,1.7S5.7,9.18,5.7,8.61A.59.59,0,0,0,4.56,8.4l-2.3,6.12a.52.52,0,0,0,0,.21c0,2.43,6.27,3.65,9.78,3.65s9.78-1.22,9.78-3.65a.52.52,0,0,0,0-.21ZM12,17.2c-4.22,0-8.35-1.48-8.58-2.39L5.25,9.93c1.27,1,4,1.56,6.75,1.56s5.48-.53,6.75-1.56l1.83,4.88C20.35,15.72,16.22,17.2,12,17.2Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1336513,\"title\":\"\\u51b7\\u51cd\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e8%b2%93%e5%92%aa%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1336513,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335744,\"title\":\"\\u751f\\u98df\\u9910\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/cathpprawfood/\",\"object\":\"product\",\"object_id\":7211,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2015/12/10/7211/cathpprawfood-01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336514,\"title\":\"\\u5e38\\u6eab\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e8%b2%93%e5%92%aa%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1336514,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335745,\"title\":\"\\u51cd\\u4e7e\\u751f\\u98df\\u9910\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/catfreezedriedrawfood/\",\"object\":\"product\",\"object_id\":14152,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2016/07/06/14152/freezedriedrawfood-CAT-P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335746,\"title\":\"\\u5168\\u9f61\\uff5cFantastic \\u7121\\u81a0\\u9bae\\u8089\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fantasticcat/\",\"object\":\"product\",\"object_id\":32602,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2015/03/17/6/fantasticcat2021-P1-2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335752,\"title\":\"\\u5e7c\\u8c93\\uff5c\\u7121\\u81a0\\u71df\\u990a\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/momkittycat/\",\"object\":\"product\",\"object_id\":143267,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/11/02/143267/momkittycat2022-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335751,\"title\":\"\\u8001\\u8c93\\uff5c\\u7121\\u81a0\\u4f4e\\u78f7\\u9280\\u990a\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/oldcatcan/\",\"object\":\"product\",\"object_id\":178594,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/04/01/178594/oldcatcan-P1-100x100.jpeg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1705738,\"title\":\"\\u4f4e\\u78f7\\u4f4e\\u86cb\\u767d\\u4e3b\\u98df\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/kidneyhealth/\",\"object\":\"product\",\"object_id\":1667637,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/03/15/1667637/\\u4f4e\\u78f7\\u7f50_P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335747,\"title\":\"\\u7121\\u81a0\\u6311\\u5634\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/pickycat/\",\"object\":\"product\",\"object_id\":382055,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/08/28/382055/pickycat-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335749,\"title\":\"\\u7121\\u81a0\\u4f4e\\u8102\\u7f50\\u00a0\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/lowfatcatc/\",\"object\":\"product\",\"object_id\":1202073,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/03/24/1202073/lowfatcatC-P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u65b0\\u53e3\\u5473\\u4e0a\\u5e02\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335748,\"title\":\"\\u7121\\u81a0\\u8089\\u84c9\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/catcans-ground-meat/\",\"object\":\"product\",\"object_id\":299988,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/07/01/299988/groundmeat-K1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335753,\"title\":\"\\u9bae\\u98df\\u9910\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/catfreshfood/\",\"object\":\"product\",\"object_id\":301892,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/07/02/301892/catfreshfood_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336515,\"title\":\"\\u751f\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e8%b2%93%e5%92%aa%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1336515,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1336536,\"title\":\"\\u751f\\u98df\\u9910\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/cathpprawfood/\",\"object\":\"product\",\"object_id\":7211,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2015/12/10/7211/cathpprawfood-01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336535,\"title\":\"\\u51cd\\u4e7e\\u751f\\u98df\\u9910\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/catfreezedriedrawfood/\",\"object\":\"product\",\"object_id\":14152,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2016/07/06/14152/freezedriedrawfood-CAT-P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336517,\"title\":\"\\u4e3b\\u98df\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e8%b2%93%e5%92%aa%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1336517,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1336539,\"title\":\"\\u5168\\u9f61\\uff5cFantastic \\u7121\\u81a0\\u9bae\\u8089\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fantasticcat/\",\"object\":\"product\",\"object_id\":32602,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2015/03/17/6/fantasticcat2021-P1-2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336540,\"title\":\"\\u5e7c\\u8c93\\uff5c\\u7121\\u81a0\\u71df\\u990a\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/momkittycat/\",\"object\":\"product\",\"object_id\":143267,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/11/02/143267/momkittycat2022-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336541,\"title\":\"\\u8001\\u8c93\\uff5c\\u7121\\u81a0\\u4f4e\\u78f7\\u9280\\u990a\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/oldcatcan/\",\"object\":\"product\",\"object_id\":178594,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/04/01/178594/oldcatcan-P1-100x100.jpeg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1705737,\"title\":\"\\u4f4e\\u78f7\\u4f4e\\u86cb\\u767d\\u4e3b\\u98df\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/kidneyhealth/\",\"object\":\"product\",\"object_id\":1667637,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/03/15/1667637/\\u4f4e\\u78f7\\u7f50_P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336538,\"title\":\"\\u7121\\u81a0\\u6311\\u5634\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/pickycat/\",\"object\":\"product\",\"object_id\":382055,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/08/28/382055/pickycat-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336537,\"title\":\"\\u7121\\u81a0\\u4f4e\\u8102\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/lowfatcatc/\",\"object\":\"product\",\"object_id\":1202073,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/03/24/1202073/lowfatcatC-P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u65b0\\u53e3\\u5473\\u4e0a\\u67b6\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336542,\"title\":\"\\u7121\\u81a0\\u8089\\u84c9\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/catcans-ground-meat/\",\"object\":\"product\",\"object_id\":299988,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/07/01/299988/groundmeat-K1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336519,\"title\":\"\\u9bae\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e8%b2%93%e5%92%aa%e4%b8%bb%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1336519,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1336544,\"title\":\"\\u9bae\\u98df\\u9910\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/catfreshfood/\",\"object\":\"product\",\"object_id\":301892,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/07/02/301892/catfreshfood_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0}],\"item_count\":0,\"has_tab_bar\":true},{\"level\":2,\"ID\":1335757,\"title\":\"\\u4fdd\\u5065\\u7cfb\\u5217\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e4%bf%9d%e5%81%a5%e5%93%81/\",\"object\":\"custom\",\"object_id\":1335757,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M18.58,14.11h-2.2v-2.2a.6.6,0,0,0-.59-.6H13a.59.59,0,0,0-.59.6v2.2H10.19a.6.6,0,0,0-.59.59v2.8a.59.59,0,0,0,.59.59H12.4V20.3a.59.59,0,0,0,.59.59h2.8a.6.6,0,0,0,.59-.59V18.09h2.2a.58.58,0,0,0,.59-.59V14.7A.59.59,0,0,0,18.58,14.11ZM18,16.91h-2.2a.59.59,0,0,0-.6.59v2.2H13.58V17.5a.58.58,0,0,0-.59-.59H10.78V15.3H13a.59.59,0,0,0,.59-.6V12.5h1.61v2.2a.6.6,0,0,0,.6.6H18Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M11.8,19H6.64A.64.64,0,0,1,6,18.39V9.82a.63.63,0,0,1,.63-.63A1.57,1.57,0,0,0,8.21,7.62V7.46h3.23v.16A1.57,1.57,0,0,0,13,9.19a.63.63,0,0,1,.63.63v.9h1.18v-.9A1.81,1.81,0,0,0,13,8a.39.39,0,0,1-.39-.39V7.46h.51a.58.58,0,0,0,.59-.59V3.7a.59.59,0,0,0-.59-.59H6.52a.59.59,0,0,0-.59.59V6.87a.58.58,0,0,0,.59.59H7v.16A.39.39,0,0,1,6.64,8,1.81,1.81,0,0,0,4.83,9.82v8.57a1.81,1.81,0,0,0,1.81,1.82H11.8Zm.74-12.75H7.11v-2h5.43Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1335758,\"title\":\"\\u8178\\u80c3\\u5065\\u5eb7\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1335758,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1685395,\"title\":\"\\u8fea\\u58eb\\u5c3c\\u6b3e\\uff5c\\u6392\\u6bdb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-hairballrelief/\",\"object\":\"product\",\"object_id\":1657061,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1657061/Disney_hairball-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335759,\"title\":\"\\u6392\\u6bdb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/hairball_relief_digestive_aid/\",\"object\":\"product\",\"object_id\":31215,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2017/03/16/31215/hairball_relief_digestive_aid-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1432338,\"title\":\"\\u8178\\u80c3\\u76ca\\u751f\\u83cc\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/probiotics-enzyme/\",\"object\":\"product\",\"object_id\":1419818,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/03/1419818/probiotics-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1491109,\"title\":\"\\u8edf\\u4fbf\\u524b\\u661f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/digestive-relief/\",\"object\":\"product\",\"object_id\":1325071,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/10/09/1325071/digestive-relief-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":2019200,\"title\":\"\\u9ad4\\u614b\\u7ba1\\u7406\\u76ca\\u751f\\u83cc\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fit-healthy-probiotics/\",\"object\":\"product\",\"object_id\":1783881,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/08/24/1783881/01fit-healthy-probiotics-home-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336495,\"title\":\"\\u773c\\u775b\\u4fdd\\u990a\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336495,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335760,\"title\":\"\\u96e2\\u80fa\\u9178\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/l-lysine/\",\"object\":\"product\",\"object_id\":56709,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2017/11/01/56709/l-lysine-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335768,\"title\":\"\\u8b77\\u773c\\u597d\\u660e\\u4eae\\u4fdd\\u990a\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/eyeshealth/\",\"object\":\"product\",\"object_id\":151568,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/12/04/151568/eyeshealth_P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1469053,\"title\":\"Omega-3 \\u5168\\u4fdd\\u990a\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil-spray/\",\"object\":\"product\",\"object_id\":1448193,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/19/1448193/fishoil-spray-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u53f0\\u9996\\u5275\\u9b5a\\u6cb9\\u5674\\u9727\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336667,\"title\":\"85% Omega-3 \\u6a5f\\u80fd\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil_q10/\",\"object\":\"product\",\"object_id\":1079706,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/07/1079706/fish_oil_2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336497,\"title\":\"\\u76ae\\u819a\\u7167\\u8b77\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336497,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1428813,\"title\":\"\\u76ae\\u819a\\u76ca\\u751f\\u83cc\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/probiotics-allergic-symptom/\",\"object\":\"product\",\"object_id\":1419870,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/03/1419870/probiotics-skin-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1685388,\"title\":\"\\u8fea\\u58eb\\u5c3c\\u7cfb\\u5217\\uff5c\\u4eae\\u6bdb\\u8b77\\u819a\\u9c49\\u86cb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-turtleegg/\",\"object\":\"product\",\"object_id\":1657058,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1657058/Disney_hairb-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335763,\"title\":\"\\u4eae\\u6bdb\\u8b77\\u819a\\u9c49\\u86cb\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/turtleegg/\",\"object\":\"product\",\"object_id\":177195,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/03/19/177195/turtleegg_P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1469054,\"title\":\"Omega-3 \\u5168\\u4fdd\\u990a\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil-spray/\",\"object\":\"product\",\"object_id\":1448193,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/19/1448193/fishoil-spray-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336509,\"title\":\"85% Omega-3 \\u6a5f\\u80fd\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil_q10/\",\"object\":\"product\",\"object_id\":1079706,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/07/1079706/fish_oil_2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336508,\"title\":\"\\u514d\\u75ab\\u529b\\u63d0\\u5347\\u4fdd\\u990a\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/immune_systemup/\",\"object\":\"product\",\"object_id\":150044,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/11/27/150044/immune_systemup_2022-P1-2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336498,\"title\":\"\\u5fc3\\u81df\\uff0f\\u8166\\u90e8\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336498,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335761,\"title\":\"\\u725b\\u78fa\\u9178\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/taurine/\",\"object\":\"product\",\"object_id\":158744,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/01/07/158744/taurine-P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1469056,\"title\":\"Omega-3 \\u5168\\u4fdd\\u990a\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil-spray/\",\"object\":\"product\",\"object_id\":1448193,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/19/1448193/fishoil-spray-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u53f0\\u9996\\u5275\\u9b5a\\u6cb9\\u5674\\u9727\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335771,\"title\":\"85% Omega-3 \\u6a5f\\u80fd\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil_q10/\",\"object\":\"product\",\"object_id\":1079706,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/07/1079706/fish_oil_2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336499,\"title\":\"\\u60c5\\u7dd2\\u7a69\\u5b9a\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336499,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335769,\"title\":\"\\u60c5\\u7dd2\\u597d\\u653e\\u9b06\\u4fdd\\u990a\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/stressrelief/\",\"object\":\"product\",\"object_id\":512005,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/11/18/512005/stressrelief-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335770,\"title\":\"\\u7d13\\u58d3\\u80fa\\u57fa\\u9178\\uff08\\u7a81\\u767c\\u58d3\\u529b\\u7528\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/petcalm/\",\"object\":\"product\",\"object_id\":727477,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/01/08/727477/petcalm-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336511,\"title\":\"FELIWAY \\u8c93\\u54aa\\u8cbb\\u6d1b\\u8499\\uff08\\u6c6a\\u55b5\\u56b4\\u9078\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/feliway/\",\"object\":\"product\",\"object_id\":1051265,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/04/17/1051265/feliway-01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336500,\"title\":\"\\u6ccc\\u5c3f\\u9053\\u5065\\u5eb7\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336500,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1801315,\"title\":\"\\u6ccc\\u5c3f\\u9053\\u5065\\u5eb7\\u4fdd\\u990a\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/urinary-health-support-2/\",\"object\":\"product\",\"object_id\":1767851,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/07/31/1767851/01_urinary-health-support-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u65b0\\u5347\\u7d1a\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336496,\"title\":\"\\u7259\\u9f52\\u8b77\\u7406\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336496,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1710175,\"title\":\"\\u6f54\\u7259\\u8b77\\u7406\\u9175\\u7d20\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/oralcare/\",\"object\":\"product\",\"object_id\":1102590,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/09/01/1102590/oralcare_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u65b0\\u6539\\u7248\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1336506,\"title\":\"\\u5bf5\\u7269\\u5c08\\u7528\\u7259\\u5237\\uff08\\u7d30\\u8edf\\u6bdb\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/pet_toothbrush/\",\"object\":\"product\",\"object_id\":1102648,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/09/01/1102648/toothbrush_01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336501,\"title\":\"\\u9867\\u597d\\u514d\\u75ab\\u529b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1336501,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335767,\"title\":\"\\u514d\\u75ab\\u529b\\u63d0\\u5347\\u4fdd\\u990a\\u7c89\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/immune_systemup/\",\"object\":\"product\",\"object_id\":150044,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/11/27/150044/immune_systemup_2022-P1-2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1335765,\"title\":\"\\u95dc\\u7bc0\\u4fdd\\u990a\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplements/\",\"object\":\"custom\",\"object_id\":1335765,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335772,\"title\":\"UC-II \\u4fdd\\u990a\\u7c89\\uff08\\u65e5\\u5e38\\u7248\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/ucll/\",\"object\":\"product\",\"object_id\":67118,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/01/24/67118/ucll-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335773,\"title\":\"MSM \\u4fdd\\u990a\\u7c89\\uff08\\u52a0\\u5f37\\u7248\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/msm/\",\"object\":\"product\",\"object_id\":72452,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/03/02/72452/MSM-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1469057,\"title\":\"Omega-3 \\u5168\\u4fdd\\u990a\\u9b5a\\u6cb9\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/fishoil-spray/\",\"object\":\"product\",\"object_id\":1448193,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/19/1448193/fishoil-spray-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5168\\u53f0\\u9996\\u5275\\u9b5a\\u6cb9\\u5674\\u9727\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0}],\"item_count\":0,\"has_tab_bar\":true},{\"level\":2,\"ID\":1335775,\"title\":\"\\u526f\\u98df&\\u96f6\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e7%8a%ac%e8%b2%93%e9%9b%b6%e9%a3%9f/\",\"object\":\"custom\",\"object_id\":1335775,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M16.89,12.77V11.58H15.71a.59.59,0,1,1,0-1.18h1.18V9.21a.6.6,0,0,1,1.19,0V10.4h1.18a.59.59,0,1,1,0,1.18H18.08v1.19a.6.6,0,0,1-1.19,0Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M12.77,5,12.35,5h-.1a.66.66,0,0,1-.49-.24l0,0a5.16,5.16,0,0,0-4-1.86h0a5.06,5.06,0,0,0-2.11.45A5.18,5.18,0,0,0,2.84,6.5a5.17,5.17,0,0,0,7.52,6l.11-.07.08,0L14.76,10a2.75,2.75,0,0,0,1.29-1.78c0-.1,0-.19.05-.28l.67-.39a2.5,2.5,0,0,0,.61.09,2.07,2.07,0,0,0,1.94-2.78,2,2,0,0,0-.42-.69,2,2,0,0,0-.4-.71,2,2,0,0,0-1.57-.72h0a2,2,0,0,0-.8.16,2.09,2.09,0,0,0-1.22,1.45l-.79.46L13.89,5a2.32,2.32,0,0,0-.53,0A2.88,2.88,0,0,0,12.77,5Zm3.31,0a.87.87,0,0,1,.51-1,.8.8,0,0,1,.34-.07.91.91,0,0,1,.67.3.88.88,0,0,1,.21.58.88.88,0,0,1,.11,1.47.94.94,0,0,1-.54.18.88.88,0,0,1-.63-.26L15.39,7a.67.67,0,0,1-.91-.24.67.67,0,0,1,.24-.9Zm-6.2,6.43-.12.07a4,4,0,0,1-5.44-1.43,4,4,0,0,1,6.5-4.55l0,0a1.84,1.84,0,0,0,1.41.69,1.45,1.45,0,0,0,.35,0L13,6.12a.83.83,0,0,1,.22,0,1.83,1.83,0,0,0,.23,1.22,1.88,1.88,0,0,0,1.35.9,1.55,1.55,0,0,1-.65.74L10,11.4ZM5.37,19.75A6.93,6.93,0,0,0,10,21.26h.38a15,15,0,0,0,5.89-1.57,6.5,6.5,0,0,0,2.74,1,1.36,1.36,0,0,0,1.28-.5,1.65,1.65,0,0,0,.25-1.6,4.34,4.34,0,0,1-.1-2.78,1.58,1.58,0,0,0-.36-1.57,1.32,1.32,0,0,0-1.31-.41,6.58,6.58,0,0,0-2.66,1.25,15,15,0,0,0-6-1.11c-3.27.13-5.78,1.81-5.71,3.84A2.68,2.68,0,0,0,5.37,19.75ZM16,16.37a.61.61,0,0,0,.7-.11A5,5,0,0,1,19.08,15a.18.18,0,0,1,.17.07.42.42,0,0,1,.09.41,5.43,5.43,0,0,0,.12,3.56.42.42,0,0,1-.06.42s-.1.1-.17.08a5.05,5.05,0,0,1-2.49-1,.6.6,0,0,0-.7-.06,13.31,13.31,0,0,1-5.68,1.6,6.07,6.07,0,0,1-4.18-1.18,1.55,1.55,0,0,1-.56-1.07c0-1.18,1.79-2.51,4.58-2.61h.36A13.17,13.17,0,0,1,16,16.37Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1335756,\"title\":\"\\u7121\\u81a0\\u9ede\\u5fc3\\u7f50\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/yumcatcan/\",\"object\":\"product\",\"object_id\":1166501,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/01/19/1166501/snackcan_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1419044,\"title\":\"\\u96f6\\u4e73\\u7cd6\\u725b\\u4e73\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/petmilk/\",\"object\":\"product\",\"object_id\":1411955,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/02/18/1411955/petmilk-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1384206,\"title\":\"\\u5929\\u7136\\u8d77\\u53f8\\u7403\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/cheeseball/\",\"object\":\"product\",\"object_id\":1323273,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/10/07/1323273/cheeseball-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1685389,\"title\":\"\\u8fea\\u58eb\\u5c3c\\u6b3e\\uff5c\\u539f\\u8089\\u96f6\\u98df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/disney-snack/\",\"object\":\"product\",\"object_id\":1656955,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/24/1656955/Disney_snack-12-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335776,\"title\":\"\\u539f\\u8089\\u96f6\\u98df\\uff5c\\u5c71\\u5473\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/mountainsnack/\",\"object\":\"product\",\"object_id\":11560,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2016/04/29/11560/snackm210618-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335777,\"title\":\"\\u539f\\u8089\\u96f6\\u98df\\uff5c\\u6d77\\u5473\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/seasnack/\",\"object\":\"product\",\"object_id\":17112,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2016/08/17/17112/snacks210618-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1755668,\"title\":\"\\u539f\\u8089\\u96f6\\u98df\\uff5c\\u9b77\\u9b5a\\u9999\\u9b06\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/squidsnack/\",\"object\":\"product\",\"object_id\":1732261,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/06/16/1732261/\\u671f\\u9593\\u9650\\u5b9a\\u7522\\u54c1\\u5716_\\u5c71\\u5473\\u9996\\u5716-K-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u9650\\u91cf\\u8ca9\\u552e\\u4e2d\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335778,\"title\":\"\\u990a\\u751f\\u98df\\u88dc\\u96de\\u8089\\u9905\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/meatsnack/\",\"object\":\"product\",\"object_id\":105592,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/08/27/105592/meatsnack-01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335780,\"title\":\"\\u8c93\\u8584\\u8377\\u68d2\\u68d2\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/catnip/\",\"object\":\"product\",\"object_id\":2883,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2015/12/10/2883/catnip-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335781,\"title\":\"\\u6728\\u5929\\u84fc\\uff0f\\u87f2\\u766d\\u679c\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/catsprayseeds/\",\"object\":\"product\",\"object_id\":149809,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/11/26/149809/catsprayseeds-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335779,\"title\":\"\\u8c93\\u8349\\u65b0\\u9bae\\u683d\\u57f9\\u76d2\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/catgrass/\",\"object\":\"product\",\"object_id\":3299,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2015/06/04/3299/catgrass-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0,\"has_tab_bar\":false},{\"level\":2,\"ID\":1335787,\"title\":\"\\u8c93\\u7802\\u7cfb\\u5217\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/catlitterseries/\",\"object\":\"product_cat\",\"object_id\":176,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M6.05,17.6a2.6,2.6,0,0,1,.63-.12l.36,0a3.08,3.08,0,0,0,2.38-1.09,6.7,6.7,0,0,1,5-2.48,10,10,0,0,1,3.8.71V16a7.15,7.15,0,0,0-3.8-.89,5.48,5.48,0,0,0-4.11,2.08A4.23,4.23,0,0,1,7,18.65H6.85A3.37,3.37,0,0,1,6.05,17.6Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M7.47,16.84a5.43,5.43,0,0,1,0-.71A13.66,13.66,0,0,1,8.5,11.29,3.18,3.18,0,0,1,7.43,8.75a4.78,4.78,0,0,1,.1-1A4.47,4.47,0,0,1,8.74,3.63,1.75,1.75,0,0,1,10,3.11a1.78,1.78,0,0,1,1.47.79l.14.2.41,0,.41,0,.14-.2A1.78,1.78,0,0,1,14,3.11a1.75,1.75,0,0,1,1.24.52,4.47,4.47,0,0,1,1.21,4.12,4.78,4.78,0,0,1,.1,1,3.18,3.18,0,0,1-1.07,2.54,12.32,12.32,0,0,1,.71,2.15A12,12,0,0,0,15,13.31a6.45,6.45,0,0,0-1.09-2.46,2,2,0,0,0,1.53-2.1,3.32,3.32,0,0,0-.15-1,3.27,3.27,0,0,0-.82-3.28A.54.54,0,0,0,14,4.3a.58.58,0,0,0-.48.25l-.44.66a2,2,0,0,0-.12.21,3.28,3.28,0,0,0-2,0,2,2,0,0,0-.12-.21l-.44-.66A.58.58,0,0,0,10,4.3a.54.54,0,0,0-.4.17,3.27,3.27,0,0,0-.82,3.28,3.32,3.32,0,0,0-.15,1,2,2,0,0,0,1.53,2.1c-.83.89-1.53,3.75-1.53,5.28a1.21,1.21,0,0,0,0,.19A2.37,2.37,0,0,1,7.47,16.84ZM5.19,10.36a.6.6,0,0,0-1.19,0v6A5.12,5.12,0,0,0,7.29,21a6.44,6.44,0,0,0,2.45.46h4.61a5.71,5.71,0,0,0,5.11-2.91A4.67,4.67,0,0,0,20,16.3V10.36a.6.6,0,0,0-1.19,0V16.3A3.56,3.56,0,0,1,18.42,18a4.58,4.58,0,0,1-4.07,2.28H9.74a5,5,0,0,1-2-.37,3.86,3.86,0,0,1-2.56-3.51Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1554134,\"title\":\"\\u76ca\\u751f\\u83cc\\u6d88\\u81ed\\u8c46\\u8150\\u7802\\uff5c\\u7c73\\u7c92\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/shortcatlitter/\",\"object\":\"product\",\"object_id\":1517933,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/08/15/1517933/shortcatlitter-P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335789,\"title\":\"\\u76ca\\u751f\\u83cc\\u6d88\\u81ed\\u8c46\\u8150\\u7802\\uff5c\\u689d\\u578b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/tofucatlitter/\",\"object\":\"product\",\"object_id\":1244624,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/07/27/1275103/tofucatlitter-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1713462,\"title\":\"\\u76ca\\u751f\\u83cc\\u82b1\\u8349\\u8c46\\u8150\\u7802\\uff5c\\u689d\\u578b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/tofucatlitterflower/\",\"object\":\"product\",\"object_id\":1681958,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/04/09/1681958/1-1-1-1-1-1-1-1-1-1-1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"100%\\u5929\\u7136\\u82b1\\u8349\\u9999\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1336526,\"title\":\"\\u5bc4\\u5009\\u5c08\\u5340\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/warehouse/\",\"object\":\"page\",\"object_id\":1241155,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/03/955206/warehouse_SM2.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5bc4\\u500972\\u5305\\u8d08\\u6c6a\\u55b5\\u5e63\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-sale\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1427081,\"title\":\"\\u5c08\\u5229\\u5c0f\\u767d\\u9be8\\u7802\\u76c6\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/beluga-litterbox/\",\"object\":\"product\",\"object_id\":1424831,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/11/1424831/beluga-litterbox-P1-3-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1424201,\"title\":\"\\u77fd\\u81a0\\u62fc\\u63a5\\u843d\\u7802\\u588a\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/littermat/\",\"object\":\"product\",\"object_id\":1421572,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/06/1421572/littermat-P8-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1378187,\"title\":\"\\u5c08\\u5229 8 \\u5b57\\u5feb\\u7be9\\u8c93\\u7802\\u93df\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/litterscoop/\",\"object\":\"product\",\"object_id\":1364373,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/11/25/1364373/litterscoop-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u69ae\\u7372\\u5fb7\\u570b iF \\u8a2d\\u8a08\\u734e\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":6,\"has_tab_bar\":false},{\"level\":2,\"ID\":1335782,\"title\":\"\\u6c90\\u6d74&\\u6f54\\u6de8\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/clean/\",\"object\":\"custom\",\"object_id\":1335782,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M3.56,13.36a.6.6,0,1,1,0-1.19H4.3V11a.59.59,0,0,1,1.18,0v1.18h.74a.6.6,0,0,1,0,1.19H5.48v1.18a.59.59,0,1,1-1.18,0V13.36ZM20.52,8H19V5.33a.59.59,0,1,0-1.18,0V8H16.22a.59.59,0,0,0,0,1.18h1.56v2.64a.59.59,0,1,0,1.18,0V9.15h1.56a.59.59,0,0,0,0-1.18Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M10.15,10.2A2.72,2.72,0,0,0,8,12.85v5.92a2.71,2.71,0,0,0,2.71,2.71h2.54A2.71,2.71,0,0,0,16,18.77V12.85a2.72,2.72,0,0,0-2.12-2.65V8.33l1.35-2.68a2.17,2.17,0,0,0-.1-2.11,2.15,2.15,0,0,0-1.84-1H8.2a.59.59,0,0,0-.59.59V4.52A.58.58,0,0,0,8,5.06l.22.1.15.07A5.79,5.79,0,0,1,7.13,7,1,1,0,0,0,6.9,8.15a1,1,0,0,0,.95.63h.44a3.09,3.09,0,0,0,1.86-.61v0h0ZM8.22,7.6A6.79,6.79,0,0,0,9.3,6a3.44,3.44,0,0,1,.56.86L9.67,7a1.94,1.94,0,0,1-1.38.57ZM8.8,3.7h4.48a1,1,0,0,1,.88,1.42L12.92,7.6H11.3A4.53,4.53,0,0,0,8.8,4.14Zm6,15.07a1.54,1.54,0,0,1-1.53,1.53H10.74a1.53,1.53,0,0,1-1.52-1.53V12.85a1.53,1.53,0,0,1,1.52-1.53.59.59,0,0,0,.6-.59v-2h1.35v2a.59.59,0,0,0,.59.59,1.54,1.54,0,0,1,1.53,1.53Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1756229,\"title\":\"\\u8c93\\u54aa\\u76ca\\u751f\\u83cc\\u6c90\\u6d74\\u4e73\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-catspa/\",\"object\":\"product\",\"object_id\":1705755,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/05/11/1705755/toystory-catspa_P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u5c08\\u70ba\\u654f\\u611f\\u808c\\u8c93\\u54aa\\u6253\\u9020\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335785,\"title\":\"\\u6fd5\\u5f0f\\u885b\\u751f\\u7d19\\uff08\\u53ef\\u6c96\\u99ac\\u6876\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/petwipes/\",\"object\":\"product\",\"object_id\":947139,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/02/25/947139/petwipes-P1-220216-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335786,\"title\":\"\\u6d88\\u81ed\\u6297\\u83cc\\u5674\\u9727\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/deodorantspray/\",\"object\":\"product\",\"object_id\":757614,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/01/14/757614/deodorantspray-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":2045369,\"title\":\"\\u690d\\u8403\\u6d17\\u7897\\u9175\\u7d20\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/dishsoap/\",\"object\":\"product\",\"object_id\":1138617,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/11/18/1138617/P1-dishsoap-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u6d17\\u6de8\\u529b\\u5168\\u65b0\\u5347\\u7d1a\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":3,\"ID\":1335784,\"title\":\"\\u690d\\u8403\\u6d17\\u8863\\u9175\\u7d20\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/laundry/\",\"object\":\"product\",\"object_id\":1241188,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/06/01/1241188/laundry-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0,\"has_tab_bar\":false},{\"level\":2,\"ID\":1706260,\"title\":\"\\u7528\\u54c1&\\u73a9\\u5177\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/room_temperature/supplies/\",\"object\":\"custom\",\"object_id\":1706260,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M9.17,14.29a.9.9,0,0,1-.73,1.06.94.94,0,0,1-.92-.93.91.91,0,0,1,.73-1.07A1,1,0,0,1,9.17,14.29Zm1.13-.94a1,1,0,0,0-.93.94.91.91,0,0,0,.74,1.06.94.94,0,0,0,.92-.93A.92.92,0,0,0,10.3,13.35ZM6.83,14.94a.79.79,0,0,0-.62,1,1,1,0,0,0,1,.76.79.79,0,0,0,.63-1A1,1,0,0,0,6.83,14.94Zm3.87.76a.78.78,0,0,0,.63,1,1,1,0,0,0,1-.76.8.8,0,0,0-.63-1A1,1,0,0,0,10.7,15.7Zm-1.48-.26c-.77,0-1.4.94-1.4,2,0,.67.65.57,1.07.39a.65.65,0,0,1,.74,0c.53.25,1.37.36,1-1.07C10.38,16,9.84,15.42,9.22,15.44Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M9.1,4.47a3.13,3.13,0,0,1,5.8,0l1.23-1.24a2.39,2.39,0,0,1,4.08,1.69V14a2.4,2.4,0,0,1-2.12,2.38,2.77,2.77,0,0,0,.17-1v-.28A1.2,1.2,0,0,0,19,14V4.91A1.2,1.2,0,0,0,17,4.06l-.59.58a2.94,2.94,0,0,0-1-.17H13.54a1.92,1.92,0,0,0-3.08,0ZM5.92,6.32A2.28,2.28,0,0,1,8,5.06h7.42a2.28,2.28,0,0,1,2.28,2.28v8.07a2.25,2.25,0,0,1-.24,1l-1.89,3.79a2.28,2.28,0,0,1-2,1.26H6.07A2.28,2.28,0,0,1,3.79,19.2V11.13a2.25,2.25,0,0,1,.24-1Zm-.83,4.32a1,1,0,0,0-.12.49V19.2a1.11,1.11,0,0,0,1.1,1.1h7.42a1.12,1.12,0,0,0,1-.61l1.89-3.79a1,1,0,0,0,.12-.49V7.34a1.11,1.11,0,0,0-1.1-1.1H8a1.12,1.12,0,0,0-1,.61Zm.63.09a.44.44,0,0,0,.45.44h6.21a.44.44,0,0,0,0-.88H6.17A.44.44,0,0,0,5.72,10.73Zm8.84,6.66V11.51a.45.45,0,0,0-.89,0v5.88a.45.45,0,0,0,.89,0ZM14.9,7.22,13.71,9.89a.44.44,0,0,0,.23.59.37.37,0,0,0,.18,0,.44.44,0,0,0,.4-.26l1.2-2.68a.45.45,0,1,0-.82-.36Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1335790,\"title\":\"\\u751f\\u6d3b\\u7528\\u54c1\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/%e7%94%9f%e6%b4%bb%e7%94%a8%e5%93%81/\",\"object\":\"custom\",\"object_id\":1335790,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"small\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1431184,\"title\":\"\\u5c0f\\u65b9\\u584a\\u4e8c\\u4ee3\\uff5c\\u5bf5\\u7269\\u5916\\u51fa\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/pet_cube_backpack/\",\"object\":\"product\",\"object_id\":1427645,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/16/1427645/cube2-P32-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335792,\"title\":\"\\u5bf5\\u7269\\u5c08\\u7528\\u7259\\u5237\\uff08\\u7d30\\u8edf\\u6bdb\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/pet_toothbrush/\",\"object\":\"product\",\"object_id\":1102648,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/09/01/1102648/toothbrush_01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335795,\"title\":\"Philocomb \\u8c9d\\u6bbc\\u68b3\\uff08\\u6c6a\\u55b5\\u56b4\\u9078\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/philocomb/\",\"object\":\"product\",\"object_id\":1180668,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/02/05/1180668/philocomb-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":2050297,\"title\":\"\\u73a9\\u5177\\u7e3d\\u52d5\\u54e1\\u6b3e\\uff5c\\u8c93\\u6293\\u5c4b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-cathouse/\",\"object\":\"product\",\"object_id\":2024098,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/10/30/2024098/01-toystory-ca-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u4e09\\u5165\\u7d44\\u512a\\u60e0\\u4e2d\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1756227,\"title\":\"\\u73a9\\u5177\\u7e3d\\u52d5\\u54e1\\u6b3e\\uff5c\\u8c93\\u8349\\u7403\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-catball/\",\"object\":\"product\",\"object_id\":1715549,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/05/25/1715549/01_toystory-catball_toystory-ca-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1756232,\"title\":\"\\u73a9\\u5177\\u7e3d\\u52d5\\u54e1\\u6b3e\\uff5c\\u5bf5\\u7269\\u6d74\\u5dfe\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toystory-pettowel/\",\"object\":\"product\",\"object_id\":1715103,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/09/28/2009703/08_toystory-pettowel-1-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\\u65b0\\u6b3e\\u5f0f\\u4e0a\\u67b6\\uff01\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1696267,\"title\":\"\\u5438\\u6c34\\u901f\\u4e7e\\u5bf5\\u7269\\u6d74\\u5dfe\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/towel/\",\"object\":\"product\",\"object_id\":1509906,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/08/02/1509906/03-towel-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335793,\"title\":\"TOLI \\u5bf5\\u7269\\u9632\\u6ed1\\u5730\\u588a\\uff5cAK270 \\u77ed\\u7d68\\u6297\\u6c61\\u7cfb\\u5217\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toli270/\",\"object\":\"product\",\"object_id\":1198662,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/03/17/1198662/toli_270-1P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-sale\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335794,\"title\":\"TOLI \\u5bf5\\u7269\\u6b62\\u6ed1\\u5730\\u588a\\uff5cAK350 & AK1000 \\u5438\\u9707\\u7cfb\\u5217\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/toli350/\",\"object\":\"product\",\"object_id\":1198992,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/03/17/1198992/toli_350-1P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-sale\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1379059,\"title\":\"JW \\u8c93\\u54aa\\u6307\\u7532\\u526a\\uff08\\u6c6a\\u55b5\\u56b4\\u9078\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/jw_nailclipper/\",\"object\":\"product\",\"object_id\":1374153,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/12/13/1374153/jw_nailclipper-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335796,\"title\":\"FELIWAY \\u8c93\\u54aa\\u8cbb\\u6d1b\\u8499\\uff08\\u6c6a\\u55b5\\u56b4\\u9078\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/feliway/\",\"object\":\"product\",\"object_id\":1051265,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/04/17/1051265/feliway-01P-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335797,\"title\":\"ANKOMN \\u771f\\u7a7a\\u4fdd\\u9bae\\u7f50\\uff08\\u6c6a\\u55b5\\u56b4\\u9078\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/ankomn/\",\"object\":\"product\",\"object_id\":303482,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2019/07/03/303482/ankomn-01P-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336483,\"title\":\"\\u8c93\\u6293\\u677f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/pet_toys/\",\"object\":\"custom\",\"object_id\":1336483,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1805124,\"title\":\"\\u7d93\\u51788\\u5b57\\u578b\\u8c93\\u6293\\u677f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/mini-scratcher/\",\"object\":\"product\",\"object_id\":1777481,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/08/14/1777481/mini-scratcher-2@2x-100x100.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-new\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335803,\"title\":\"\\u5e73\\u677f\\u5f0f\\u5c0f\\u8c93\\u6293\\u677f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/box-scratcher/\",\"object\":\"product\",\"object_id\":1216881,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/04/20/1216881/box-scratcher-P2-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336486,\"title\":\"\\u8c93\\u8349\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/pet_toys/\",\"object\":\"custom\",\"object_id\":1336486,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1335805,\"title\":\"\\u53f0\\u7063\\u5c0f\\u5403\\u5b89\\u64ab\\u8c93\\u8349\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/taiwansnack/\",\"object\":\"product\",\"object_id\":1270904,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/07/21/1270904/Taiwansnack-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}},{\"level\":4,\"ID\":1335800,\"title\":\"\\u9264\\u91dd\\u6c34\\u679c\\u8c93\\u8349\\u5305\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/catminttoy/\",\"object\":\"product\",\"object_id\":1137845,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/11/16/1137845/catminttoy_P1-1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"item_count\":0},{\"level\":3,\"ID\":1336487,\"title\":\"\\u73a9\\u5177\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product-category/pet_toys/\",\"object\":\"custom\",\"object_id\":1336487,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":4,\"ID\":1346892,\"title\":\"S\\u578b\\u975c\\u97f3\\u8c93\\u96a7\\u9053\\uff08\\u53ef\\u6298\\u758a\\uff09\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/product/cat_tunnel/\",\"object\":\"product\",\"object_id\":1303545,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/09/07/1303545/cat_tunnel-P1-100x100.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"default\",\"product_tag\":{\"css_class\":\"label-hot\",\"tag_text\":\"\"}}],\"item_count\":0}],\"item_count\":0,\"has_tab_bar\":true}],\"has_child\":true},{\"level\":1,\"ID\":1335825,\"title\":\"\\u6c6a\\u55b5\\u5c08\\u6b04\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/\",\"object\":\"page\",\"object_id\":18433,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_blog-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":2,\"ID\":1336467,\"title\":\"\\u6c6a\\u55b5\\u7814\\u767c\\u65e5\\u8a8c\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/category/meow_rd_diary/\",\"object\":\"category\",\"object_id\":117,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M3,8.34a.58.58,0,0,1,.59-.59h7.64a.59.59,0,1,1,0,1.18H3.6A.58.58,0,0,1,3,8.34Zm7.43,2a.6.6,0,0,0-.6-.59H3.6a.6.6,0,0,0,0,1.19H9.84A.6.6,0,0,0,10.44,10.34Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M8.28,15.21,8.05,15a6.72,6.72,0,0,1-.69-3c0-.16,0-.32,0-.47H8.57c0,.15,0,.31,0,.47a5.61,5.61,0,0,0,.53,2.39Zm5.9-10a6.83,6.83,0,0,0-4.79,2h1.92a5.63,5.63,0,1,1-.77,9.13l-.83.85A6.81,6.81,0,1,0,14.18,5.19Zm0,11.16a.59.59,0,0,0,.59-.6V12.59h3.29a.59.59,0,0,0,0-1.18H14.77V8.25a.59.59,0,1,0-1.18,0v7.5A.59.59,0,0,0,14.18,16.35Zm-2.36-2.21a.59.59,0,0,0,0-.84.58.58,0,0,0-.83,0l-2.7,2.75L7.14,14.9a.6.6,0,0,0-.84,0L3.18,18.08a.6.6,0,0,0,0,.84.61.61,0,0,0,.42.16A.57.57,0,0,0,4,18.91l2.7-2.75,1.14,1.16a.62.62,0,0,0,.84,0Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":2021415,\"title\":\"\\u3010\\u6c6a\\u55b5\\u7814\\u767c\\u65e5\\u8a8c\\u3011\\u53f2\\u4e0a\\u6700\\u96e3\\u7522\\u7684\\u8089\\u7d72\\u4e3b\\u98df\\u7f50\\u2014\\u5982\\u4f55\\u514b\\u670d\\u4ee5\\u6eff\\u8db3\\u611b\\u54ac\\u54ac\\u8c93\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_developer-diary-dietcan/\",\"object\":\"post\",\"object_id\":2021415,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/11/07/2021415/0\\u7cbe\\u9078-09552NEW.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1757357,\"title\":\"\\u3010\\u6c6a\\u55b5\\u7522\\u54c1\\u65e5\\u8a8c\\u3011\\u73a9\\u5177\\u7e3d\\u52d5\\u54e1\\u5546\\u54c1\\u767b\\u5834\\uff0c\\u966a\\u6bdb\\u5b69\\u5ea6\\u904e\\u5feb\\u6a02\\u6642\\u5149\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_developer-diary-toystory/\",\"object\":\"post\",\"object_id\":1757357,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/07/20/1757357/\\u3010\\u6c6a\\u55b5\\u7522\\u54c1\\u65e5\\u8a8c\\u3011\\u73a9\\u5177\\u7e3d\\u52d5\\u54e1\\u5546\\u54c1\\u767b\\u583410_2.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1585256,\"title\":\"\\u3010\\u6c6a\\u55b5\\u7814\\u767c\\u65e5\\u8a8c\\u3011\\u7926\\u578b\\u5347\\u7d1a\\u70ba\\u7c73\\u7c92\\u578b\\u7684\\u539f\\u56e0\\uff0c\\u9054\\u5230\\u4eba\\u5bf5\\u5e73\\u8861\\u7684\\u8c93\\u7802\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_developer-diary-ricecatlitter/\",\"object\":\"post\",\"object_id\":1585256,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/11/08/1585256/\\u7c73\\u7c92\\u7802\\u7814\\u767c\\u65e5\\u8a8c-11\\u62f7\\u8c9d.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1533670,\"title\":\"\\u3010\\u6c6a\\u55b5\\u7814\\u767c\\u65e5\\u8a8c\\u3011\\u5feb\\u901f\\u7a69\\u5b9a\\u8178\\u80c3\\uff0c\\u8fc5\\u901f\\u6709\\u611f\\u7684\\u8edf\\u4fbf\\u524b\\u661f\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_developer-diary-digestive-relief/\",\"object\":\"post\",\"object_id\":1533670,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/09/12/1533670/DSC09551-1.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1529454,\"title\":\"\\u3010\\u6c6a\\u55b5\\u7814\\u767c\\u65e5\\u8a8c\\u3011\\u5168\\u65b0\\u63a8\\u51fa\\u7684\\u5674\\u9727\\u578b\\u9b5a\\u6cb9\\uff0c\\u7814\\u767c\\u6545\\u4e8b\\u5927\\u516c\\u958b\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_developer-diary-fishoil-spray/\",\"object\":\"post\",\"object_id\":1529454,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/09/02/1529454/dairy_fishoil-spray01.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1484406,\"title\":\"\\u3010\\u6c6a\\u55b5\\u7814\\u767c\\u65e5\\u8a8c\\u3011\\u53f2\\u4e0a\\u7b2c\\u4e00\\u652f\\u7372\\u5f97\\u5fb7\\u570b iF \\u8a2d\\u8a08\\u5927\\u734e\\u7684\\u7802\\u93df\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_developer-diary-litterscoop/\",\"object\":\"post\",\"object_id\":1484406,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/06/20/1484406/\\u7802\\u93df\\u7814\\u767c\\u65e5\\u8a8c-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1445966,\"title\":\"\\u3010\\u6c6a\\u55b5\\u7814\\u767c\\u65e5\\u8a8c\\u3011\\u72d7\\u72d7\\u96e8\\u8863\\u806f\\u540d\\u5951\\u6a5f\\uff0c\\u548c\\u5171\\u540c\\u5805\\u6301\\u7684\\u7814\\u767c\\u7d30\\u7bc0\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_developer-diary_raincoat/\",\"object\":\"post\",\"object_id\":1445966,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/14/1445966/\\u72d7\\u72d7\\u96e8\\u8863_\\u7814\\u767c\\u65e5\\u8a8c2.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1431029,\"title\":\"\\u3010\\u6c6a\\u55b5\\u7814\\u767c\\u65e5\\u8a8c\\u3011\\u77fd\\u81a0\\u62fc\\u63a5\\u843d\\u7802\\u588a\\uff1a\\u5f9e\\u69cb\\u60f3\\u5230\\u88fd\\u4f5c\\u7684\\u958b\\u767c\\u79d8\\u8f9b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_developer-diary-littermat/\",\"object\":\"post\",\"object_id\":1431029,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/23/1431029/developer-diary-littermat-01-scaled.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false}],\"item_count\":32,\"has_tab_bar\":false},{\"level\":2,\"ID\":1336463,\"title\":\"\\u65b0\\u624b\\u5165\\u9580\\u6307\\u5357\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/category/meow_beginner/\",\"object\":\"category\",\"object_id\":175,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M11.71,12.87a.6.6,0,0,1-.59.59h0a.59.59,0,0,1-.59-.59A3.52,3.52,0,0,1,12,10.07a1.43,1.43,0,0,0,.57-1.19,1.45,1.45,0,0,0-1.4-1.39,1.47,1.47,0,0,0-1,.41,1.4,1.4,0,0,0-.43,1,.6.6,0,0,1-1.19,0A2.65,2.65,0,0,1,11.16,6.3,2.63,2.63,0,0,1,12.68,11,2.3,2.3,0,0,0,11.71,12.87Zm.09,2.65a.7.7,0,1,1-.7-.7A.7.7,0,0,1,11.8,15.52Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M17.19,16.18a7.76,7.76,0,0,0,1.74-4.92,7.83,7.83,0,1,0-2.55,5.79l3.35,3.35a.61.61,0,0,0,.42.17.63.63,0,0,0,.42-.17.6.6,0,0,0,0-.84Zm-6.1,1.73a6.65,6.65,0,1,1,6.65-6.65A6.66,6.66,0,0,1,11.09,17.91Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1427440,\"title\":\"\\u8c93\\u7802\\u76c6\\u63a8\\u85a6\\u6307\\u5357\\uff5c\\u91cf\\u8eab\\u6311\\u9078\\u6700\\u9069\\u5408\\u7684\\u7802\\u76c6 & \\u5e38\\u898b QA \\u89e3\\u6790\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_litterbox/\",\"object\":\"post\",\"object_id\":1427440,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/16/1427440/0314\\u8c93\\u7802\\u76c6\\u63a8\\u85a6_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1377904,\"title\":\"\\u65b0\\u624b\\u990a\\u72d7\\u5fc5\\u77e5\\uff5c\\u5225\\u9935\\u72d7\\u72d7\\u5403\\u9019\\u4e9b\\u6771\\u897f\\uff014 \\u500b\\u9935\\u990a\\u8ff7\\u601d\\u5927\\u7834\\u89e3\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catnoteat/\",\"object\":\"post\",\"object_id\":1377904,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/12/21/1377904/IG\\u65e5\\u5e38\\u6587_\\u72d7\\u72d7\\u9935\\u990a\\u8ff7\\u601d_\\u5c08\\u6b04.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1377835,\"title\":\"\\u65b0\\u624b\\u990a\\u8c93\\u5fc5\\u77e5\\uff5c\\u5225\\u9935\\u8c93\\u54aa\\u5403\\u9019\\u4e9b\\u6771\\u897f\\uff015 \\u985e\\u8c93\\u54aa\\u7981\\u5fcc\\u98df\\u7269\\u5716\\u9451\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catnoteat_2/\",\"object\":\"post\",\"object_id\":1377835,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/12/21/1377835/IG\\u65e5\\u5e38\\u6587_\\u8c93\\u4e0d\\u80fd\\u5403\\u9019\\u4e9b_\\u5c08\\u6b04.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1290445,\"title\":\"\\u8c93\\u54aa\\u53ea\\u662f\\u8001\\u4e86\\uff1f\\u5e38\\u898b\\u75be\\u75c5\\u5fb5\\u5146\\u53ca\\u8c93\\u54aa\\u5065\\u6aa2\\u5efa\\u8b70\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_cathealthcheck/\",\"object\":\"post\",\"object_id\":1290445,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/08/18/1290445/\\u8c93\\u8001\\u5316_\\u5c08\\u6b04\\u5c01\\u9762_new.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1251470,\"title\":\"\\u8c93\\u7802\\u63a8\\u85a6\\uff5c\\u30102023\\u5e74\\u6700\\u65b0\\u30119\\u5927\\u71b1\\u9580\\u8c93\\u7802\\u8a55\\u6bd4\\uff063\\u5927\\u6311\\u9078\\u5168\\u653b\\u7565\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catlitter/\",\"object\":\"post\",\"object_id\":1251470,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/06/17/1251470/\\u8c93\\u7802\\u6311\\u9078_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1245965,\"title\":\"\\u8c93\\u7802\\u76c6\\u3001\\u8c93\\u7802\\u6311\\u9078 3 \\u5927\\u539f\\u5247\\uff5c\\u884c\\u70ba\\u8a13\\u7df4\\u5e2b\\u6559\\u4f60\\u6253\\u9020\\u8212\\u9069\\u8c93\\u5ec1\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_toilet/\",\"object\":\"post\",\"object_id\":1245965,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/06/10/1245965/\\u8c93\\u7802\\u76c6\\u8c93\\u7802\\u6311\\u9078_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1241718,\"title\":\"\\u8c93\\u72d7\\u7d50\\u7d2e\\u5168\\u653b\\u7565\\uff5c\\u7d55\\u80b2\\u7684\\u5efa\\u8b70\\u5e74\\u9f61\\u3001\\u98a8\\u96aa\\u3001\\u5e38\\u898bQ&A\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_dogcatspayed/\",\"object\":\"post\",\"object_id\":1241718,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/06/02/1241718/\\u6bdb\\u5b69\\u8a72\\u4e0d\\u8a72\\u7d55\\u80b2_\\u5c08\\u6b04\\u5c01\\u9762_new.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1239003,\"title\":\"\\u3010\\u6c6a\\u55b5\\u51b7\\u77e5\\u8b58\\u3011\\u6311\\u5634\\u8c93\\u8f49\\u98df\\u597d\\u56f0\\u96e3\\uff01\\uff1f\\u4e7e\\u4e7e\\u8f49\\u6fd5\\u98df\\u8a23\\u7ac5\\u5927\\u516c\\u958b\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_eatwetfood/\",\"object\":\"post\",\"object_id\":1239003,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/05/28/1239003/IG\\u65e5\\u5e38\\u6587_\\u6311\\u98df\\u8c93\\u8f49\\u98df_\\u5c08\\u6b04.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false}],\"item_count\":15,\"has_tab_bar\":false},{\"level\":2,\"ID\":1336465,\"title\":\"\\u6c6a\\u55b5\\u51b7\\u77e5\\u8b58\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/category/%e6%b1%aa%e5%96%b5%e5%86%b7%e7%9f%a5%e8%ad%98/\",\"object\":\"category\",\"object_id\":123,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M11.41,7.54V3.36a.59.59,0,1,1,1.18,0V7.54a.59.59,0,0,1-1.18,0Zm4.52,1.88a.63.63,0,0,0,.42-.17L18.49,7.1a.59.59,0,1,0-.84-.84L15.51,8.41a.6.6,0,0,0,0,.84A.59.59,0,0,0,15.93,9.42Zm5,2H18.12a.6.6,0,0,0,0,1.19h2.77a.6.6,0,0,0,0-1.19ZM7.65,9.25a.63.63,0,0,0,.42.17.59.59,0,0,0,.42-.17.6.6,0,0,0,0-.84L6.35,6.26a.59.59,0,0,0-.84.84ZM5.88,11.39H3.11a.6.6,0,0,0,0,1.19H5.88a.6.6,0,0,0,0-1.19Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M8.7,10.28a4.67,4.67,0,0,0,0,6.61l.67.68a.41.41,0,0,0,0,.19l.45,2.72a.59.59,0,0,0,.58.5h.29a1.61,1.61,0,0,0,2.6,0h.29a.59.59,0,0,0,.58-.5l.45-2.72a.41.41,0,0,0,0-.19l.67-.68a4.67,4.67,0,0,0-6.6-6.61Zm4.64,8-.25,1.53H10.91l-.25-1.53Zm.11-1.19h-2.9l-1-1a3.49,3.49,0,1,1,4.94,0Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1805945,\"title\":\"\\u3010\\u6c6a\\u55b5\\u51b7\\u77e5\\u8b58\\u3011\\u4f60\\u4e0d\\u77e5\\u9053\\u7684 6 \\u500b\\u641c\\u6551\\u72ac\\u51b7\\u77e5\\u8b58\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_rescuedogsknowledge/\",\"object\":\"post\",\"object_id\":1805945,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/09/20/1805945/\\u641c\\u6551\\u72ac\\u5c08\\u6b04\\u5c01\\u9762.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1598963,\"title\":\"\\u3010\\u6c6a\\u55b5\\u51b7\\u77e5\\u8b58\\u3011\\u8c93\\u54aa\\u9b0d\\u9b1a\\u53ef\\u4ee5\\u62db\\u8ca1\\uff1f\\uff01\\u4f86\\u770b\\u770b\\u8c93\\u54aa\\u9b0d\\u9b1a\\u7684 4 \\u5927\\u529f\\u80fd\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catwhiskers/\",\"object\":\"post\",\"object_id\":1598963,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/11/24/1598963/\\u51b7\\u77e5\\u8b58_220210_\\u8c93\\u54aa\\u9b0d\\u9b1a\\u53ef\\u4ee5\\u62db\\u8ca1_\\u5c08\\u6b04.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1598937,\"title\":\"\\u3010\\u6c6a\\u55b5\\u51b7\\u77e5\\u8b58\\u3011\\u72d7\\u72d7\\u4e92\\u805e\\u5c41\\u5c41\\u4e0d\\u53ea\\u662f\\u6253\\u62db\\u547c\\uff1f\\uff01\\u72d7\\u72d7\\u805e\\u5c41\\u5c41\\u7684 3 \\u500b\\u539f\\u56e0\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_dogsmellbutt/\",\"object\":\"post\",\"object_id\":1598937,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/11/24/1598937/\\u51b7\\u77e5\\u8b58_211118_\\u4e92\\u805e\\u5c41\\u5c41\\u4e0d\\u53ea\\u662f\\u6253\\u62db\\u547c_\\u5c08\\u6b04.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1582350,\"title\":\"\\u3010\\u6c6a\\u55b5\\u51b7\\u77e5\\u8b58\\u3011\\u8c93\\u54aa\\u662f\\u5929\\u751f\\u8fd1\\u8996\\u773c\\uff1f\\uff01\\u539f\\u4f86\\u8c93\\u54aa\\u773c\\u4e2d\\uff0c\\u4f60\\u662f\\u9577\\u9019\\u6a23\\u7684\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catview/\",\"object\":\"post\",\"object_id\":1582350,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/11/04/1582350/\\u51b7\\u77e5\\u8b58_220117_\\u8c93\\u54aa\\u662f\\u5929\\u751f\\u8fd1\\u8996\\u773c_\\u5c08\\u6b04.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1524192,\"title\":\"\\u3010\\u6c6a\\u55b5\\u51b7\\u77e5\\u8b58\\u3011\\u8c93\\u54aa\\u3001\\u72d7\\u72d7\\u8ddf\\u9032\\u5ec1\\u6240\\u662f\\u60f3\\u4fdd\\u8b77\\u4f60\\uff1f\\u6bdb\\u5b69\\u7576\\u5ec1\\u6240\\u8ddf\\u5c41\\u87f2\\u76845\\u500b\\u539f\\u56e0\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_petbathroom/\",\"object\":\"post\",\"object_id\":1524192,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/08/25/1524192/\\u51b7\\u77e5\\u8b58_220218_\\u8ddf\\u9032\\u5ec1\\u6240\\u662f\\u60f3\\u4fdd\\u8b77\\u4f60_\\u5c08\\u6b04.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1494493,\"title\":\"\\u3010\\u6c6a\\u55b5\\u51b7\\u77e5\\u8b58\\u3011\\u9ad8\\u51b7\\u8c93\\u54aa\\u5176\\u5be6\\u5f88\\u611b\\u4f60\\uff01\\u8c93\\u54aa\\u611b\\u4f60\\u7684 7 \\u500b\\u8868\\u73fe\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catloveu/\",\"object\":\"post\",\"object_id\":1494493,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/07/06/1494493/catlove.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1420419,\"title\":\"\\u3010\\u6c6a\\u55b5\\u51b7\\u77e5\\u8b58\\u3011\\u72d7\\u72d7\\u9ed8\\u9ed8\\u5728\\u5c0d\\u4f60\\u544a\\u767d\\uff017 \\u7a2e\\u72d7\\u72d7\\u611b\\u4f60\\u7684\\u8868\\u73fe\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_dogloveu/\",\"object\":\"post\",\"object_id\":1420419,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/04/1420419/011.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1402335,\"title\":\"\\u8349\\u8393\\u5712\\u666f\\u9ede\\u61f6\\u4eba\\u5305\\uff01\\u7cbe\\u9078 5 \\u9593\\u8c93\\u72d7\\u53cb\\u5584\\u8349\\u8393\\u5712\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_petstrawberryspots/\",\"object\":\"post\",\"object_id\":1402335,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/01/28/1402335/\\u51b7\\u77e5\\u8b58_211229_\\u6bdb\\u5b69\\u53cb\\u5584\\u8349\\u8393\\u5712_\\u5c08\\u6b04.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false}],\"item_count\":100,\"has_tab_bar\":false},{\"level\":2,\"ID\":1336466,\"title\":\"\\u6c6a\\u55b5\\u77e5\\u8b58\\u6559\\u5ba4\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/category/ameow_announcement/\",\"object\":\"category\",\"object_id\":1,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M19.5,19.49a.58.58,0,0,1-.59.59H4.25a.59.59,0,1,1,0-1.18H18.91A.58.58,0,0,1,19.5,19.49Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M10.27,17l.05.05L6.84,18.25a1.42,1.42,0,0,1-.5.08,1.59,1.59,0,0,1-1.51-2.09L6,12.76s0,0,0,.05l.89.89L6,16.62a.38.38,0,0,0,.1.41.39.39,0,0,0,.41.1l2.91-1ZM18.44,5.78a2.8,2.8,0,0,1,0,3.94l-.57.56-6.34,6.34a.59.59,0,0,1-.42.18.58.58,0,0,1-.42-.18L6.46,12.4A.63.63,0,0,1,6.29,12a.59.59,0,0,1,.17-.42L12.8,5.22h0l.57-.56a2.77,2.77,0,0,1,3.93,0Zm-5.22.69L7.72,12l3.39,3.39,5.5-5.51Zm4.38.15L16.46,5.49a1.58,1.58,0,0,0-2.25,0l-.15.14L17.45,9l.15-.14A1.61,1.61,0,0,0,17.6,6.62Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1772955,\"title\":\"\\u3010 \\u8c93\\u7802 \\u30112023\\u6700\\u65b06\\u5927\\u7a2e\\u985e\\u8c93\\u7802\\u8a55\\u6bd4\\uff1a\\u8c46\\u8150\\u7802\\u3001\\u6c34\\u6676\\u7802\\u3001\\u7926\\u7802\\u3001\\u6728\\u5c51\\u7802\\u3001\\u7d19\\u7802\\u3001\\u82b1\\u751f\\u7802\\u600e\\u9ebc\\u6311\\uff1f\\u770b\\u5b8c\\u4f60\\u5c31\\u77e5\\u9053\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_littercomparison/\",\"object\":\"post\",\"object_id\":1772955,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/08/09/1772955/0807\\u5b98\\u7db2\\u5c08\\u6b04\\u5c01\\u9762_\\u8c93\\u7802\\u8a55\\u6bd4.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1772900,\"title\":\"\\u3010 \\u8c93\\u7802 \\u30112023\\u6700\\u5f37\\u8c93\\u7802\\u2014\\u2014\\u8c46\\u8150\\u7802\\u8a73\\u89e3 | \\u770b\\u5b8c\\u79d2\\u61c2\\u70ba\\u4ec0\\u9ebc\\u4f60\\u61c9\\u8a72\\u9078\\u64c7\\u8c46\\u8150\\u7802\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_tofulitter/\",\"object\":\"post\",\"object_id\":1772900,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/08/07/1772900/0807\\u5b98\\u7db2\\u5c08\\u6b04\\u5c01\\u9762_\\u8c46\\u8150\\u7802.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1772927,\"title\":\"\\u3010 \\u8c93\\u7802 \\u3011\\u8c93\\u7802\\u600e\\u9ebc\\u6311\\uff1f\\u6728\\u5c51\\u7802\\u597d\\u7528\\u55ce\\uff1f7\\u5927\\u91cd\\u9ede\\u5e36\\u4f60\\u4e86\\u89e3\\u4ec0\\u9ebc\\u662f\\u6728\\u5c51\\u7802\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_woodlitter/\",\"object\":\"post\",\"object_id\":1772927,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/08/07/1772927/0807\\u5b98\\u7db2\\u5c08\\u6b04\\u5c01\\u9762_\\u6728\\u5c51\\u7802.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1772951,\"title\":\"\\u3010 \\u8c93\\u7802 \\u3011\\u6975\\u5ea6\\u51b7\\u9580\\u7684\\u7d19\\u7802 | \\u70ba\\u4ec0\\u9ebc\\u7d19\\u7802\\u7522\\u54c1\\u9019\\u9ebc\\u5c11\\u898b\\uff1f7\\u500b\\u91cd\\u9ede\\u5831\\u4f60\\u77e5\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_paperlitter/\",\"object\":\"post\",\"object_id\":1772951,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/08/07/1772951/0807\\u5b98\\u7db2\\u5c08\\u6b04\\u5c01\\u9762_\\u7d19\\u7802.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1772910,\"title\":\"\\u3010 \\u8c93\\u7802 \\u3011\\u8c93\\u7802\\u600e\\u9ebc\\u9078\\uff1f\\u7926\\u7802\\u53ef\\u4ee5\\u55ce\\uff1f\\u512a\\u7f3a\\u9ede\\u6e05\\u55ae\\u5e36\\u4f60\\u4e86\\u89e3\\u4ec0\\u9ebc\\u662f\\u7926\\u7802\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_orelitter/\",\"object\":\"post\",\"object_id\":1772910,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/08/07/1772910/0807\\u5b98\\u7db2\\u5c08\\u6b04\\u5c01\\u9762_\\u7926\\u7802.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1772853,\"title\":\"\\u3010 \\u8c93\\u7802 \\u3011\\u6c34\\u6676\\u7802\\u597d\\u7528\\u55ce\\uff1f\\u6c34\\u6676\\u7802\\u63a8\\u85a6\\uff1f\\u9019\\u7bc7\\u6587\\u7ae0\\u770b\\u5b8c\\u4f60\\u5c31\\u77e5\\u9053\\u600e\\u9ebc\\u6311\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_crystallitter/\",\"object\":\"post\",\"object_id\":1772853,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/08/07/1772853/0807\\u5b98\\u7db2\\u5c08\\u6b04\\u5c01\\u9762_\\u6c34\\u6676\\u7802.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1736040,\"title\":\"\\u3010 \\u5e7c\\u8c93\\u7167\\u9867 \\u3011\\u5e7c\\u8c93\\u98df\\u91cf\\u5982\\u4f55\\u8a08\\u7b97 | 5\\u5927\\u91cd\\u9ede\\u770b\\u5b8c\\u4f60\\u5c31\\u61c2\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_foodamount/\",\"object\":\"post\",\"object_id\":1736040,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/06/20/1735979/\\u5e7c\\u8c93\\u98df\\u91cf\\u5982\\u4f55\\u8a08\\u7b97_\\u5c08\\u6b04\\u5c01\\u9762.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1735979,\"title\":\"\\u3010 \\u5e7c\\u8c93\\u7167\\u9867 \\u3011\\u5e7c\\u8c93\\u8840\\u4fbf\\u600e\\u9ebc\\u8fa6\\uff1f\\u5225\\u592a\\u614c\\u5f35\\uff015\\u5927\\u6b65\\u9a5f\\u5e36\\u4f60\\u4e86\\u89e3\\u61c9\\u8b8a\\u63aa\\u65bd\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_hematochezia/\",\"object\":\"post\",\"object_id\":1735979,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/06/20/1735979/\\u5e7c\\u8c93\\u8840\\u4fbf\\u600e\\u9ebc\\u8fa6_\\u5c08\\u6b04\\u5c01\\u9762.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false}],\"item_count\":143,\"has_tab_bar\":false},{\"level\":2,\"ID\":1336468,\"title\":\"\\u72ac\\u8c93\\u884c\\u70ba\\u5b78\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/category/pet-behavior/\",\"object\":\"category\",\"object_id\":120,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M10.52,14.49h0a.59.59,0,0,1-.59-.59,2.09,2.09,0,0,1,.63-1.51,2.07,2.07,0,0,1,1.53-.6,2.12,2.12,0,0,1,2.05,2,2.09,2.09,0,0,1-.83,1.75,1.59,1.59,0,0,0-.67,1.26.58.58,0,0,1-.58.6h0a.6.6,0,0,1-.59-.59,2.77,2.77,0,0,1,1.13-2.21.93.93,0,0,0,.37-.77,1,1,0,0,0-.9-.89.92.92,0,0,0-.67.27.86.86,0,0,0-.27.66A.59.59,0,0,1,10.52,14.49Zm1.19,3.73a.72.72,0,0,1,.32-.08.67.67,0,0,1,.34.09.68.68,0,0,1,0,1.2.72.72,0,0,1-.29.06.73.73,0,0,1-.3-.07.68.68,0,0,1,0-1.2Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M9.33,9.85H9.5A2.26,2.26,0,0,0,11.07,9a3.08,3.08,0,0,0,.66-2.27A3.23,3.23,0,0,0,11,4.92,2.45,2.45,0,0,0,9,4a2.29,2.29,0,0,0-1.57.83,3,3,0,0,0-.66,2.28,3.23,3.23,0,0,0,.54,1.52A2.53,2.53,0,0,0,9.33,9.85ZM7.91,7a1.87,1.87,0,0,1,.38-1.39,1.11,1.11,0,0,1,.76-.42h.09a1.64,1.64,0,0,1,1.41,1.63,1.91,1.91,0,0,1-.38,1.39,1.11,1.11,0,0,1-.76.42C8.67,8.72,8,8,7.91,7Zm5,2a2.26,2.26,0,0,0,1.57.84h.17A2.56,2.56,0,0,0,16.78,8.6a3.29,3.29,0,0,0,.49-1.45,3,3,0,0,0-.66-2.28A2.29,2.29,0,0,0,15,4a2.44,2.44,0,0,0-2,.85,3.22,3.22,0,0,0-.79,1.84A3.08,3.08,0,0,0,12.93,9Zm.52-2.15a1.64,1.64,0,0,1,1.41-1.63H15a1.11,1.11,0,0,1,.76.42A1.87,1.87,0,0,1,16.09,7c-.09,1-.76,1.69-1.5,1.63a1.11,1.11,0,0,1-.76-.42A1.91,1.91,0,0,1,13.45,6.85Zm-6,3.52a3.18,3.18,0,0,0-.57-1.25A2.71,2.71,0,0,0,4.39,8,2.32,2.32,0,0,0,2.82,9a2.75,2.75,0,0,0-.4,2.16,2.89,2.89,0,0,0,2.71,2.36l.35,0a2.34,2.34,0,0,0,1.57-1l0,0A2.83,2.83,0,0,0,7.45,10.37Zm-1.16.24a1.61,1.61,0,0,1-.21,1.25,1.16,1.16,0,0,1-.78.48A1.74,1.74,0,0,1,3.79,9.69a1.11,1.11,0,0,1,.77-.48l.18,0A1.7,1.7,0,0,1,6.29,10.61ZM19.61,8a2.7,2.7,0,0,0-2.43,1,3.06,3.06,0,0,0-.63,1.32,2.79,2.79,0,0,0,.34,2.07l.06.09a2.34,2.34,0,0,0,1.57,1l.35,0a2.89,2.89,0,0,0,2.71-2.36A2.75,2.75,0,0,0,21.18,9,2.32,2.32,0,0,0,19.61,8Zm-.91,4.31a1.16,1.16,0,0,1-.78-.48,1.61,1.61,0,0,1-.21-1.25,1.7,1.7,0,0,1,1.55-1.42l.18,0a1.11,1.11,0,0,1,.77.48,1.74,1.74,0,0,1-1.51,2.65Zm-2.26.27a9.89,9.89,0,0,1,1.06,2.47c.66,2.37.51,3.92-.45,4.73-1.22,1-3.19.29-4-.07L13,19.68a1.27,1.27,0,0,0,.34-.86,1,1,0,0,0,0-.3l.31.14c.94.44,2.14.73,2.71.25s.58-1.71.07-3.51c-.77-2.79-2.58-4.6-4.5-4.51-2.54.12-4.61,3.23-4.61,6.93,0,.85.34,1.07.45,1.14a3.19,3.19,0,0,0,2.65-.26l.46-.2a1.65,1.65,0,0,0,0,.32,1.31,1.31,0,0,0,.33.85l-.26.11a6,6,0,0,1-2.33.56A2.63,2.63,0,0,1,7.05,20a2.34,2.34,0,0,1-1-2.14,10,10,0,0,1,1.36-5.18A5.55,5.55,0,0,1,11.8,9.71,5.33,5.33,0,0,1,16.44,12.61Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1446447,\"title\":\"\\u3010\\u8a13\\u7df4\\u5e2b\\u5c0f\\u6559\\u5ba4\\u3011\\u8c93\\u5974\\u5fc5\\u4fee\\u9017\\u8c93\\u5b78\\uff01 \\u8a13\\u7df4\\u5e2b\\u6559\\u4f60\\uff13\\u5927\\u9017\\u8c93\\u79d8\\u8a23\\uff06\\u81ea\\u88fd\\u8c93\\u54aa\\u73a9\\u5177\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_cat-toys/\",\"object\":\"post\",\"object_id\":1446447,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/15/1446447/0413\\u8a13\\u7df4\\u5e2b\\u6559\\u4f60\\uff13\\u5927\\u9017\\u8c93\\u79d8\\u8a23\\uff06\\u81ea\\u88fd\\u8c93\\u54aa\\u73a9\\u5177_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1409577,\"title\":\"\\u990a\\u7b2c\\u4e8c\\u96bb\\u8c93\\u5fc5\\u77e5\\uff5c\\u65b0\\u820a\\u8c93\\u548c\\u5e73\\u76f8\\u8655\\u6307\\u5357\\uff0c\\u5b89\\u5168\\u6b65\\u9a5f\\u4e0d\\u8e29\\u96f7\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_secondcat/\",\"object\":\"post\",\"object_id\":1409577,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/02/14/1409577/0207\\u990a\\u7b2c\\u4e8c\\u96bb\\u8c93\\u5fc5\\u77e5_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1375338,\"title\":\"\\u3010\\u8a13\\u7df4\\u5e2b\\u5c0f\\u6559\\u5ba4\\u3011\\u6253\\u9020\\u8212\\u9069\\u8c93\\u5b85\\uff01\\u7406\\u60f3\\u990a\\u8c93\\u7a7a\\u9593\\u898f\\u5283\\u6307\\u5357\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_perfectcathouse/\",\"object\":\"post\",\"object_id\":1375338,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/12/15/1375338/1214\\u6253\\u9020\\u8212\\u9069\\u8c93\\u5b85_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1359133,\"title\":\"\\u3010\\u8a13\\u7df4\\u5e2b\\u5c0f\\u6559\\u5ba4\\u3011\\u8c93\\u54aa\\u526a\\u6307\\u7532\\u597d\\u96e3\\uff1f\\u8f15\\u9b06\\u7121\\u75db\\u526a\\u6307\\u7532\\u4e09\\u6b65\\u9a5f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_nailtrimming/\",\"object\":\"post\",\"object_id\":1359133,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/11/17/1359133/1115\\u8c93\\u54aa\\u526a\\u6307\\u7532_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1352372,\"title\":\"\\u3010\\u8a13\\u7df4\\u5e2b\\u5c0f\\u6559\\u5ba4\\u3011\\u5e7c\\u72ac\\u54ac\\u4eba\\u600e\\u9ebc\\u8fa6\\uff1f\\u6e1b\\u5c11\\u72d7\\u72d7\\u4e82\\u54ac\\u53ca\\u6b63\\u78ba\\u904a\\u6232\\u65b9\\u5f0f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_puppybite/\",\"object\":\"post\",\"object_id\":1352372,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/11/11/1352372/1109\\u5e7c\\u72ac\\u54ac\\u4eba_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1286383,\"title\":\"\\u8c93\\u54aa\\u7126\\u616e\\u600e\\u9ebc\\u8fa6\\uff1f\\u8a13\\u7df4\\u5e2b\\u6559\\u4f60\\u6b63\\u78ba\\u7684\\u7d13\\u58d3\\uff13\\u6b65\\u9a5f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catanxiety/\",\"object\":\"post\",\"object_id\":1286383,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/08/12/1286383/0809\\u8c93\\u54aa\\u7126\\u616e\\u5bb3\\u6015_\\u5c08\\u6b04.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1271558,\"title\":\"\\u8c93\\u72d7\\u4e0d\\u5408\\u600e\\u9ebc\\u8fa6\\uff1f\\u8a13\\u7df4\\u5e2b\\u6559\\u4f60\\u8c93\\u72d7\\u540c\\u4f4f\\u76f8\\u8655\\u5b88\\u5247\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_dogcatquarrel/\",\"object\":\"post\",\"object_id\":1271558,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/07/22/1271558/catdogwar_000-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1245965,\"title\":\"\\u8c93\\u7802\\u76c6\\u3001\\u8c93\\u7802\\u6311\\u9078 3 \\u5927\\u539f\\u5247\\uff5c\\u884c\\u70ba\\u8a13\\u7df4\\u5e2b\\u6559\\u4f60\\u6253\\u9020\\u8212\\u9069\\u8c93\\u5ec1\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_toilet/\",\"object\":\"post\",\"object_id\":1245965,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/06/10/1245965/\\u8c93\\u7802\\u76c6\\u8c93\\u7802\\u6311\\u9078_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false}],\"item_count\":17,\"has_tab_bar\":false},{\"level\":2,\"ID\":1336469,\"title\":\"\\u75be\\u75c5\\u5065\\u5eb7\\u7bc7\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/category/meow_sickness/\",\"object\":\"category\",\"object_id\":133,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M18.58,14.11h-2.2v-2.2a.6.6,0,0,0-.59-.6H13a.59.59,0,0,0-.59.6v2.2H10.19a.6.6,0,0,0-.59.59v2.8a.59.59,0,0,0,.59.59H12.4V20.3a.59.59,0,0,0,.59.59h2.8a.6.6,0,0,0,.59-.59V18.09h2.2a.58.58,0,0,0,.59-.59V14.7A.59.59,0,0,0,18.58,14.11ZM18,16.91h-2.2a.59.59,0,0,0-.6.59v2.2H13.58V17.5a.58.58,0,0,0-.59-.59H10.78V15.3H13a.59.59,0,0,0,.59-.6V12.5h1.61v2.2a.6.6,0,0,0,.6.6H18Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M11.8,19H6.64A.64.64,0,0,1,6,18.39V9.82a.63.63,0,0,1,.63-.63A1.57,1.57,0,0,0,8.21,7.62V7.46h3.23v.16A1.57,1.57,0,0,0,13,9.19a.63.63,0,0,1,.63.63v.9h1.18v-.9A1.81,1.81,0,0,0,13,8a.39.39,0,0,1-.39-.39V7.46h.51a.58.58,0,0,0,.59-.59V3.7a.59.59,0,0,0-.59-.59H6.52a.59.59,0,0,0-.59.59V6.87a.58.58,0,0,0,.59.59H7v.16A.39.39,0,0,1,6.64,8,1.81,1.81,0,0,0,4.83,9.82v8.57a1.81,1.81,0,0,0,1.81,1.82H11.8Zm.74-12.75H7.11v-2h5.43Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1449664,\"title\":\"\\u3010\\u7378\\u91ab\\u8a3a\\u9593\\u5c0f\\u6559\\u5ba4\\u3011\\u72d7\\u72d7\\u4e00\\u76f4\\u8214\\u8173\\uff1f \\u7378\\u91ab\\u5e2b\\u6559\\u4f60\\u72d7\\u72d7\\u8dbe\\u9593\\u708e\\u539f\\u56e0\\u3001\\u6cbb\\u7642\\uff06\\u7167\\u9867\\u65b9\\u5f0f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_dog-pododermatitis/\",\"object\":\"post\",\"object_id\":1449664,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/21/1449664/0418\\u72d7\\u72d7\\u4e00\\u76f4\\u8214\\u8173\\uff1f_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1444794,\"title\":\"\\u3010\\u7378\\u91ab\\u8a3a\\u9593\\u5c0f\\u6559\\u5ba4\\u3011\\u8c93\\u72d7\\u4e00\\u76f4\\u62c9\\u809a\\u5b50\\u600e\\u9ebc\\u8fa6\\uff1f \\u5c0f\\u5fc3\\u7121\\u6cd5\\u6cbb\\u7652\\u7684\\u767c\\u708e\\u6027\\u8178\\u75c5\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/_blog-dogcat-ibd/\",\"object\":\"post\",\"object_id\":1444794,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/04/12/1444794/0407\\u8c93\\u72d7\\u4e00\\u76f4\\u62c9\\u809a\\u5b50\\u600e\\u9ebc\\u8fa6_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1423571,\"title\":\"\\u5982\\u4f55\\u5224\\u65b7\\u8c93\\u72d7\\u5403\\u5230\\u7570\\u7269\\uff1f\\u75c7\\u72c0\\u3001\\u8655\\u7406\\u65b9\\u5f0f\\u53ca\\u5371\\u96aa\\u7269\\u54c1\\u6574\\u7406\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_foreignbody/\",\"object\":\"post\",\"object_id\":1423571,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/09/1423571/0307\\u5982\\u4f55\\u5224\\u65b7\\u8c93\\u72d7\\u5403\\u5230\\u7570\\u7269\\uff1f_\\u5c08\\u6b04\\u5c01\\u9762-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1420261,\"title\":\"\\u5bf5\\u7269\\u6e05\\u6f54\\u7528\\u54c1\\u6709\\u5bb3\\u6210\\u5206\\u6e05\\u55ae\\uff01\\u53cb\\u5584\\u6e05\\u6f54\\u6307\\u5357\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_harmfuligd/\",\"object\":\"post\",\"object_id\":1420261,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/04/1420261/\\u6e05\\u6f54\\u7528\\u54c1\\u6709\\u5bb3\\u6210\\u5206\\u6e05\\u55ae_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1412184,\"title\":\"\\u3010\\u7378\\u91ab\\u8a3a\\u9593\\u5c0f\\u6559\\u5ba4\\u3011\\u8c93\\u54aa\\u773c\\u775b\\u7d05\\u816b\\u6d41\\u6dda\\u600e\\u9ebc\\u8fa6\\uff1f\\u7d50\\u819c\\u708e\\u9810\\u9632\\u7167\\u9867\\u6307\\u5357\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catconjunctivitis/\",\"object\":\"post\",\"object_id\":1412184,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/02/18/1412184/0214\\u8c93\\u54aa\\u773c\\u775b\\u7d05\\u816b\\u6d41\\u6dda\\u600e\\u9ebc\\u8fa6\\uff1f_\\u5c08\\u6b04\\u5c01\\u9762-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1394513,\"title\":\"\\u3010\\u7378\\u91ab\\u8a3a\\u9593\\u5c0f\\u6559\\u5ba4\\u3011\\u72d7\\u72d7\\u7570\\u4f4d\\u6027\\u76ae\\u819a\\u708e \\u600e\\u9ebc\\u8fa6\\uff1f\\u6cbb\\u7642\\u53ca\\u7167\\u8b77\\u7e3d\\u6574\\u7406\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_dogatopicdermatitis/\",\"object\":\"post\",\"object_id\":1394513,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/01/14/1394513/0111\\u72d7\\u72d7\\u7570\\u4f4d\\u76ae\\u819a\\u708e_\\u5c08\\u6b04\\u5c01\\u9762-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1385243,\"title\":\"\\u3010\\u7378\\u91ab\\u8a3a\\u9593\\u5c0f\\u6559\\u5ba4\\u3011\\u5982\\u4f55\\u5e6b\\u8c93\\u54aa\\u6253\\u80f0\\u5cf6\\u7d20\\uff1f\\u7cd6\\u5c3f\\u75c5\\u8c93\\u54aa\\u5c45\\u5bb6\\u7167\\u8b77\\u65e5\\u8a18\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catinsulin/\",\"object\":\"post\",\"object_id\":1385243,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/01/05/1385243/0103\\u8c93\\u54aa\\u6253\\u80f0\\u5cf6\\u7d20_\\u5c08\\u6b04\\u5c01\\u9762-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1382473,\"title\":\"\\u3010\\u7378\\u91ab\\u8a3a\\u9593\\u5c0f\\u6559\\u5ba4\\u3011\\u5982\\u4f55\\u5e6b\\u72d7\\u72d7\\u6e1b\\u80a5\\uff1f\\u7378\\u91ab\\u6559\\u4f60\\u8a02\\u5b9a\\u72d7\\u72d7\\u5c08\\u5c6c\\u6e1b\\u80a5\\u8a08\\u756b\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_dogobesity/\",\"object\":\"post\",\"object_id\":1382473,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/12/30/1382473/1229\\u72d7\\u72d7\\u6e1b\\u80a5_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false}],\"item_count\":76,\"has_tab_bar\":false},{\"level\":2,\"ID\":1336470,\"title\":\"\\u98f2\\u98df\\u71df\\u990a\\u7bc7\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/category/pet-nutrition/\",\"object\":\"category\",\"object_id\":121,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"html\",\"url\":\"\",\"html\":\"<svg id=\\\"\\u5716\\u5c64_1_\\u62f7\\u8c9d\\\" data-name=\\\"\\u5716\\u5c64 1 \\u62f7\\u8c9d\\\" xmlns=\\\"http://www.w3.org/2000/svg\\\" width=\\\"24\\\" height=\\\"24\\\" viewBox=\\\"0 0 24 24\\\"><defs><style>.cls-1{fill:#ff9e1b;}.cls-2{fill:#473729;}</style></defs><path class=\\\"cls-1\\\" d=\\\"M9.46,5.11a2.81,2.81,0,0,1,.65.07,4.4,4.4,0,0,1,7.56,3.06v.29a3.72,3.72,0,0,1-1.18.57V8.24A3.23,3.23,0,0,0,13.27,5a3.19,3.19,0,0,0-2.5,1.2.59.59,0,0,1-.66.19,1.82,1.82,0,0,0-.65-.12,2,2,0,0,0-2,2V9.1a3.72,3.72,0,0,1-1.18-.57V8.24A3.13,3.13,0,0,1,9.46,5.11Z\\\"/><path class=\\\"cls-2\\\" d=\\\"M19.44,8.4a.59.59,0,0,0-1.14.21c0,.57-2.23,1.7-6.3,1.7S5.7,9.18,5.7,8.61A.59.59,0,0,0,4.56,8.4l-2.3,6.12a.52.52,0,0,0,0,.21c0,2.43,6.27,3.65,9.78,3.65s9.78-1.22,9.78-3.65a.52.52,0,0,0,0-.21ZM12,17.2c-4.22,0-8.35-1.48-8.58-2.39L5.25,9.93c1.27,1,4,1.56,6.75,1.56s5.48-.53,6.75-1.56l1.83,4.88C20.35,15.72,16.22,17.2,12,17.2Z\\\"/></svg>\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1644610,\"title\":\"\\u5e7c\\u8c93\\u98fc\\u6599\\u63a8\\u85a6\\uff01\\u6311\\u9078\\u65b9\\u6cd5\\u3001\\u9935\\u98df\\u65b9\\u5f0f\\u7e3d\\u6574\\u7406\\uff5c\\u6c6a\\u55b5\\u661f\\u7403\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_kittenkibble/\",\"object\":\"post\",\"object_id\":1644610,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/02/03/1644610/\\u5e7c\\u8c93\\u98fc\\u6599\\u63a8\\u85a6\\u6307\\u5357_\\u5c08\\u6b04\\u5c01\\u97622.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1418238,\"title\":\"\\u5bf5\\u7269\\u725b\\u5976\\u5c0d\\u8c93\\u72d7\\u6709\\u54ea\\u4e9b\\u597d\\u8655\\uff1f\\u6311\\u9078\\u5bf5\\u7269\\u725b\\u5976\\u4e09\\u5927\\u5fc5\\u77e5\\u91cd\\u9ede\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_petmilk/\",\"object\":\"post\",\"object_id\":1418238,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/03/01/1418238/0223\\u8c93\\u72d7\\u9069\\u5408\\u559d\\u5bf5\\u7269\\u725b\\u5976\\u55ce\\uff1f\\u6311\\u9078\\u5bf5\\u7269\\u725b\\u5976\\u4e09\\u91cd\\u9ede\\uff01_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1394569,\"title\":\"\\u3010\\u77e5\\u8b58\\u6559\\u5ba4\\u3011\\u6728\\u5929\\u84fc\\u3001\\u87f2\\u766d\\u679c\\u662f\\u4ec0\\u9ebc\\uff1f \\u529f\\u6548\\u3001\\u5dee\\u7570\\uff06\\u4f7f\\u7528\\u65b9\\u6cd5\\u5168\\u653b\\u7565\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_polygama/\",\"object\":\"post\",\"object_id\":1394569,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/01/14/1394569/0112\\u6728\\u5929\\u84fc\\u87f2\\u766d\\u679c\\u662f\\u4ec0\\u9ebc_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1382473,\"title\":\"\\u3010\\u7378\\u91ab\\u8a3a\\u9593\\u5c0f\\u6559\\u5ba4\\u3011\\u5982\\u4f55\\u5e6b\\u72d7\\u72d7\\u6e1b\\u80a5\\uff1f\\u7378\\u91ab\\u6559\\u4f60\\u8a02\\u5b9a\\u72d7\\u72d7\\u5c08\\u5c6c\\u6e1b\\u80a5\\u8a08\\u756b\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_dogobesity/\",\"object\":\"post\",\"object_id\":1382473,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/12/30/1382473/1229\\u72d7\\u72d7\\u6e1b\\u80a5_\\u5c08\\u6b04\\u5c01\\u9762.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1377904,\"title\":\"\\u65b0\\u624b\\u990a\\u72d7\\u5fc5\\u77e5\\uff5c\\u5225\\u9935\\u72d7\\u72d7\\u5403\\u9019\\u4e9b\\u6771\\u897f\\uff014 \\u500b\\u9935\\u990a\\u8ff7\\u601d\\u5927\\u7834\\u89e3\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catnoteat/\",\"object\":\"post\",\"object_id\":1377904,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/12/21/1377904/IG\\u65e5\\u5e38\\u6587_\\u72d7\\u72d7\\u9935\\u990a\\u8ff7\\u601d_\\u5c08\\u6b04.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1367746,\"title\":\"\\u3010\\u7378\\u91ab\\u8a3a\\u9593\\u5c0f\\u6559\\u5ba4\\u3011\\u5982\\u4f55\\u5e6b\\u8c93\\u54aa\\u6e1b\\u80a5\\uff1f\\u7378\\u91ab\\u6559\\u4f60\\u8a02\\u5b9a\\u8c93\\u54aa\\u5c08\\u5c6c\\u6e1b\\u80a5\\u8a08\\u756b\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catobesity/\",\"object\":\"post\",\"object_id\":1367746,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/12/02/1367746/1201\\u8c93\\u54aa\\u6e1b\\u80a5\\u9bae_\\u5c08\\u6b04\\u5c01\\u9762-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1377835,\"title\":\"\\u65b0\\u624b\\u990a\\u8c93\\u5fc5\\u77e5\\uff5c\\u5225\\u9935\\u8c93\\u54aa\\u5403\\u9019\\u4e9b\\u6771\\u897f\\uff015 \\u985e\\u8c93\\u54aa\\u7981\\u5fcc\\u98df\\u7269\\u5716\\u9451\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_catnoteat_2/\",\"object\":\"post\",\"object_id\":1377835,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/12/21/1377835/IG\\u65e5\\u5e38\\u6587_\\u8c93\\u4e0d\\u80fd\\u5403\\u9019\\u4e9b_\\u5c08\\u6b04.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1239003,\"title\":\"\\u3010\\u6c6a\\u55b5\\u51b7\\u77e5\\u8b58\\u3011\\u6311\\u5634\\u8c93\\u8f49\\u98df\\u597d\\u56f0\\u96e3\\uff01\\uff1f\\u4e7e\\u4e7e\\u8f49\\u6fd5\\u98df\\u8a23\\u7ac5\\u5927\\u516c\\u958b\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_eatwetfood/\",\"object\":\"post\",\"object_id\":1239003,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/05/28/1239003/IG\\u65e5\\u5e38\\u6587_\\u6311\\u98df\\u8c93\\u8f49\\u98df_\\u5c08\\u6b04.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false}],\"item_count\":50,\"has_tab_bar\":false},{\"level\":2,\"ID\":1779065,\"title\":\"\\u516c\\u76ca\\u6545\\u4e8b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/category/charitystory/\",\"object\":\"category\",\"object_id\":206,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":true,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":3,\"ID\":1806566,\"title\":\"\\u8072\\u63f4\\u7121\\u540d\\u6551\\u707d\\u82f1\\u96c4\\uff0c\\u4e0d\\u8b93\\u641c\\u6551\\u72ac\\u53ea\\u5728\\u707d\\u5bb3\\u6642\\u88ab\\u770b\\u898b\\uff01\\u6c6a\\u55b5\\u661f\\u7403\\u6350\\u8d08\\u6843\\u5e02\\u6d88\\u9632\\u5c40\\u7269\\u8cc7\\uff0c\\u70ba\\u641c\\u6551\\u72ac\\u6490\\u8170\\uff0c\\u85dd\\u4eba\\u9b4f\\u8513\\u548c\\u5f35\\u777f\\u5bb6\\u806f\\u5408\\u97ff\\u61c9\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_rescuedogs_news/\",\"object\":\"post\",\"object_id\":1806566,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/09/21/1806566/1_\\u6c6a\\u55b5\\u661f\\u7403__\\u6350\\u8d08\\u6843\\u5e02\\u6d88\\u9632\\u5c40\\u7269\\u8cc7-\\u70ba\\u641c\\u6551\\u72ac\\u6490\\u8170.JPG\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1718954,\"title\":\"\\u641c\\u6551\\u72ac \\u767b\\u9678\\u6c6a\\u55b5\\u661f\\u7403\\uff01\\u65b0\\u7af9\\u641c\\u6551\\u72ac\\u968a\\u7684\\u72d7\\u72d7\\u8a13\\u7df4\\u79d8\\u5bc6\\u5206\\u4eab\\uff5c\\u6c6a\\u55b5\\u661f\\u7403\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_rescuedogs/\",\"object\":\"post\",\"object_id\":1718954,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/05/30/1718954/IMG_0153.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1495463,\"title\":\"\\u53f0\\u5317\\u5bf5\\u7269\\u5c55\\u9001\\u990a\\u6d3b\\u52d5\\uff5c\\u4f60\\u5e36\\u6d6a\\u6d6a\\u56de\\u5bb6\\uff0c\\u6c6a\\u55b5\\u88dc\\u52a9\\uff11\\u5e74\\u4efd\\u4f19\\u98df\\u8cbb\\uff01\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_0708/\",\"object\":\"post\",\"object_id\":1495463,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2022/07/07/1495463/0707\\u5bf5\\u7269\\u5c55\\u9001\\u990a\\u6d3b\\u52d5.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1198769,\"title\":\"\\u8c93\\u5abd\\u5abd\\u5728\\u8fa6\\u516c\\u5ba4\\u751f\\u5bf6\\u5bf6\\u4e86\\uff01\\u6d6a\\u6d6a\\u7684\\u751f\\u7522\\u5168\\u7d00\\u9304\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/shachamama/\",\"object\":\"post\",\"object_id\":1198769,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2021/03/19/1198769/IMG_9401.HEIC.JPG.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":1096042,\"title\":\"\\u3010\\u6c6a\\u55b5\\u597d\\u670b\\u53cb\\u3011\\u70ba\\u4ec0\\u9ebc\\u6c6a\\u55b5\\u8981\\u548c\\u300a\\u9ed1\\u55b5\\u77e5\\u60c5\\u300b\\u5408\\u4f5c\\u5462\\uff1f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog-animalwhisper/\",\"object\":\"post\",\"object_id\":1096042,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/08/16/1096042/117645392_3282989945096310_1910681866047340541_o.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false},{\"level\":3,\"ID\":155397,\"title\":\"\\u3010\\u6c6a\\u55b5\\u77e5\\u8b58\\u6559\\u5ba4\\u3011\\u9047\\u5230\\u53d7\\u50b7\\u7684\\u6d41\\u6d6a\\u8c93\\u72d7\\uff0c\\u6c92\\u7d93\\u9a57\\u7684\\u4f60\\u53ef\\u4ee5\\u5982\\u4f55\\u8655\\u7406\\uff1f\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog_straydogcat/\",\"object\":\"post\",\"object_id\":155397,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2018/12/22/\\u76ae\\u76aeedm-min.jpg.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false}],\"item_count\":6,\"has_tab_bar\":false}],\"has_child\":true},{\"level\":1,\"ID\":1378802,\"title\":\"\\u53c3\\u89c0\\u5de5\\u5ee0\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/%e7%bd%90%e7%bd%90%e8%a3%bd%e7%a8%8b%e5%a4%a7%e5%85%ac%e9%96%8b/\",\"object\":\"custom\",\"object_id\":1378802,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/09/13/menu_FACTORY@2x.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"button_text\":\"\",\"card_type\":\"text\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":2,\"ID\":2050648,\"title\":\"\\u5de5\\u5ee0\\u9ad4\\u9a57\\u6d3b\\u52d5\\u5831\\u540d\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/welcometodogcatstar/\",\"object\":\"page\",\"object_id\":2045436,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"text\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":2,\"ID\":1801892,\"title\":\"\\u7dda\\u4e0a\\u770b\\u4e3b\\u98df\\u7f50\\u88fd\\u7a0b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/visitsigma/\",\"object\":\"page\",\"object_id\":1780462,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"text\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":2,\"ID\":2018733,\"title\":\"\\u5de5\\u5ee0\\u5de5\\u7a0b\\u9032\\u5ea6\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/category/progress/\",\"object\":\"category\",\"object_id\":195,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"text\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"has_child\":true},{\"level\":1,\"ID\":1797391,\"title\":\"\\u6d3b\\u52d5\\u5c08\\u5340\",\"title_en\":\"\",\"url\":\"\",\"object\":\"custom\",\"object_id\":1797391,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_news-1.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"https://cdn-v2.dogcatstar.com/prod/2022/09/16/menu_news-1.png.webp\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"button_text\":\"\",\"card_type\":\"text\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[{\"level\":2,\"ID\":2050659,\"title\":\"10 \\u4ef6\\u65b0\\u54c1\\u9650\\u6642\\u514d\\u904b\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/2312brand_10freeshipping/\",\"object\":\"page\",\"object_id\":2050157,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":2,\"ID\":2050660,\"title\":\"2023 \\u6c6a\\u55b5\\u54c1\\u724c\\u5c0f\\u805a\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/dogcatstarbrandparty/\",\"object\":\"page\",\"object_id\":2047485,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":2,\"ID\":2050661,\"title\":\"\\u5de5\\u5ee0\\u53c3\\u89c0\\u6d3b\\u52d5\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/welcometodogcatstar/\",\"object\":\"page\",\"object_id\":2045436,\"thumbnail\":{\"url\":\"\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}},{\"level\":2,\"ID\":1335824,\"title\":\"\\u63a8\\u85a6\\u597d\\u53cb\\u8cfa\\u6c6a\\u55b5\\u5e63\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/blog/blog-freecoins/\",\"object\":\"post\",\"object_id\":1118836,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2020/10/12/1118836/lineteach.png.webp\",\"hover_url\":\"\",\"mobile_url\":\"\"},\"icon\":{\"type\":\"\",\"url\":\"\",\"html\":\"\",\"height\":\"\",\"width\":\"\"},\"has_child\":false,\"button_text\":\"\",\"card_type\":\"large\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"}}],\"has_child\":true},{\"level\":1,\"ID\":2050336,\"title\":\"\\u30102023 \\u6c6a\\u55b5\\u54c1\\u724c\\u6708\\u3011\",\"title_en\":\"\",\"url\":\"https://www.dogcatstar.com/2312brand_10freeshipping/\",\"object\":\"page\",\"object_id\":2050157,\"thumbnail\":{\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/12/14/\\u96fb\\u8166\\u7248.gif\",\"hover_url\":\"\",\"mobile_url\":\"https://cdn-v2.dogcatstar.com/prod/2023/12/14/\\u624b\\u6a5f\\u7248.gif\"},\"icon\":{\"type\":\"media\",\"url\":\"https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-1-150x150.jpg\",\"html\":\"\",\"height\":\"10\",\"width\":\"13\"},\"button_text\":\"\",\"card_type\":\"\",\"product_tag\":{\"css_class\":\"\",\"tag_text\":\"\"},\"items\":[],\"has_child\":false}]}}'
        </script>
        <script>
            var cdp_config = {
                "id": "OA-90b38313",
                "env": "production",
                "is_login": "no",
                "site_id": "www.dogcatstar.com",
                "e": ""
            }
        </script>
        <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <!-- This site is optimized with the Yoast SEO Premium plugin v18.8 (Yoast SEO v19.2) - https://yoast.com/wordpress/plugins/seo/ -->
        <title>2023 汪喵品牌月_10項免運 - 汪喵星球</title>
        <link rel="canonical" href="https://www.dogcatstar.com/2312brand_10freeshipping/"/>
        <meta property="og:locale" content="zh_TW"/>
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="2023 汪喵品牌月_10項免運"/>
        <meta property="og:url" content="https://www.dogcatstar.com/2312brand_10freeshipping/"/>
        <meta property="og:site_name" content="汪喵星球"/>
        <meta property="article:modified_time" content="2023-12-15T09:36:08+00:00"/>
        <meta name="author" content="黃 俊皓"/>
        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:label1" content="Est. reading time"/>
        <meta name="twitter:data1" content="4 分鐘"/>
        <script type="application/ld+json" class="yoast-schema-graph">
            {
                "@context": "https://schema.org",
                "@graph": [
                    {
                        "@type": "WebSite",
                        "@id": "https://www.dogcatstar.com/#website",
                        "url": "https://www.dogcatstar.com/",
                        "name": "汪喵星球",
                        "description": "台灣犬貓濕食領導品牌",
                        "potentialAction": [
                            {
                                "@type": "SearchAction",
                                "target": {
                                    "@type": "EntryPoint",
                                    "urlTemplate": "https://www.dogcatstar.com/?s={search_term_string}"
                                },
                                "query-input": "required name=search_term_string"
                            }
                        ],
                        "inLanguage": "zh-TW"
                    },
                    {
                        "@type": "WebPage",
                        "@id": "https://www.dogcatstar.com/2312brand_10freeshipping/#webpage",
                        "url": "https://www.dogcatstar.com/2312brand_10freeshipping/",
                        "name": "2023 汪喵品牌月_10項免運 - 汪喵星球",
                        "isPartOf": {
                            "@id": "https://www.dogcatstar.com/#website"
                        },
                        "datePublished": "2023-12-14T03:47:22+00:00",
                        "dateModified": "2023-12-15T09:36:08+00:00",
                        "breadcrumb": {
                            "@id": "https://www.dogcatstar.com/2312brand_10freeshipping/#breadcrumb"
                        },
                        "inLanguage": "zh-TW",
                        "potentialAction": [
                            {
                                "@type": "ReadAction",
                                "target": [
                                    "https://www.dogcatstar.com/2312brand_10freeshipping/"
                                ]
                            }
                        ]
                    },
                    {
                        "@type": "BreadcrumbList",
                        "@id": "https://www.dogcatstar.com/2312brand_10freeshipping/#breadcrumb",
                        "itemListElement": [
                            {
                                "@type": "ListItem",
                                "position": 1,
                                "name": "Home",
                                "item": "https://www.dogcatstar.com/"
                            },
                            {
                                "@type": "ListItem",
                                "position": 2,
                                "name": "2023 汪喵品牌月_10項免運"
                            }
                        ]
                    }
                ]
            }</script>
        <!-- / Yoast SEO Premium plugin. -->
        <link rel='dns-prefetch' href='//www.dogcatstar.com'/>
        <link rel='dns-prefetch' href='//omnitag.omniscientai.com'/>
        <link rel='dns-prefetch' href='//fonts.googleapis.com'/>
        <link href='https://fonts.gstatic.com' crossorigin rel='preconnect'/>
        <style id='wp-block-library-inline-css' type='text/css'>
            :root {
                --wp-admin-theme-color: #007cba;
                --wp-admin-theme-color--rgb: 0,124,186;
                --wp-admin-theme-color-darker-10: #006ba1;
                --wp-admin-theme-color-darker-10--rgb: 0,107,161;
                --wp-admin-theme-color-darker-20: #005a87;
                --wp-admin-theme-color-darker-20--rgb: 0,90,135;
                --wp-admin-border-width-focus: 2px
            }

            @media (-webkit-min-device-pixel-ratio: 2),(min-resolution:192dpi) {
                :root {
                    --wp-admin-border-width-focus:1.5px
                }
            }

            :root {
                --wp--preset--font-size--normal: 16px;
                --wp--preset--font-size--huge: 42px
            }

            :root .has-very-light-gray-background-color {
                background-color: #eee
            }

            :root .has-very-dark-gray-background-color {
                background-color: #313131
            }

            :root .has-very-light-gray-color {
                color: #eee
            }

            :root .has-very-dark-gray-color {
                color: #313131
            }

            :root .has-vivid-green-cyan-to-vivid-cyan-blue-gradient-background {
                background: linear-gradient(135deg,#00d084,#0693e3)
            }

            :root .has-purple-crush-gradient-background {
                background: linear-gradient(135deg,#34e2e4,#4721fb 50%,#ab1dfe)
            }

            :root .has-hazy-dawn-gradient-background {
                background: linear-gradient(135deg,#faaca8,#dad0ec)
            }

            :root .has-subdued-olive-gradient-background {
                background: linear-gradient(135deg,#fafae1,#67a671)
            }

            :root .has-atomic-cream-gradient-background {
                background: linear-gradient(135deg,#fdd79a,#004a59)
            }

            :root .has-nightshade-gradient-background {
                background: linear-gradient(135deg,#330968,#31cdcf)
            }

            :root .has-midnight-gradient-background {
                background: linear-gradient(135deg,#020381,#2874fc)
            }

            .has-regular-font-size {
                font-size: 1em
            }

            .has-larger-font-size {
                font-size: 2.625em
            }

            .has-normal-font-size {
                font-size: var(--wp--preset--font-size--normal)
            }

            .has-huge-font-size {
                font-size: var(--wp--preset--font-size--huge)
            }

            .has-text-align-center {
                text-align: center
            }

            .has-text-align-left {
                text-align: left
            }

            .has-text-align-right {
                text-align: right
            }

            #end-resizable-editor-section {
                display: none
            }

            .aligncenter {
                clear: both
            }

            .items-justified-left {
                justify-content: flex-start
            }

            .items-justified-center {
                justify-content: center
            }

            .items-justified-right {
                justify-content: flex-end
            }

            .items-justified-space-between {
                justify-content: space-between
            }

            .screen-reader-text {
                border: 0;
                clip: rect(1px,1px,1px,1px);
                -webkit-clip-path: inset(50%);
                clip-path: inset(50%);
                height: 1px;
                margin: -1px;
                overflow: hidden;
                padding: 0;
                position: absolute;
                width: 1px;
                word-wrap: normal!important
            }

            .screen-reader-text:focus {
                background-color: #ddd;
                clip: auto!important;
                -webkit-clip-path: none;
                clip-path: none;
                color: #444;
                display: block;
                font-size: 1em;
                height: auto;
                left: 5px;
                line-height: normal;
                padding: 15px 23px 14px;
                text-decoration: none;
                top: 5px;
                width: auto;
                z-index: 100000
            }

            html :where(.has-border-color),html :where([style*=border-width]) {
                border-style: solid
            }

            html :where(img[class*=wp-image-]) {
                height: auto;
                max-width: 100%
            }
        </style>
        <link rel='stylesheet' id='dashicons-css' href='https://www.dogcatstar.com/wp-includes/css/dashicons.min.css?ver=6.0' type='text/css' media='all'/>
        <link rel='stylesheet' id='dni-general-project-css' href='https://www.dogcatstar.com/wp-content/plugins/006-lds-simple-customization/css/dni-f2e/projects/general.css?ver=2.0.2' type='text/css' media='all'/>
        <link rel='stylesheet' id='general-customize-css-css' href='https://www.dogcatstar.com/wp-content/plugins/006-lds-simple-customization/css/general2.css?ver=2.0.2' type='text/css' media='all'/>
        <link rel='stylesheet' id='react-menu-css' href='https://www.dogcatstar.com/wp-content/plugins/006-lds-simple-customization/css/dni-f2e/react-menu/dcs.css?ver=2.0.2' type='text/css' media='all'/>
        <link rel='stylesheet' id='jquery-ui-style-css' href='https://www.dogcatstar.com/wp-content/plugins/woocommerce/assets/css/jquery-ui/jquery-ui.min.css?ver=2.0.2' type='text/css' media='all'/>
        <style id='woocommerce-inline-inline-css' type='text/css'>
            .woocommerce form .form-row .required {
                visibility: visible;
            }
        </style>
        <link rel='stylesheet' id='affwp-forms-css' href='https://www.dogcatstar.com/wp-content/plugins/affiliate-wp/assets/css/forms.min.css?ver=2.9.2' type='text/css' media='all'/>
        <link rel='stylesheet' id='cw-linepay-style-css' href='https://www.dogcatstar.com/wp-content/plugins/cw-linepay/css/cw-linepay.css?ver=6.0' type='text/css' media='all'/>
        <link rel='stylesheet' id='metorik-css-css' href='https://www.dogcatstar.com/wp-content/plugins/metorik-helper/assets/css/metorik.css?ver=1.5.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='wordpress-popular-posts-css-css' href='https://www.dogcatstar.com/wp-content/plugins/wordpress-popular-posts/assets/css/wpp.css?ver=5.5.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='mycred-front-css' href='https://www.dogcatstar.com/wp-content/plugins/mycred/assets/css/mycred-front.css?ver=2.4.3.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='mycred-social-share-icons-css' href='https://www.dogcatstar.com/wp-content/plugins/mycred/assets/css/mycred-social-icons.css?ver=2.4.3.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='mycred-social-share-style-css' href='https://www.dogcatstar.com/wp-content/plugins/mycred/assets/css/mycred-social-share.css?ver=2.4.3.1' type='text/css' media='all'/>
        <link rel='stylesheet' id='tablepress-default-css' href='https://www.dogcatstar.com/wp-content/plugins/tablepress/css/default.min.css?ver=1.14' type='text/css' media='all'/>
        <link rel='stylesheet' id='wc-bundle-style-css' href='https://www.dogcatstar.com/wp-content/plugins/woocommerce-product-bundles/assets/css/frontend/woocommerce.css?ver=6.10.2' type='text/css' media='all'/>
        <link rel='stylesheet' id='flatsome-main-css' href='https://www.dogcatstar.com/wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.14.3' type='text/css' media='all'/>
        <style id='flatsome-main-inline-css' type='text/css'>
            @font-face {
                font-family: "fl-icons";
                font-display: block;
                src: url(https://www.dogcatstar.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot?v=3.14.3);
                src: url(https://www.dogcatstar.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot#iefix?v=3.14.3) format("embedded-opentype"), url(https://www.dogcatstar.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.woff2?v=3.14.3) format("woff2"), url(https://www.dogcatstar.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.ttf?v=3.14.3) format("truetype"), url(https://www.dogcatstar.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.woff?v=3.14.3) format("woff"), url(https://www.dogcatstar.com/wp-content/themes/flatsome/assets/css/icons/fl-icons.svg?v=3.14.3#fl-icons) format("svg");
            }
        </style>
        <link rel='stylesheet' id='flatsome-shop-css' href='https://www.dogcatstar.com/wp-content/themes/flatsome/assets/css/flatsome-shop.css?ver=3.14.3' type='text/css' media='all'/>
        <link rel='stylesheet' id='flatsome-style-css' href='https://www.dogcatstar.com/wp-content/themes/dogcatstar/style.css?ver=6.0' type='text/css' media='all'/>
        <link rel='stylesheet' id='dni-dcs-project-css' href='https://www.dogcatstar.com/wp-content/plugins/006-lds-simple-customization/css/dni-f2e/projects/dcs.css?ver=2.0.2' type='text/css' media='all'/>
        <link rel='stylesheet' id='wc-bundle-css-css' href='https://www.dogcatstar.com/wp-content/plugins/woocommerce-product-bundles/assets/css/frontend/single-product.css?ver=6.10.2' type='text/css' media='all'/>
        <link rel='stylesheet' id='flatsome-googlefonts-css' href='//fonts.googleapis.com/css?family=Lato%3Aregular%2Cdefault%2Cdefault%2Cdefault%7CDancing+Script%3Aregular%2Cdefault&#038;display=swap&#038;ver=3.9' type='text/css' media='all'/>
        <script type="text/template" id="tmpl-variation-template">
            
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>

        </script>
        <script type="text/template" id="tmpl-unavailable-variation-template">
            
	<p>抱歉，此商品已售完，請選擇不同的組合</p>

        </script>
        <script type="text/javascript">
            window._nslDOMReady = function(callback) {
                if (document.readyState === "complete" || document.readyState === "interactive") {
                    callback();
                } else {
                    document.addEventListener("DOMContentLoaded", callback);
                }
            }
            ;
        </script>
        <script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/006-lds-simple-customization/js/dni-f2e/data-collection/index.js?ver=2.0.2' id='data-collection-js'></script>
        <script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
        <script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
        <script type='text/javascript' id='jquery-cookie-js-extra'>
            /* <![CDATA[ */
            var affwp_scripts = {
                "ajaxurl": "https:\/\/www.dogcatstar.com\/wp-admin\/admin-ajax.php"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/woocommerce/assets/js/jquery-cookie/jquery.cookie.min.js?ver=2.0.2' id='jquery-cookie-js'></script>
        <script type='text/javascript' id='product-data-js-extra'>
            /* <![CDATA[ */
            var product = {
                "project_code": "dcs",
                "subscription_status": []
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/jquery/ui/core.min.js?ver=1.13.1' id='jquery-ui-core-js'></script>
        <script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.13.1' id='jquery-ui-datepicker-js'></script>
        <script type='text/javascript' id='jquery-ui-datepicker-js-after'>
            jQuery(function(jQuery) {
                jQuery.datepicker.setDefaults({
                    "closeText": "\u95dc\u9589",
                    "currentText": "\u4eca\u5929",
                    "monthNames": ["1 \u6708", "2 \u6708", "3 \u6708", "4 \u6708", "5 \u6708", "6 \u6708", "7 \u6708", "8 \u6708", "9 \u6708", "10 \u6708", "11 \u6708", "12 \u6708"],
                    "monthNamesShort": ["1 \u6708", "2 \u6708", "3 \u6708", "4 \u6708", "5 \u6708", "6 \u6708", "7 \u6708", "8 \u6708", "9 \u6708", "10 \u6708", "11 \u6708", "12 \u6708"],
                    "nextText": "\u4e0b\u4e00\u6b65",
                    "prevText": "\u4e0a\u4e00\u6b65",
                    "dayNames": ["\u661f\u671f\u65e5", "\u661f\u671f\u4e00", "\u661f\u671f\u4e8c", "\u661f\u671f\u4e09", "\u661f\u671f\u56db", "\u661f\u671f\u4e94", "\u661f\u671f\u516d"],
                    "dayNamesShort": ["\u9031\u65e5", "\u9031\u4e00", "\u9031\u4e8c", "\u9031\u4e09", "\u9031\u56db", "\u9031\u4e94", "\u9031\u516d"],
                    "dayNamesMin": ["\u65e5", "\u4e00", "\u4e8c", "\u4e09", "\u56db", "\u4e94", "\u516d"],
                    "dateFormat": "yy-mm-dd",
                    "firstDay": 0,
                    "isRTL": false
                });
            });
        </script>
        <script type='text/javascript' id='warehouse-js-js-extra'>
            /* <![CDATA[ */
            var wh_config = {
                "ajax_url": "https:\/\/www.dogcatstar.com\/wp-admin\/admin-ajax.php",
                "translation": {
                    "delivery_method": "\u8acb\u9078\u64c7\u6bcf\u6b21\u5230\u8ca8\u5305\u6578",
                    "delivery_interval": "\u8acb\u9078\u64c7\u914d\u9001\u983b\u7387",
                    "product_package": "\u9078\u64c7\u898f\u683c"
                }
            };
            /* ]]> */
        </script>
        <script type='text/javascript' id='affwp-tracking-js-extra'>
            /* <![CDATA[ */
            var affwp_debug_vars = {
                "integrations": {
                    "woocommerce": "WooCommerce"
                },
                "version": "2.9.2",
                "currency": "TWD",
                "ref_cookie": "affwp_ref",
                "visit_cookie": "affwp_ref_visit_id",
                "campaign_cookie": "affwp_campaign"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/affiliate-wp/assets/js/tracking.min.js?ver=2.9.2' id='affwp-tracking-js'></script>
        <script type='application/json' id='wpp-json'>
            {
                "sampling_active": 1,
                "sampling_rate": 100,
                "ajax_url": "https:\/\/www.dogcatstar.com\/wp-json\/wordpress-popular-posts\/v1\/popular-posts",
                "api_url": "https:\/\/www.dogcatstar.com\/wp-json\/wordpress-popular-posts",
                "ID": 2050157,
                "token": "86c70ef79b",
                "lang": 0,
                "debug": 1
            }</script>
        <script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/wordpress-popular-posts/assets/js/wpp.min.js?ver=5.5.1' id='wpp-js-js'></script>
        <script type='text/javascript' id='dcs-extend-js-js-extra'>
            /* <![CDATA[ */
            var DCS_vars = {
                "ajaxurl": "https:\/\/www.dogcatstar.com\/wp-admin\/admin-ajax.php"
            };
            /* ]]> */
        </script>
        <script type='text/javascript' src='https://www.dogcatstar.com/wp-content/themes/dogcatstar/js/dcs-extend.js?ver=6.0' id='dcs-extend-js-js'></script>
        <link rel="https://api.w.org/" href="https://www.dogcatstar.com/wp-json/"/>
        <link rel="alternate" type="application/json" href="https://www.dogcatstar.com/wp-json/wp/v2/pages/2050157"/>
        <link rel='shortlink' href='https://www.dogcatstar.com/?p=2050157'/>
        <link rel="alternate" type="application/json+oembed" href="https://www.dogcatstar.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.dogcatstar.com%2F2312brand_10freeshipping%2F"/>
        <link rel="alternate" type="text/xml+oembed" href="https://www.dogcatstar.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.dogcatstar.com%2F2312brand_10freeshipping%2F&#038;format=xml"/>
        <script>
            var cdp_product_list = [];
            var cdp_product_detail = [];
            var cdp_cart_items = [];
            var cdp_purchase_detail = [];
        </script>
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0]
                  , j = d.createElement(s)
                  , dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            }
            )(window, document, 'script', 'dataLayer', 'GTM-58N5FSC8');
        </script>
        <!-- End Google Tag Manager -->
        <meta name="google-site-verification" content="5J4BDjNOcvqXyISSRxqGIddKiwupT-SyHIC2x16SlKs"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script id="sharethis" src="https://platform-api.sharethis.com/js/sharethis.js#property=63f871a5595f5b00134e8c02&amp;product=sop" async="async" type="text/javascript"></script>
        <style>
            .nav > li.html_nav_position_text {
                display: none;
            }
        </style>
        <link rel="alternate" href="https://www.dogcatstar.com/" hreflang="zh_TW"/>
        <link rel="alternate" href="https://www.dogcatstar.com/hk/" hreflang="zh_HK"/>
        <link rel="alternate" href="https://www.dogcatstar.com/sg/" hreflang="en_US"/>
        <link rel="alternate" href="https://www.dogcatstar.com/my/" hreflang="en_US"/>
        <script>
            var cart_item_count = 0;
            var is_warehouse_in_cart = 'no';
            var ajax_url = 'https://www.dogcatstar.com/wp-admin/admin-ajax.php';
            var is_allow_combined_purchase = 'no';
        </script>
        <!-- This website runs the Product Feed PRO for WooCommerce by AdTribes.io plugin -->
        <script type="text/javascript">
            var AFFWP = AFFWP || {};
            AFFWP.referral_var = 'ref';
            AFFWP.expiration = 1;
            AFFWP.debug = 0;

            AFFWP.referral_credit_last = 0;
        </script>
        <style id="wpp-loading-animation-styles">
            @-webkit-keyframes bgslide {
                from {
                    background-position-x: 0
                }

                to {
                    background-position-x: -200%
                }
            }

            @keyframes bgslide {
                from {
                    background-position-x: 0
                }

                to {
                    background-position-x: -200%
                }
            }

            .wpp-widget-placeholder,.wpp-widget-block-placeholder {
                margin: 0 auto;
                width: 60px;
                height: 3px;
                background: #dd3737;
                background: linear-gradient(90deg,#dd3737 0%,#571313 10%,#dd3737 100%);
                background-size: 200% auto;
                border-radius: 3px;
                -webkit-animation: bgslide 1s infinite linear;
                animation: bgslide 1s infinite linear
            }
        </style>
        <!--[if IE]><link rel="stylesheet" type="text/css" href="https://www.dogcatstar.com/wp-content/themes/flatsome/assets/css/ie-fallback.css"><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script><script>var head = document.getElementsByTagName('head')[0],style = document.createElement('style');style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);</script><script src="https://www.dogcatstar.com/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script><![endif]-->
        <noscript>
            <style>
                .woocommerce-product-gallery {
                    opacity: 1 !important;
                }
            </style>
        </noscript>
        <style>
            .wp-block-gallery.is-cropped .blocks-gallery-item picture {
                height: 100%;
                width: 100%;
            }
        </style>
        <link rel="icon" href="https://cdn-v2.dogcatstar.com/prod/2020/07/03/cropped-new_logo-2-32x32.png" sizes="32x32"/>
        <link rel="icon" href="https://cdn-v2.dogcatstar.com/prod/2020/07/03/cropped-new_logo-2-192x192.png" sizes="192x192"/>
        <link rel="apple-touch-icon" href="https://cdn-v2.dogcatstar.com/prod/2020/07/03/cropped-new_logo-2-180x180.png"/>
        <meta name="msapplication-TileImage" content="https://cdn-v2.dogcatstar.com/prod/2020/07/03/cropped-new_logo-2-270x270.png"/>
        <style type="text/css">
            div.nsl-container[data-align="left"] {
                text-align: left;
            }

            div.nsl-container[data-align="center"] {
                text-align: center;
            }

            div.nsl-container[data-align="right"] {
                text-align: right;
            }

            div.nsl-container .nsl-container-buttons a {
                text-decoration: none !important;
                box-shadow: none !important;
                border: 0;
            }

            div.nsl-container .nsl-container-buttons {
                display: flex;
                padding: 5px 0;
            }

            div.nsl-container.nsl-container-block .nsl-container-buttons {
                display: inline-grid;
                grid-template-columns: minmax(145px, auto);
            }

            div.nsl-container-block-fullwidth .nsl-container-buttons {
                flex-flow: column;
                align-items: center;
            }

            div.nsl-container-block-fullwidth .nsl-container-buttons a, div.nsl-container-block .nsl-container-buttons a {
                flex: 1 1 auto;
                display: block;
                margin: 5px 0;
                width: 100%;
            }

            div.nsl-container-inline {
                margin: -5px;
                text-align: left;
            }

            div.nsl-container-inline .nsl-container-buttons {
                justify-content: center;
                flex-wrap: wrap;
            }

            div.nsl-container-inline .nsl-container-buttons a {
                margin: 5px;
                display: inline-block;
            }

            div.nsl-container-grid .nsl-container-buttons {
                flex-flow: row;
                align-items: center;
                flex-wrap: wrap;
            }

            div.nsl-container-grid .nsl-container-buttons a {
                flex: 1 1 auto;
                display: block;
                margin: 5px;
                max-width: 280px;
                width: 100%;
            }

            @media only screen and (min-width: 650px) {
                div.nsl-container-grid .nsl-container-buttons a {
                    width: auto;
                }
            }

            div.nsl-container .nsl-button {
                cursor: pointer;
                vertical-align: top;
                border-radius: 4px;
            }

            div.nsl-container .nsl-button-default {
                color: #fff;
                display: flex;
            }

            div.nsl-container .nsl-button-icon {
                display: inline-block;
            }

            div.nsl-container .nsl-button-svg-container {
                flex: 0 0 auto;
                padding: 8px;
                display: flex;
                align-items: center;
            }

            div.nsl-container svg {
                height: 24px;
                width: 24px;
                vertical-align: top;
            }

            div.nsl-container .nsl-button-default div.nsl-button-label-container {
                margin: 0 24px 0 12px;
                padding: 10px 0;
                font-family: Helvetica, Arial, sans-serif;
                font-size: 16px;
                line-height: 20px;
                letter-spacing: .25px;
                overflow: hidden;
                text-align: center;
                text-overflow: clip;
                white-space: nowrap;
                flex: 1 1 auto;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                text-transform: none;
                display: inline-block;
            }

            div.nsl-container .nsl-button-google[data-skin="dark"] .nsl-button-svg-container {
                margin: 1px;
                padding: 7px;
                border-radius: 3px;
                background: #fff;
            }

            div.nsl-container .nsl-button-google[data-skin="light"] {
                border-radius: 1px;
                box-shadow: 0 1px 5px 0 rgba(0, 0, 0, .25);
                color: RGBA(0, 0, 0, 0.54);
            }

            div.nsl-container .nsl-button-apple .nsl-button-svg-container {
                padding: 0 6px;
            }

            div.nsl-container .nsl-button-apple .nsl-button-svg-container svg {
                height: 40px;
                width: auto;
            }

            div.nsl-container .nsl-button-apple[data-skin="light"] {
                color: #000;
                box-shadow: 0 0 0 1px #000;
            }

            div.nsl-container .nsl-button-facebook[data-skin="white"] {
                color: #000;
                box-shadow: inset 0 0 0 1px #000;
            }

            div.nsl-container .nsl-button-facebook[data-skin="light"] {
                color: #1877F2;
                box-shadow: inset 0 0 0 1px #1877F2;
            }

            div.nsl-container .nsl-button-apple div.nsl-button-label-container {
                font-size: 17px;
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            }

            .nsl-clear {
                clear: both;
            }

            .nsl-container {
                clear: both;
            }

            /*Button align start*/
            div.nsl-container-inline[data-align="left"] .nsl-container-buttons {
                justify-content: flex-start;
            }

            div.nsl-container-inline[data-align="center"] .nsl-container-buttons {
                justify-content: center;
            }

            div.nsl-container-inline[data-align="right"] .nsl-container-buttons {
                justify-content: flex-end;
            }

            div.nsl-container-grid[data-align="left"] .nsl-container-buttons {
                justify-content: flex-start;
            }

            div.nsl-container-grid[data-align="center"] .nsl-container-buttons {
                justify-content: center;
            }

            div.nsl-container-grid[data-align="right"] .nsl-container-buttons {
                justify-content: flex-end;
            }

            div.nsl-container-grid[data-align="space-around"] .nsl-container-buttons {
                justify-content: space-around;
            }

            div.nsl-container-grid[data-align="space-between"] .nsl-container-buttons {
                justify-content: space-between;
            }

            /* Button align end*/
            /* Redirect */
            #nsl-redirect-overlay {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                position: fixed;
                z-index: 1000000;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                backdrop-filter: blur(1px);
                background-color: RGBA(0, 0, 0, .32);
                ; }

            #nsl-redirect-overlay-container {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                background-color: white;
                padding: 30px;
                border-radius: 10px;
            }

            #nsl-redirect-overlay-spinner {
                content: '';
                display: block;
                margin: 20px 0;
                border: 9px solid RGBA(0, 0, 0, .6);
                border-top: 9px solid #fff;
                border-radius: 50%;
                box-shadow: inset 0 0 0 1px RGBA(0, 0, 0, .6), 0 0 0 1px RGBA(0, 0, 0, .6);
                width: 40px;
                height: 40px;
                animation: nsl-loader-spin 2s linear infinite;
            }

            @keyframes nsl-loader-spin {
                0% {
                    transform: rotate(0deg)
                }

                to {
                    transform: rotate(360deg)
                }
            }

            #nsl-redirect-overlay-title {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
                font-size: 18px;
                font-weight: bold;
                color: #3C434A;
            }

            #nsl-redirect-overlay-text {
                font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
                text-align: center;
                font-size: 14px;
                color: #3C434A;
            }

            /* Redirect END*/
        </style>
        <style id="custom-css" type="text/css">
            :root {
                --primary-color: #6C5C53;
            }

            html {
                background-color: #f9f8f4!important;
            }

            .full-width .ubermenu-nav, .container, .row {
                max-width: 1050px
            }

            .row.row-collapse {
                max-width: 1020px
            }

            .row.row-small {
                max-width: 1042.5px
            }

            .row.row-large {
                max-width: 1080px
            }

            .sticky-add-to-cart--active, #wrapper,#main,#main.dark {
                background-color: #f9f8f4
            }

            .header-main {
                height: 131px
            }

            #logo img {
                max-height: 131px
            }

            #logo {
                width: 170px;
            }

            .header-bottom {
                min-height: 55px
            }

            .header-top {
                min-height: 45px
            }

            .transparent .header-main {
                height: 265px
            }

            .transparent #logo img {
                max-height: 265px
            }

            .has-transparent + .page-title:first-of-type,.has-transparent + #main > .page-title,.has-transparent + #main > div > .page-title,.has-transparent + #main .page-header-wrapper:first-of-type .page-title {
                padding-top: 295px;
            }

            .header.show-on-scroll,.stuck .header-main {
                height: 80px!important
            }

            .stuck #logo img {
                max-height: 80px!important
            }

            .header-bg-color, .header-wrapper {
                background-color: #ffffff
            }

            .header-bottom {
                background-color: #eee
            }

            .top-bar-nav > li > a {
                line-height: 16px
            }

            .header-wrapper:not(.stuck) .header-main .header-nav {
                margin-top: 1px
            }

            .stuck .header-main .nav > li > a {
                line-height: 50px
            }

            .header-bottom-nav > li > a {
                line-height: 4px
            }

            @media (max-width: 549px) {
                .header-main {
                    height: 70px
                }

                #logo img {
                    max-height: 70px
                }
            }

            .main-menu-overlay {
                background-color: #F6F6F6
            }

            .nav-dropdown-has-arrow.nav-dropdown-has-border li.has-dropdown:before {
                border-bottom-color: #d3b167;
            }

            .nav .nav-dropdown {
                border-color: #d3b167
            }

            .nav-dropdown {
                border-radius: 10px
            }

            .nav-dropdown {
                font-size: 100%
            }

            .header-top {
                background-color: #543b17!important;
            }

            /* Color */
            .accordion-title.active, .has-icon-bg .icon .icon-inner,.logo a, .primary.is-underline, .primary.is-link, .badge-outline .badge-inner, .nav-outline > li.active> a,.nav-outline >li.active > a, .cart-icon strong,[data-color='primary'], .is-outline.primary {
                color: #6C5C53;
            }

            /* Color !important */
            [data-text-color="primary"] {
                color: #6C5C53!important;
            }

            /* Background Color */
            [data-text-bg="primary"] {
                background-color: #6C5C53;
            }

            /* Background */
            .scroll-to-bullets a,.featured-title, .label-new.menu-item > a:after, .nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,button[type="submit"], .button.wc-forward:not(.checkout):not(.checkout-button), .button.submit-button, .button.primary:not(.is-outline),.featured-table .title,.is-outline:hover, .has-icon:hover .icon-label,.nav-dropdown-bold .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold > li > a:hover, .nav-dropdown-bold.dark .nav-column li > a:hover, .nav-dropdown.nav-dropdown-bold.dark > li > a:hover, .is-outline:hover, .tagcloud a:hover,.grid-tools a, input[type='submit']:not(.is-form), .box-badge:hover .box-text, input.button.alt,.nav-box > li > a:hover,.nav-box > li.active > a,.nav-pills > li.active > a ,.current-dropdown .cart-icon strong, .cart-icon:hover strong, .nav-line-bottom > li > a:before, .nav-line-grow > li > a:before, .nav-line > li > a:before,.banner, .header-top, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover, .button.primary:not(.is-outline), input[type='submit'].primary, input[type='submit'].primary, input[type='reset'].button, input[type='button'].primary, .badge-inner {
                background-color: #6C5C53;
            }

            /* Border */
            .nav-vertical.nav-tabs > li.active > a,.scroll-to-bullets a.active,.nav-pagination > li > .current,.nav-pagination > li > span:hover,.nav-pagination > li > a:hover,.has-hover:hover .badge-outline .badge-inner,.accordion-title.active,.featured-table,.is-outline:hover, .tagcloud a:hover,blockquote, .has-border, .cart-icon strong:after,.cart-icon strong,.blockUI:before, .processing:before,.loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover {
                border-color: #6C5C53
            }

            .nav-tabs > li.active > a {
                border-top-color: #6C5C53
            }

            .widget_shopping_cart_content .blockUI.blockOverlay:before {
                border-left-color: #6C5C53
            }

            .woocommerce-checkout-review-order .blockUI.blockOverlay:before {
                border-left-color: #6C5C53
            }

            /* Fill */
            .slider .flickity-prev-next-button:hover svg,.slider .flickity-prev-next-button:hover .arrow {
                fill: #6C5C53;
            }

            /* Background Color */
            [data-icon-label]:after, .secondary.is-underline:hover,.secondary.is-outline:hover,.icon-label,.button.secondary:not(.is-outline),.button.alt:not(.is-outline), .badge-inner.on-sale, .button.checkout, .single_add_to_cart_button, .current .breadcrumb-step {
                background-color: #ca7658;
            }

            [data-text-bg="secondary"] {
                background-color: #ca7658;
            }

            /* Color */
            .secondary.is-underline,.secondary.is-link, .secondary.is-outline,.stars a.active, .star-rating:before, .woocommerce-page .star-rating:before,.star-rating span:before, .color-secondary {
                color: #ca7658
            }

            /* Color !important */
            [data-text-color="secondary"] {
                color: #ca7658!important;
            }

            /* Border */
            .secondary.is-outline:hover {
                border-color: #ca7658
            }

            .success.is-underline:hover,.success.is-outline:hover,.success {
                background-color: #CA7658
            }

            .success-color, .success.is-link, .success.is-outline {
                color: #CA7658;
            }

            .success-border {
                border-color: #CA7658!important;
            }

            /* Color !important */
            [data-text-color="success"] {
                color: #CA7658!important;
            }

            /* Background Color */
            [data-text-bg="success"] {
                background-color: #CA7658;
            }

            body {
                font-family: "Lato", sans-serif
            }

            body {
                font-weight: 400
            }

            .nav > li > a {
                font-family: "Lato", sans-serif;
            }

            .mobile-sidebar-levels-2 .nav > li > ul > li > a {
                font-family: "Lato", sans-serif;
            }

            .nav > li > a {
                font-weight: 700;
            }

            .mobile-sidebar-levels-2 .nav > li > ul > li > a {
                font-weight: 700;
            }

            h1,h2,h3,h4,h5,h6,.heading-font, .off-canvas-center .nav-sidebar.nav-vertical > li > a {
                font-family: "Lato", sans-serif;
            }

            h1,h2,h3,h4,h5,h6,.heading-font,.banner h1,.banner h2 {
                font-weight: 700;
            }

            .alt-font {
                font-family: "Dancing Script", sans-serif;
            }

            .alt-font {
                font-weight: 400!important;
            }

            .shop-page-title.featured-title .title-overlay {
                background-color: rgba(0,0,0,0.3);
            }

            .has-equal-box-heights .box-image {
                padding-top: 100%;
            }

            .badge-inner.new-bubble {
                background-color: #7a9c59
            }

            .pswp__bg,.mfp-bg.mfp-ready {
                background-color: #F9F8F4
            }

            @media screen and (min-width: 550px) {
                .products .box-vertical .box-image {
                    min-width: 510px!important;
                    width: 510px!important;
                }
            }

            .footer-1 {
                background-color: #f9f8f4
            }

            .footer-2 {
                background-color: #f9f8f4
            }

            .absolute-footer, html {
                background-color: #f9f8f4
            }

            .page-title-small + main .product-container > .row {
                padding-top: 0;
            }

            /* Custom CSS */
            a {
                color: #6c5c53
            }

            a:hover {
                color: #6c5c53
            }

            .ux_banner {
                background-color: #ffffff
            }

            article {
                padding-top: 60px;
            }

            article header h1 {
                text-align: left;
            }

            .article-inner {
                background-color: #fff;
                padding: 20px 48px;
                border-radius: 5px;
            }

            #wrapper, #main {
                background-color: #ffffff;
            }

            .blog-list-style {
                border-bottom: 0px;
            }

            .post-date {
                display: none;
            }

            .wc-points-rewards-product-message {
                display: block;
                margin-bottom: 1em;
                line-height: 1.8;
            }

            .wc_points_rewards_apply_discount {
                margin-top: 1em;
            }

            .label-hot.menu-item > a::after {
                content: 'hot';
            }

            .label-new.menu-item > a::after {
                content: 'new';
            }

            .label-popular.menu-item > a::after {
                content: 'popular';
            }

            .label-sale.menu-item > a::after {
                content: 'sale';
            }

            @-moz-document url-prefix() {
                .quantity.buttons_added {
                    top: 21px;
                }

                .wc-points-rewards-product-message {
                    margin-bottom: 0;
                }
            }

            body.page-id-6665 #logo {
                max-width: 123px !important;
            }

            body.page-id-6665 .woocommerce-message {
                padding-right: unset;
            }

            body.page-id-6665 .attachment-shop_thumbnail {
                width: 32px;
            }

            body.page-id-6665 .shop_table .product-thumbnail {
                width: 42px;
            }

            body.page-id-6665 .shop_table td.product-quantity .quantity,body.page-id-6665 .quantity.buttons_added {
                margin-top: unset;
                top: unset;
            }

            #wc_checkout_add_ons_4 {
                margin-right: 4px;
            }

            #wc_checkout_add_ons_4_field label {
                margin-left: 0;
                font-size: 16px;
            }

            h1.product-title.entry-title {
                display: none;
            }

            body.single-product .price-wrapper {
                display: none;
            }

            body.single-product .section-title-container {
                margin-bottom: 0;
            }

            body.single-product .product-info {
                padding-top: 0;
            }

            .nav-dropdown {
                min-width: 320px;
            }

            ul.header-nav li .nav-dropdown li a {
                font-weight: normal;
                border-bottom: 1px solid #f2f2f2;
                font-size: 90%;
                display: block;
            }

            .text-center .nav-vertical li li {
                padding: 8px 0;
                border-bottom: 1px solid #e6e6e6;
            }

            body.woocommerce-checkout label.checkbox {
                font-size: 16px;
            }

            body.woocommerce-checkout label #wc_checkout_add_ons_5 {
                margin-right: 4px;
                font-size: 0;
            }

            body.woocommerce-checkout .large-5.col p {
                font-size: 14px;
                line-height: 1.5;
            }

            input#place_order {
                width: 100%;
            }

            DIV#ecpcsscw_get-convenience-store > A {
                display: inline-block!important;
            }

            .woocommerce.row.row-large.row-divided {
                margin-bottom: 2.618em;
            }

            DIV#cwtpfw-payment-data FIELDSET#wc-cwtpfw-cc-form P.form-row.form-row-last {
                width: 26%;
                text-align: left;
            }

            @media (max-width: 550px) {
                body.woocommerce-cart .quantity input[type="number"] {
                    width: 3.5rem;
                }

                body.woocommerce-cart td.product-thumbnail {
                    width: 60px;
                }
            }

            #woocommerce-cart-notice-diff-temperature {
                padding: 10px 18px;
                margin-bottom: 24px;
                background: rgb(255, 234, 161);
                color: rgb(255, 105, 46);
                font-weight: 600;
            }

            p.form-row-last {
                float: right;
            }

            body.woocommerce-checkout .woocommerce-info.wc_points_rewards_earn_points, body.woocommerce-checkout .wc_points_redeem_earn_points {
                display: none;
            }

            @media (max-width: 550px) {
                p.form-row-last {
                    float:none
                }

                a.button.checkout.wc-forward {
                    display: none;
                }
            }

            .mailchimp-newsletter {
                display: none;
            }

            .shipping__list_item {
                height: auto;
                text-align: left;
                display: block;
            }

            DIV#cw-ecpay_convenient-store-info A {
                padding: 3px 0px;
                border-radius: 20px;
            }

            DIV#cw-ecpay_convenient-store-info > DIV {
                line-height: 1.5;
            }

            .shipping__list_item {
                margin: 1rem 0 !important;
            }

            body.single-post .article-inner {
                padding: 0px !important;
            }

            a {
                line-height: 1.6;
            }

            .blog-header-wrapper {
                margin-bottom: 2.5rem;
            }

            .nav-dropdown > li.nav-dropdown-col, .nav-dropdown > li.image-column {
                width: auto !important;
            }

            #footer {
                z-index: 0;
            }

            @media only screen and (min-width: 1080px) {
                .menu-item .icon-angle-down {
                    display: none !important;
                }
            }

            /* Custom CSS Tablet */
            @media (max-width: 849px) {
                .slider-wrapper {
                    transform: translateZ(0);
                }
            }

            .label-new.menu-item > a:after {
                content: "New";
            }

            .label-hot.menu-item > a:after {
                content: "Hot";
            }

            .label-sale.menu-item > a:after {
                content: "Sale";
            }

            .label-popular.menu-item > a:after {
                content: "Popular";
            }
        </style>
        <style type="text/css" id="wp-custom-css">
            .account-user.circle img {
                display: none;
            }

            #top-bar .flex-col.flex-left {
                display: none;
            }

            @media screen and (max-width: 900px) {
                .html.header-button-1 {
                    display: none;
                }
            }

            ul.header-nav li.menu-item ul.sub-menu.nav-dropdown {
                max-height: calc(100vh - 150px);
                overflow-y: auto;
                display: block;
            }

            .nav-dropdown-bold .nav-column li>a, .nav-dropdown.nav-dropdown-bold>li>a {
                margin: 0 5px !important;
                font-size: 13px !important;
            }

            .section-title-container .section-title span {
                text-transform: none;
            }

            #masthead>.container.header-inner {
                max-width: 1200px;
            }

            #top-bar>.container.flex-row {
                max-width: 1200px;
            }

            #top-bar>.flex-row .nav-right {
                justify-content: flex-end;
            }

            #woo_pdf_download_link {
                display: none;
            }

            #woo_pdf_invoice_download_link {
                display: none;
            }

            .ui-datepicker-close.ui-state-default.ui-priority-primary.ui-corner-all {
                display: none;
            }

            .text_align_left {
                text-align: left;
            }

            .stn_accordion_small_padding {
                padding: 0.6em 0.1em;
            }
        </style>
    </head>
    <body class="page-template page-template-page-blank page-template-page-blank-php page page-id-2050157 theme-flatsome logged-out woocommerce-no-js full-width bg-fill lightbox nav-dropdown-has-arrow nav-dropdown-has-shadow nav-dropdown-has-border">
        <script data=cfasync="false" data-no-defer="1">
            if (typeof ewww_webp_supported === "undefined") {
                var ewww_webp_supported = !1
            }
            if (ewww_webp_supported) {
                document.body.classList.add("webp-support")
            }
        </script>
        <style type="text/css">
            @font-face {
                font-family: 'FontAwesome';
                src: url(https://www.dogcatstar.com/wp-content/plugins/ezCatTracking/font-face/fontawesome-webfont.eot?#iefix) format('embedded-opentype'), url(https://www.dogcatstar.com/wp-content/plugins/ezCatTracking/font-face/fontawesome-webfont.woff) format('woff'), url(https://www.dogcatstar.com/wp-content/plugins/ezCatTracking/font-face/fontawesome-webfont.ttf) format('truetype'), url(https://www.dogcatstar.com/wp-content/plugins/ezCatTracking/font-face/fontawesome-webfont.svg#BrandonGrotesqueBlack) format('svg');
                font-style: normal;
                font-weight: 100;
            }
        </style>
        <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
        <div id="wrapper">
            <header id="header" class="header has-sticky sticky-shrink">
                <div class="header-wrapper">
                    <div id="top-bar" class="header-top hide-for-sticky nav-dark flex-has-center">
                        <div class="flex-row container">
                            <div class="flex-col hide-for-medium flex-left">
                                <ul class="nav nav-left medium-nav-center nav-small  nav-"></ul>
                            </div>
                            <div class="flex-col hide-for-medium flex-center">
                                <ul class="nav nav-center nav-small  nav-">
                                    <li class="html custom html_nav_position_text_top">
                                        <a href="https://www.dogcatstar.com/2312brand_10freeshipping/">
                                            <font size="4" color="#ffffff">
                                                <strong>汪喵品牌月🚀點我看 10 件免運新品！
                                        </a>
</font></strong></li>
<li class="html custom html_nav_position_text">
    <a href="https://www.dogcatstar.com/2312brand_10freeshipping/">
        <font size="4" color="#ffffff">
            <strong>汪喵品牌月🚀點我看 10 件免運新品！
    </a>
</font></strong></li></ul></div>
<div class="flex-col hide-for-medium flex-right">
    <ul class="nav top-bar-nav nav-right nav-small  nav-">
        <li id="menu-item-2020935" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2020935 menu-item-design-default">
            <a href="https://www.dogcatstar.com/faq/" class="nav-top-link">常見問題</a>
        </li>
        <li id="menu-item-28036" class="menu-item menu-item-type-post_type menu-item-object-post menu-item-28036 menu-item-design-default">
            <a href="https://www.dogcatstar.com/blog/calculator/" class="nav-top-link">餵食量小工具</a>
        </li>
        <li class="html header-button-1">
            <div class="header-button">
                <a href="https://www.dogcatstar.com/blog/blog-freecoins/" class="button plain is-outline" style="border-radius:99px;">
                    <span>▸推薦好友賺汪喵幣！</span>
                </a>
            </div>
        </li>
        <li class="html custom html_topbar_left">
            <div data-dni-feat=locale></div>
        </li>
    </ul>
</div>
<div class="flex-col show-for-medium flex-grow">
    <ul class="nav nav-center nav-small mobile-nav  nav-">
        <li class="html custom html_nav_position_text_top">
            <a href="https://www.dogcatstar.com/2312brand_10freeshipping/">
                <font size="4" color="#ffffff">
                    <strong>汪喵品牌月🚀點我看 10 件免運新品！
            </a>
</font></strong></li>
<li class="html custom html_nav_position_text">
    <a href="https://www.dogcatstar.com/2312brand_10freeshipping/">
        <font size="4" color="#ffffff">
            <strong>汪喵品牌月🚀點我看 10 件免運新品！
    </a>
</font></strong></li></ul></div></div></div>
<div id="masthead" class="header-main ">
    <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
        <!-- Logo -->
        <div id="logo" class="flex-col logo">
            <!-- Header logo -->
            <a href="https://www.dogcatstar.com/" title="汪喵星球 - 台灣犬貓濕食領導品牌" rel="home">
                <picture>
                    <source srcset="https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_logo.png.webp" type='image/webp'>
                    <img width="170" height="131" src="https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_logo.png" class="header_logo header-logo" alt="汪喵星球" data-eio="p"/>
                </picture>
                <picture>
                    <source srcset="https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_logo.png.webp" type='image/webp'>
                    <img width="170" height="131" src="https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_logo.png" class="header-logo-dark" alt="汪喵星球" data-eio="p"/>
                </picture>
            </a>
        </div>
        <!-- Mobile Left Elements -->
        <div class="flex-col show-for-medium flex-left">
            <ul class="mobile-nav nav nav-left ">
                <li class="nav-icon has-icon">
                    <div class="header-button">
                        <a href="#" data-open="#main-menu" data-pos="center" data-bg="main-menu-overlay" data-color="" class="icon primary button circle is-small" aria-label="Menu" aria-controls="main-menu" aria-expanded="false">
                            <i class="icon-menu"></i>
                            <span class="menu-title uppercase hide-for-small">Menu</span>
                        </a>
                    </div>
                </li>
                <div id="react-mobile-nav"></div>
            </ul>
        </div>
        <!-- Left Elements -->
        <div class="flex-col hide-for-medium flex-left
            flex-grow">
            <ul class="header-nav header-nav-main nav nav-left  nav-line-bottom nav-size-large">
                <div id="react-pc-nav-default">
                    <div class="pc-menu">
                        <div class="header-menu-box">
                            <div class="header-menu">
                                <a href="https://www.dogcatstar.com/about/" data-key="1335682" class="">
                                    <img src="https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_about-1.png.webp" alt="關於汪喵" data-key="1335682">
                                </a>
                            </div>
                            <div class="header-menu">
                                <a href="https://www.dogcatstar.com/product-category/dog/" data-key="1335686" class="">
                                    <img src="https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_dog-1.png.webp" alt="狗狗專區" data-key="1335686">
                                </a>
                            </div>
                            <div class="header-menu">
                                <a href="https://www.dogcatstar.com/product-category/cat/" data-key="1335739" class="">
                                    <img src="https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_cat-1.png.webp" alt="貓咪專區" data-key="1335739">
                                </a>
                            </div>
                            <div class="header-menu">
                                <a href="https://www.dogcatstar.com/blog/" data-key="1335825" class="">
                                    <img src="https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_blog-1.png.webp" alt="汪喵專欄" data-key="1335825">
                                </a>
                            </div>
                            <div class="header-menu">
                                <a href="https://www.dogcatstar.com/%e7%bd%90%e7%bd%90%e8%a3%bd%e7%a8%8b%e5%a4%a7%e5%85%ac%e9%96%8b/" data-key="1378802" class="">
                                    <img src="https://cdn-v2.dogcatstar.com/prod/2023/09/13/menu_FACTORY@2x.png.webp" alt="參觀工廠" data-key="1378802">
                                </a>
                            </div>
                            <div class="header-menu">
                                <a href="" data-key="1797391" class="">
                                    <img src="https://cdn-v2.dogcatstar.com/prod/2020/07/03/menu_news-1.png.webp" alt="活動專區" data-key="1797391">
                                </a>
                            </div>
                            <div class="header-menu">
                                <a href="https://www.dogcatstar.com/2312brand_10freeshipping/" data-key="2050336" class="">
                                    <img src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/電腦版.gif" alt="【2023 汪喵品牌月】" data-key="2050336">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="react-pc-nav"></div>
            </ul>
        </div>
        <!-- Right Elements -->
        <div class="flex-col hide-for-medium flex-right">
            <ul class="header-nav header-nav-main nav nav-right  nav-line-bottom nav-size-large">
                <li class="header-search header-search-dropdown has-icon has-dropdown menu-item-has-children">
                    <div class="header-button">
                        <a href="#" aria-label="搜尋" class="icon primary button circle is-small">
                            <i class="icon-search"></i>
                        </a>
                    </div>
                    <ul class="nav-dropdown nav-dropdown-bold">
                        <li class="header-search-form search-form html relative has-icon">
                            <div class="header-search-form-wrapper">
                                <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                                    <form role="search" method="get" class="searchform" action="https://www.dogcatstar.com/">
                                        <div class="flex-row relative">
                                            <div class="flex-col flex-grow">
                                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">搜尋關鍵字:</label>
                                                <input type="search" id="woocommerce-product-search-field-0" class="search-field mb-0" placeholder="搜尋&hellip;" value="" name="s"/>
                                                <input type="hidden" name="post_type" value="product"/>
                                            </div>
                                            <div class="flex-col">
                                                <button type="submit" value="搜尋" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                                    <i class="icon-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="live-search-results text-left z-top"></div>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="account-item has-icon
">
                    <div class="header-button">
                        <a href="https://www.dogcatstar.com/my-account/" class="nav-top-link nav-top-not-logged-in 
	icon primary button circle is-small" data-open="#login-form-popup">
                            <span>登入	 / 註冊</span>
                        </a>
                    </div>
                </li>
                <li class="cart-item has-icon">
                    <div class="header-button">
                        <a href="https://www.dogcatstar.com/cart/" title="購物車" class="header-cart-link icon primary button circle is-small">
                            <i class="icon-shopping-cart" data-icon-label="0"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Mobile Right Elements -->
        <div class="flex-col show-for-medium flex-right">
            <ul class="mobile-nav nav nav-right ">
                <li class="account-item has-icon">
                    <div class="header-button">
                        <a href="/my-account/" class="account-link account-login icon primary button circle is-small" title="我的帳號">
                            <i class="icon-user"></i>
                        </a>
                    </div>
                </li>
                <li class="cart-item has-icon">
                    <div class="header-button">
                        <a href="https://www.dogcatstar.com/cart/" title="購物車" class="header-cart-link icon primary button circle is-small">
                            <i class="icon-shopping-cart" data-icon-label="0"></i>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="header-bg-container fill">
    <div class="header-bg-image fill"></div>
    <div class="header-bg-color fill"></div>
</div>
</div>
<!-- header-wrapper-->
</header>
<main id="main" class="">
    <div id="content" role="main" class="content-area">
        <section class="section hide-for-medium" id="section_910392311">
            <div class="bg section-bg fill bg-fill bg-loaded bg-loaded"></div>
            <div class="section-content relative">
                <div class="row row-collapse row-full-width" id="row-1945760324">
                    <div id="col-1473671239" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050717">
                                <div class="img-inner dark">
                                    <picture>
                                        <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2.jpg.webp 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-1536x637.jpg.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-2048x849.jpg.webp 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-24x10.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-36x15.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-48x20.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-510x212.jpg.webp 510w" sizes='(max-width: 3450px) 100vw, 3450px' type='image/webp'>
                                        <img width="3450" height="1431" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2.jpg 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-1536x637.jpg 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-2048x849.jpg 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-24x10.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-36x15.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-48x20.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-2-510x212.jpg 510w" sizes="(max-width: 3450px) 100vw, 3450px" data-eio="p"/>
                                    </picture>
                                </div>
                                <style>
                                    #image_2050717 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-917418356" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050718">
                                <div class="img-inner dark">
                                    <picture>
                                        <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1.png.webp 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1536x475.png.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-2048x633.png.webp 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-24x7.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-36x11.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-48x15.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-510x158.png.webp 510w" sizes='(max-width: 3450px) 100vw, 3450px' type='image/webp'>
                                        <img width="3450" height="1067" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1.png 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1536x475.png 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-2048x633.png 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-24x7.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-36x11.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-48x15.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-510x158.png 510w" sizes="(max-width: 3450px) 100vw, 3450px" data-eio="p"/>
                                    </picture>
                                </div>
                                <style>
                                    #image_2050718 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1622811306" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050719">
                                <a class="" href="https://www.dogcatstar.com/product/kidneyhealth/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1.jpg.webp 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1536x343.jpg.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-2048x458.jpg.webp 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-24x5.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-36x8.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-48x11.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-510x114.jpg.webp 510w" sizes='(max-width: 3450px) 100vw, 3450px' type='image/webp'>
                                            <img width="3450" height="771" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1.jpg 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1536x343.jpg 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-2048x458.jpg 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-24x5.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-36x8.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-48x11.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-510x114.jpg 510w" sizes="(max-width: 3450px) 100vw, 3450px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050719 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-365446343" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050720">
                                <a class="" href="https://www.dogcatstar.com/product/seniordogcan/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1.png.webp 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1536x575.png.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-24x9.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-36x13.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-48x18.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-510x191.png.webp 510w" sizes='(max-width: 1725px) 100vw, 1725px' type='image/webp'>
                                            <img width="1725" height="646" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1.png 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1536x575.png 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-24x9.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-36x13.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-48x18.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-510x191.png 510w" sizes="(max-width: 1725px) 100vw, 1725px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050720 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1197674530" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050721">
                                <a class="" href="https://www.dogcatstar.com/product/lowfatcatc/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1.png.webp 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1536x575.png.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-24x9.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-36x13.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-48x18.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-510x191.png.webp 510w" sizes='(max-width: 1725px) 100vw, 1725px' type='image/webp'>
                                            <img width="1725" height="646" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1.png 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1536x575.png 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-24x9.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-36x13.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-48x18.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-510x191.png 510w" sizes="(max-width: 1725px) 100vw, 1725px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050721 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1907434775" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050722">
                                <a class="" href="https://www.dogcatstar.com/product/fit-healthy-probiotics/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1.jpg.webp 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1536x344.jpg.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-2048x458.jpg.webp 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-24x5.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-36x8.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-48x11.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-510x114.jpg.webp 510w" sizes='(max-width: 3450px) 100vw, 3450px' type='image/webp'>
                                            <img width="3450" height="772" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1.jpg 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1536x344.jpg 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-2048x458.jpg 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-24x5.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-36x8.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-48x11.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-510x114.jpg 510w" sizes="(max-width: 3450px) 100vw, 3450px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050722 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1527139506" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050723">
                                <a class="" href="https://www.dogcatstar.com/product/oralcare/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1.png.webp 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1536x662.png.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-24x10.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-36x16.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-48x21.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-510x220.png.webp 510w" sizes='(max-width: 1725px) 100vw, 1725px' type='image/webp'>
                                            <img width="1725" height="743" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1.png 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1536x662.png 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-24x10.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-36x16.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-48x21.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-510x220.png 510w" sizes="(max-width: 1725px) 100vw, 1725px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050723 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-96017878" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050724">
                                <a class="" href="https://www.dogcatstar.com/product/urinary-health-support-2/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1.png.webp 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1536x662.png.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-24x10.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-36x16.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-48x21.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-510x220.png.webp 510w" sizes='(max-width: 1725px) 100vw, 1725px' type='image/webp'>
                                            <img width="1725" height="743" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1.png 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1536x662.png 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-24x10.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-36x16.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-48x21.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-510x220.png 510w" sizes="(max-width: 1725px) 100vw, 1725px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050724 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1146933931" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050725">
                                <a class="" href="https://www.dogcatstar.com/product/tofucatlitterflower/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1.jpg.webp 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1536x530.jpg.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-2048x707.jpg.webp 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-24x8.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-36x12.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-48x17.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-510x176.jpg.webp 510w" sizes='(max-width: 3450px) 100vw, 3450px' type='image/webp'>
                                            <img width="3450" height="1191" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1.jpg 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1536x530.jpg 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-2048x707.jpg 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-24x8.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-36x12.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-48x17.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-510x176.jpg 510w" sizes="(max-width: 3450px) 100vw, 3450px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050725 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-469298657" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050726">
                                <a class="" href="https://www.dogcatstar.com/product/dishsoap/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1.jpg.webp 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1536x381.jpg.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-2048x508.jpg.webp 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-24x6.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-36x9.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-48x12.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-510x126.jpg.webp 510w" sizes='(max-width: 3450px) 100vw, 3450px' type='image/webp'>
                                            <img width="3450" height="855" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1.jpg 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1536x381.jpg 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-2048x508.jpg 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-24x6.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-36x9.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-48x12.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-510x126.jpg 510w" sizes="(max-width: 3450px) 100vw, 3450px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050726 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-490824204" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050727">
                                <a class="" href="https://www.dogcatstar.com/product/mini-scratcher/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1.jpg.webp 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1536x634.jpg.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-24x10.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-36x15.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-48x20.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-510x211.jpg.webp 510w" sizes='(max-width: 1725px) 100vw, 1725px' type='image/webp'>
                                            <img width="1725" height="712" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1.jpg 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1536x634.jpg 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-24x10.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-36x15.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-48x20.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-510x211.jpg 510w" sizes="(max-width: 1725px) 100vw, 1725px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050727 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1378562906" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050728">
                                <a class="" href="https://www.dogcatstar.com/?s=%E6%B2%90%E6%B5%B4&post_type=product">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1.jpg.webp 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1536x634.jpg.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-24x10.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-36x15.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-48x20.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-510x211.jpg.webp 510w" sizes='(max-width: 1725px) 100vw, 1725px' type='image/webp'>
                                            <img width="1725" height="712" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1.jpg 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1536x634.jpg 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-24x10.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-36x15.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-48x20.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-510x211.jpg 510w" sizes="(max-width: 1725px) 100vw, 1725px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050728 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-454326285" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050729">
                                <a class="" href="https://www.dogcatstar.com/product-category/cat/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1.png.webp 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1536x688.png.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-24x11.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-36x16.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-48x22.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-510x229.png.webp 510w" sizes='(max-width: 1725px) 100vw, 1725px' type='image/webp'>
                                            <img width="1725" height="773" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1.png 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1536x688.png 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-24x11.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-36x16.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-48x22.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-510x229.png 510w" sizes="(max-width: 1725px) 100vw, 1725px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050729 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1008817785" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050730">
                                <a class="" href="https://www.dogcatstar.com/product-category/dog/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1.png.webp 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1536x688.png.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-24x11.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-36x16.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-48x22.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-510x229.png.webp 510w" sizes='(max-width: 1725px) 100vw, 1725px' type='image/webp'>
                                            <img width="1725" height="773" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1.png 1725w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1536x688.png 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-24x11.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-36x16.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-48x22.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-510x229.png 510w" sizes="(max-width: 1725px) 100vw, 1725px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050730 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1349242943" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050731">
                                <a class="" href="https://www.dogcatstar.com/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1.png.webp 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1536x123.png.webp 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-2048x164.png.webp 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-24x2.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-36x3.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-48x4.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-510x41.png.webp 510w" sizes='(max-width: 3450px) 100vw, 3450px' type='image/webp'>
                                            <img width="3450" height="276" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1.png 3450w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1536x123.png 1536w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-2048x164.png 2048w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-24x2.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-36x3.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-48x4.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-510x41.png 510w" sizes="(max-width: 3450px) 100vw, 3450px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050731 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_910392311 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }
            </style>
        </section>
        <section class="section show-for-medium" id="section_1222046857">
            <div class="bg section-bg fill bg-fill bg-loaded bg-loaded"></div>
            <div class="section-content relative">
                <div class="row row-collapse row-full-width" id="row-1012143870">
                    <div id="col-890976264" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050732">
                                <div class="img-inner dark">
                                    <picture>
                                        <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3.jpg.webp 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-150x150.jpg.webp 150w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-24x24.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-36x36.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-48x48.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-510x510.jpg.webp 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-326x326.jpg.webp 326w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-100x100.jpg.webp 100w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-32x32.jpg.webp 32w" sizes='(max-width: 1366px) 100vw, 1366px' type='image/webp'>
                                        <img width="1366" height="1367" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3.jpg 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-150x150.jpg 150w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-24x24.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-36x36.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-48x48.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-510x510.jpg 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-326x326.jpg 326w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-100x100.jpg 100w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/1TOP-BN-3-32x32.jpg 32w" sizes="(max-width: 1366px) 100vw, 1366px" data-eio="p"/>
                                    </picture>
                                </div>
                                <style>
                                    #image_2050732 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1123005289" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050733">
                                <div class="img-inner dark">
                                    <picture>
                                        <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1.png.webp 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-24x16.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-36x24.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-48x32.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-510x345.png.webp 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-482x326.png.webp 482w" sizes='(max-width: 1366px) 100vw, 1366px' type='image/webp'>
                                        <img width="1366" height="923" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1.png 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-24x16.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-36x24.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-48x32.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-510x345.png 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/2-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-482x326.png 482w" sizes="(max-width: 1366px) 100vw, 1366px" data-eio="p"/>
                                    </picture>
                                </div>
                                <style>
                                    #image_2050733 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-637500875" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050734">
                                <a class="" href="https://www.dogcatstar.com/product/kidneyhealth/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1.jpg.webp 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-24x14.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-36x20.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-48x27.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-510x289.jpg.webp 510w" sizes='(max-width: 1366px) 100vw, 1366px' type='image/webp'>
                                            <img width="1366" height="775" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1.jpg 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-24x14.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-36x20.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-48x27.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/3-1-1-1-1-1-1-1-1-1-1-1-1-1-1-1-510x289.jpg 510w" sizes="(max-width: 1366px) 100vw, 1366px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050734 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1549828991" class="col medium-6 small-6 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050735">
                                <a class="" href="https://www.dogcatstar.com/product/seniordogcan/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1.png.webp 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1-24x22.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1-36x32.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1-48x43.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1-510x458.png.webp 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1-363x326.png.webp 363w" sizes='(max-width: 683px) 100vw, 683px' type='image/webp'>
                                            <img width="683" height="613" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1.png 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1-24x22.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1-36x32.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1-48x43.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1-510x458.png 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/4-1-1-1-1-1-1-1-1-1-1-1-1-1-363x326.png 363w" sizes="(max-width: 683px) 100vw, 683px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050735 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-534870999" class="col medium-6 small-6 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050736">
                                <a class="" href="https://www.dogcatstar.com/product/lowfatcatc/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1.png.webp 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1-24x22.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1-36x32.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1-48x43.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1-510x458.png.webp 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1-363x326.png.webp 363w" sizes='(max-width: 683px) 100vw, 683px' type='image/webp'>
                                            <img width="683" height="613" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1.png 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1-24x22.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1-36x32.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1-48x43.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1-510x458.png 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/5-1-1-1-1-1-1-1-1-1-1-1-1-1-363x326.png 363w" sizes="(max-width: 683px) 100vw, 683px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050736 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1163562510" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050737">
                                <a class="" href="https://www.dogcatstar.com/product/fit-healthy-probiotics/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1.jpg.webp 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1-24x14.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1-36x21.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1-48x28.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1-510x298.jpg.webp 510w" sizes='(max-width: 1366px) 100vw, 1366px' type='image/webp'>
                                            <img width="1366" height="797" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1.jpg 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1-24x14.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1-36x21.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1-48x28.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/6-1-1-1-1-1-1-1-1-1-1-510x298.jpg 510w" sizes="(max-width: 1366px) 100vw, 1366px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050737 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1057360921" class="col medium-6 small-6 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050738">
                                <a class="" href="https://www.dogcatstar.com/product/oralcare/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1.png.webp 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1-24x24.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1-34x36.png.webp 34w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1-46x48.png.webp 46w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1-510x536.png.webp 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1-310x326.png.webp 310w" sizes='(max-width: 683px) 100vw, 683px' type='image/webp'>
                                            <img width="683" height="718" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1.png 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1-24x24.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1-34x36.png 34w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1-46x48.png 46w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1-510x536.png 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/7-1-1-1-1-1-1-1-1-1-1-310x326.png 310w" sizes="(max-width: 683px) 100vw, 683px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050738 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1425015653" class="col medium-6 small-6 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050739">
                                <a class="" href="https://www.dogcatstar.com/product/urinary-health-support-2/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1.png.webp 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1-24x24.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1-34x36.png.webp 34w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1-46x48.png.webp 46w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1-510x536.png.webp 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1-310x326.png.webp 310w" sizes='(max-width: 683px) 100vw, 683px' type='image/webp'>
                                            <img width="683" height="718" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1.png 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1-24x24.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1-34x36.png 34w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1-46x48.png 46w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1-510x536.png 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/8-1-1-1-1-1-1-1-1-310x326.png 310w" sizes="(max-width: 683px) 100vw, 683px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050739 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-66095119" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050740">
                                <a class="" href="https://www.dogcatstar.com/product/tofucatlitterflower/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1.jpg.webp 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1-24x22.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1-36x33.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1-48x43.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1-510x461.jpg.webp 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1-361x326.jpg.webp 361w" sizes='(max-width: 1366px) 100vw, 1366px' type='image/webp'>
                                            <img width="1366" height="1234" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1.jpg 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1-24x22.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1-36x33.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1-48x43.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1-510x461.jpg 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/9-1-1-1-1-1-1-1-1-1-361x326.jpg 361w" sizes="(max-width: 1366px) 100vw, 1366px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050740 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-340251695" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050741">
                                <a class="" href="https://www.dogcatstar.com/product/dishsoap/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1.jpg.webp 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1-24x15.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1-36x22.jpg.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1-48x29.jpg.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1-510x312.jpg.webp 510w" sizes='(max-width: 1366px) 100vw, 1366px' type='image/webp'>
                                            <img width="1366" height="837" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1.jpg 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1-24x15.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1-36x22.jpg 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1-48x29.jpg 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/10-1-1-1-1-1-1-510x312.jpg 510w" sizes="(max-width: 1366px) 100vw, 1366px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050741 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-77771032" class="col medium-6 small-6 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050742">
                                <a class="" href="https://www.dogcatstar.com/product/mini-scratcher/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1.jpg.webp 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1-24x24.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1-34x36.jpg.webp 34w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1-46x48.jpg.webp 46w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1-510x537.jpg.webp 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1-310x326.jpg.webp 310w" sizes='(max-width: 683px) 100vw, 683px' type='image/webp'>
                                            <img width="683" height="719" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1.jpg 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1-24x24.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1-34x36.jpg 34w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1-46x48.jpg 46w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1-510x537.jpg 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/11-1-1-1-1-1-1-310x326.jpg 310w" sizes="(max-width: 683px) 100vw, 683px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050742 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1167059941" class="col medium-6 small-6 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050743">
                                <a class="" href="https://www.dogcatstar.com/?s=%E6%B2%90%E6%B5%B4&post_type=product">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1.jpg.webp 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1-24x24.jpg.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1-34x36.jpg.webp 34w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1-46x48.jpg.webp 46w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1-510x537.jpg.webp 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1-310x326.jpg.webp 310w" sizes='(max-width: 683px) 100vw, 683px' type='image/webp'>
                                            <img width="683" height="719" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1.jpg" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1.jpg 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1-24x24.jpg 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1-34x36.jpg 34w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1-46x48.jpg 46w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1-510x537.jpg 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/12-1-1-1-1-1-310x326.jpg 310w" sizes="(max-width: 683px) 100vw, 683px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050743 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-1273450613" class="col medium-6 small-6 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050744">
                                <a class="" href="https://www.dogcatstar.com/product-category/cat/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1.png.webp 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1-22x24.png.webp 22w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1-32x36.png.webp 32w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1-43x48.png.webp 43w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1-510x568.png.webp 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1-293x326.png.webp 293w" sizes='(max-width: 683px) 100vw, 683px' type='image/webp'>
                                            <img width="683" height="761" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1.png 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1-22x24.png 22w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1-32x36.png 32w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1-43x48.png 43w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1-510x568.png 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/13-1-1-1-1-1-1-293x326.png 293w" sizes="(max-width: 683px) 100vw, 683px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050744 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-350416865" class="col medium-6 small-6 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050745">
                                <a class="" href="https://www.dogcatstar.com/product-category/dog/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1.png.webp 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1-22x24.png.webp 22w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1-32x36.png.webp 32w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1-43x48.png.webp 43w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1-510x568.png.webp 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1-293x326.png.webp 293w" sizes='(max-width: 683px) 100vw, 683px' type='image/webp'>
                                            <img width="683" height="761" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1.png 683w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1-22x24.png 22w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1-32x36.png 32w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1-43x48.png 43w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1-510x568.png 510w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/14-1-1-1-1-1-1-293x326.png 293w" sizes="(max-width: 683px) 100vw, 683px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050745 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-315111725" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_2050746">
                                <a class="" href="https://www.dogcatstar.com/">
                                    <div class="img-inner dark">
                                        <picture>
                                            <source srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1.png.webp 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1-24x5.png.webp 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1-36x7.png.webp 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1-48x9.png.webp 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1-510x100.png.webp 510w" sizes='(max-width: 1366px) 100vw, 1366px' type='image/webp'>
                                            <img width="1366" height="269" src="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1.png" class="attachment-large size-large" alt="" loading="lazy" srcset="https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1.png 1366w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1-24x5.png 24w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1-36x7.png 36w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1-48x9.png 48w, https://cdn-v2.dogcatstar.com/prod/2023/12/14/2050157/15-1-1-1-1-1-510x100.png 510w" sizes="(max-width: 1366px) 100vw, 1366px" data-eio="p"/>
                                        </picture>
                                    </div>
                                </a>
                                <style>
                                    #image_2050746 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_1222046857 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                }
            </style>
        </section>
    </div>
</main>
<!-- #main -->
<footer id="footer" class="footer-wrapper">
    <div style="position:relative;text-align:center;">
        <div style="background:#FFFFFF;">
            <div class="shopping-process" style="margin-top:40px;padding-top:20px;background:#FFFFFF;"></div>
        </div>
        <div style="top:-20px;background:#FFFFFF;position:relative;">
            <div style="position:relative">
                <div style="position:relative;width:32px;height:30px;margin:0 auto 0 auto;background:#FFFFFF;z-index:1000;">
                    <img style="margin:7px auto 7px auto" src="https://www.dogcatstar.com/wp-content/themes/dogcatstar/images/home-paw.png"/>
                </div>
                <div style="background-image:url('https://www.dogcatstar.com/wp-content/themes/dogcatstar/images/dot.png');
			background-repeat:repeat-x;position:relative;top:-15px;height:6px;width:90%;margin:0 auto 0 auto;"></div>
            </div>
            <!--
	<a href="https://www.facebook.com/groups/1451396261819304/?ref=bookmarks" target="_blank">
		<img style="margin:10px 25px 25px 25px" src="wp-content/uploads/2015/05/dogcatstar-fb-dog-group.png" alt="dogcatstar-fb-dog-group" width="176" height="48" /></a>
	<a href="https://www.facebook.com/groups/744045802343650/?ref=bookmarks" target="_blank">
		<img style="margin:10px 25px 25px 25px" src="wp-content/uploads/2015/05/dogcatstar-fb-cat-group.png" alt="dogcatstar-fb-cat-group" width="176" height="48" /></a>
	<a href="https://www.facebook.com/pages/%E6%B1%AA%E5%96%B5%E6%98%9F%E7%90%83/836293449765984" target="_blank">
		<img style="margin:10px 25px 25px 25px" src="wp-content/uploads/2015/05/dogcatstar-fb-fanspage.png" alt="dogcatstar-fb-fanspage" width="163" height="48" /></a>
	<a href="https://line.me/ti/p/%40zlo8319e">
		<img style="margin:10px 25px 25px 25px" src="wp-content/uploads/2015/05/dogcatstar-line-account.png" alt="dogcatstar-line-account" width="157" height="48" /></a>
	-->
        </div>
    </div>
    <div style="padding-top:20px;text-align:center;font-size: 0.9em;color:#6c5c53;opacity:1;position:relative;">
        <section class="section" id="section_800286936">
            <div class="bg section-bg fill bg-fill bg-loaded bg-loaded">
                <div class="is-border" style="border-color:rgb(235, 235, 235);border-width:1px 0px 0px 0px;"></div>
            </div>
            <div class="section-content relative">
                <div class="row row-dashed hide-for-medium" style="max-width:1500px" id="row-627312546">
                    <div id="col-1987616379" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-underline expand" style="padding:0px 60px 0px 0px;">
                                <span>關於汪喵</span>
                            </a>
                            <h5 class="uppercase" style="text-align: center">
                                <span style="font-family: 'Microsoft JhengHei';color: #808080">
                                    <a style="color: #808080" href="https://www.dogcatstar.com/about/">品牌故事</a>
                                    <br/>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/category/meow_rd_diary/">研發日誌</a>
                                        <br/>
                                    </span>
                                </span>
                                <span style="font-family: 'Microsoft JhengHei';color: #808080">
                                    <a style="color: #808080" href="https://www.dogcatstar.com/join-us/">加入我們</a>
                                    <br/>
                                    <a style="color: #808080" href="https://www.dogcatstar.com/contact-us/">合作接洽</a>
                                </span>
                            </h5>
                        </div>
                    </div>
                    <div id="col-365910335" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-underline expand" style="padding:0px 60px 0px 0px;">
                                <span>新手選購</span>
                            </a>
                            <h5 class="uppercase" style="text-align: center">
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/hk/product/catcan_try/">貓罐免運體驗組</a>
                                        <br/>
                                    </span>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/hk/product/dogcan_try/">狗罐免運體驗組</a>
                                    </span>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <br/>
                                        <a style="color: #808080" href="https://www.dogcatstar.com/hk/product/try-cat-rawfood/">貓咪生食新手包</a>
                                        <br/>
                                    </span>
                                </span>
                                <a href="https://www.dogcatstar.com/hk/product/try-dog-rawfood/">
                                    <span style="color: #808080">
                                        <span style="font-family: 'Microsoft JhengHei'">狗狗生食新手包</span>
                                    </span>
                                </a>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <br/>
                                    </span>
                                </span>
                            </h5>
                        </div>
                    </div>
                    <div id="col-1022712503" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-underline expand" style="padding:0px 60px 0px 0px;">
                                <span>購買相關</span>
                            </a>
                            <h5 class="uppercase" style="text-align: center">
                                <span style="font-family: 'Microsoft JhengHei';color: #808080">
                                    <a style="color: #808080" href="https://www.dogcatstar.com/faq/">常見問題</a>
                                    <br/>
                                    <a style="color: #808080" href="https://www.dogcatstar.com/faq/">海外訂購</a>
                                    <br/>
                                    <a style="color: #808080" href="https://www.dogcatstar.com/store/">實體商店</a>
                                </span>
                            </h5>
                        </div>
                    </div>
                    <div id="col-1192356623" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-underline expand" style="padding:0px 60px 0px 0px;">
                                <span>小幫手</span>
                            </a>
                            <h5 class="uppercase" style="text-align: center">
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/new-quick-checkout/">台灣快速購買</a>
                                        <br/>
                                    </span>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/blog/2015/08/23/calculator/">餵食量小工具</a>
                                    </span>
                                </span>
                            </h5>
                        </div>
                    </div>
                    <div id="col-1605218194" class="col medium-4 small-12 large-4">
                        <div class="col-inner">
                            <a href="https://www.dogcatstar.com/contact-us/" target="_self" class="button primary is-underline expand" style="padding:0px 60px 0px 0px;">
                                <span>聯絡我們</span>
                            </a>
                            <p style="text-align: center">
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei';font-size: 95%">
                                        ▌營業時間：周一至周五 09:30-18:00   <br/>
                                        ▌客服電話：02-2546-4922　　　 　  <br/>
                                        ▌E-mail: service@dogcatstar.com　  <br/>
                                    </span>
                                </span>
                            </p>
                            <a href="https://line.me/R/ti/p/%40zlo8319e" target="_self" class="button primary is-bevel" style="border-radius:99px;">
                                <span>LINE 一對一客服</span>
                            </a>
                            <div class="social-icons follow-icons">
                                <a href="https://www.facebook.com/dogcatstar" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon button circle is-outline facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook">
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/dogcat.star/" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon button circle is-outline  instagram tooltip" title="Follow on Instagram" aria-label="Follow on Instagram">
                                    <i class="icon-instagram"></i>
                                </a>
                                <a href="tel:+886225464922" target="_blank" data-label="Phone" rel="noopener noreferrer nofollow" class="icon button circle is-outline  phone tooltip" title="Call us" aria-label="Call us">
                                    <i class="icon-phone"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-dashed show-for-small" id="row-424002978">
                    <div id="col-1746690428" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-bevel expand" style="padding:0px 60px 0px 0px;">
                                <span>關於汪喵</span>
                            </a>
                            <h5 class="uppercase" style="text-align: center">
                                <span style="font-family: 'Microsoft JhengHei';color: #808080">
                                    <a style="color: #808080" href="https://www.dogcatstar.com/about/">品牌故事</a>
                                    <br/>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/category/meow_rd_diary/">研發日誌</a>
                                        <br/>
                                    </span>
                                </span>
                                <span style="font-family: 'Microsoft JhengHei';color: #808080">
                                    <a style="color: #808080" href="https://www.dogcatstar.com/join-us/">加入我們</a>
                                    <br/>
                                    <a style="color: #808080" href="https://www.dogcatstar.com/contact-us/">合作接洽</a>
                                </span>
                            </h5>
                        </div>
                    </div>
                    <div id="col-1443606721" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-bevel expand" style="padding:0px 60px 0px 0px;">
                                <span>購買相關</span>
                            </a>
                            <h5 class="uppercase" style="text-align: center">
                                <span style="font-family: 'Microsoft JhengHei';color: #808080">
                                    <a style="color: #808080" href="https://www.dogcatstar.com/faq/">常見問題</a>
                                    <br/>
                                    <a style="color: #808080" href="https://www.dogcatstar.com/faq/">海外訂購</a>
                                    <br/>
                                    <a style="color: #808080" href="https://www.dogcatstar.com/store/">實體商店</a>
                                </span>
                            </h5>
                        </div>
                    </div>
                    <div id="col-766567960" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-bevel expand" style="padding:0px 60px 0px 0px;">
                                <span>新手選購</span>
                            </a>
                            <h5 class="uppercase" style="text-align: center">
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/product/catcan_try/">貓罐免運體驗組</a>
                                        <br/>
                                    </span>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/product/dogcan_try/">狗罐免運體驗組</a>
                                    </span>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <br/>
                                        <a style="color: #808080" href="https://www.dogcatstar.com/product/try-cat-rawfood/">貓咪生食新手包</a>
                                        <br/>
                                    </span>
                                </span>
                                <a href="https://www.dogcatstar.com/product/try-dog-rawfood/">
                                    <span style="color: #808080">
                                        <span style="font-family: 'Microsoft JhengHei'">狗狗生食新手包</span>
                                    </span>
                                </a>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <br/>
                                    </span>
                                </span>
                            </h5>
                        </div>
                    </div>
                    <div id="col-271118897" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-bevel expand" style="padding:0px 60px 0px 0px;">
                                <span>小幫手</span>
                            </a>
                            <h5 class="uppercase" style="text-align: center">
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/new-quick-checkout/">台灣快速購買</a>
                                    </span>
                                </span>
                            </h5>
                            <h5 class="uppercase" style="text-align: center">
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/blog/calculator/">餵食量小工具</a>
                                    </span>
                                </span>
                            </h5>
                        </div>
                    </div>
                    <div id="col-842110394" class="col medium-4 small-12 large-4">
                        <div class="col-inner">
                            <a class="button primary is-bevel expand" style="padding:0px 60px 0px 0px;">
                                <span>聯絡我們</span>
                            </a>
                            <p>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei';font-size: 95%">
                                        ▌營業時間：周一至周五 09:30-18:00   <br/>
                                        ▌客服電話：02-2546-4922　　　 　  <br/>▌E-mail: service@dogcatstar.com　  
                                    </span>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <br/>
                                    </span>
                                </span>
                            </p>
                            <a href="https://line.me/R/ti/p/%40zlo8319e" target="_self" class="button primary is-outline" style="border-radius:99px;">
                                <span>LINE 一對一客服</span>
                            </a>
                            <div class="social-icons follow-icons">
                                <a href="https://www.facebook.com/dogcatstar" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook">
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/dogcat.star/" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon plain  instagram tooltip" title="Follow on Instagram" aria-label="Follow on Instagram">
                                    <i class="icon-instagram"></i>
                                </a>
                                <a href="tel:+886225464922" target="_blank" data-label="Phone" rel="noopener noreferrer nofollow" class="icon plain  phone tooltip" title="Call us" aria-label="Call us">
                                    <i class="icon-phone"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row row-dashed show-for-medium hide-for-small" id="row-2124407156">
                    <div id="col-338635603" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-bevel expand" style="padding:0px 60px 0px 0px;">
                                <span>關於汪喵</span>
                            </a>
                            <h6 class="uppercase" style="text-align: center">
                                <span style="font-family: 'Microsoft JhengHei';color: #808080">
                                    <a style="color: #808080" href="https://www.dogcatstar.com/about/">品牌故事</a>
                                    <br/>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/category/meow_rd_diary/">研發日誌</a>
                                        <br/>
                                    </span>
                                </span>
                                <span style="font-family: 'Microsoft JhengHei';color: #808080">
                                    <a style="color: #808080" href="https://www.dogcatstar.com/join-us/">加入我們</a>
                                    <br/>
                                    <a style="color: #808080" href="https://www.dogcatstar.com/contact-us/">合作接洽</a>
                                </span>
                            </h6>
                        </div>
                    </div>
                    <div id="col-1294594612" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-bevel expand" style="padding:0px 60px 0px 0px;">
                                <span>購買相關</span>
                            </a>
                            <h6 class="uppercase" style="text-align: center">
                                <span style="font-family: 'Microsoft JhengHei';color: #808080">
                                    <a style="color: #808080" href="https://www.dogcatstar.com/faq/">常見問題</a>
                                    <br/>
                                    <a style="color: #808080" href="https://www.dogcatstar.com/faq/">海外訂購</a>
                                    <br/>
                                    <a style="color: #808080" href="https://www.dogcatstar.com/%e5%90%88%e4%bd%9c%e5%ba%97%e9%9d%a2/">實體商店</a>
                                </span>
                            </h6>
                        </div>
                    </div>
                    <div id="col-1504007041" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-bevel expand" style="padding:0px 60px 0px 0px;">
                                <span>新手選購</span>
                            </a>
                            <h6 class="uppercase" style="text-align: center">
                                <strong>
                                    <span style="color: #808080">
                                        <span style="font-family: 'Microsoft JhengHei'">
                                            <a style="color: #808080" href="https://www.dogcatstar.com/product/catcan_try/">貓罐免運體驗組</a>
                                            <br/>
                                        </span>
                                    </span>
                                    <span style="color: #808080">
                                        <span style="font-family: 'Microsoft JhengHei'">
                                            <a style="color: #808080" href="https://www.dogcatstar.com/product/dogcan_try/">狗罐免運體驗組</a>
                                        </span>
                                    </span>
                                    <span style="color: #808080">
                                        <span style="font-family: 'Microsoft JhengHei'">
                                            <br/>
                                            <a style="color: #808080" href="https://www.dogcatstar.com/product/try-cat-rawfood/">貓咪生食新手包</a>
                                            <br/>
                                        </span>
                                    </span>
                                    <a href="https://www.dogcatstar.com/product/try-dog-rawfood/">
                                        <span style="color: #808080">
                                            <span style="font-family: 'Microsoft JhengHei'">狗狗生食新手包</span>
                                        </span>
                                    </a>
                                    <span style="color: #808080">
                                        <span style="font-family: 'Microsoft JhengHei'">
                                            <br/>
                                        </span>
                                    </span>
                                </strong>
                            </h6>
                        </div>
                    </div>
                    <div id="col-1607211156" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <a class="button primary is-bevel expand" style="padding:0px 60px 0px 0px;">
                                <span>小幫手</span>
                            </a>
                            <h6 class="uppercase" style="text-align: center">
                                <span style="font-family: 'Microsoft JhengHei';color: #808080">
                                    <a style="color: #808080" href="https://www.dogcatstar.com/new-quick-checkout/">台灣快速購買</a>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <br/>
                                    </span>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <a style="color: #808080" href="https://www.dogcatstar.com/%e6%af%9b%e5%b0%8f%e5%ad%a9%e6%af%8f%e6%97%a5%e7%86%b1%e9%87%8f%e9%a3%9f%e9%87%8f%e5%92%8c%e9%9c%80%e6%b0%b4%e9%87%8f%e8%a8%88%e7%ae%97/">餵食量小工具</a>
                                    </span>
                                </span>
                            </h6>
                        </div>
                    </div>
                    <div id="col-1837585640" class="col medium-4 small-12 large-4">
                        <div class="col-inner">
                            <a class="button primary is-bevel expand" style="padding:0px 60px 0px 0px;">
                                <span>聯絡我們</span>
                            </a>
                            <p style="text-align: center">
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei';font-size: 95%">
                                        ▌ 營業時間  ▌<br/>
                                        周一至周五 9:30-18:00<br/>
                                        ▌ 客服電話  ▌<br/>02-2546-4922
                                    </span>
                                </span>
                                <span style="color: #808080">
                                    <span style="font-family: 'Microsoft JhengHei'">
                                        <br/>
                                    </span>
                                </span>
                            </p>
                            <a href="https://line.me/R/ti/p/%40zlo8319e" target="_self" class="button primary is-outline expand" style="border-radius:99px;">
                                <span>LINE 一對一客服</span>
                            </a>
                            <div class="social-icons follow-icons">
                                <a href="https://www.facebook.com/dogcatstar" target="_blank" data-label="Facebook" rel="noopener noreferrer nofollow" class="icon plain facebook tooltip" title="Follow on Facebook" aria-label="Follow on Facebook">
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/dogcat.star/" target="_blank" rel="noopener noreferrer nofollow" data-label="Instagram" class="icon plain  instagram tooltip" title="Follow on Instagram" aria-label="Follow on Instagram">
                                    <i class="icon-instagram"></i>
                                </a>
                                <a href="tel:+8860225464922" target="_blank" data-label="Phone" rel="noopener noreferrer nofollow" class="icon plain  phone tooltip" title="Call us" aria-label="Call us">
                                    <i class="icon-phone"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="is-divider divider clearfix" style="margin-top:0.6em;margin-bottom:0.6em;max-width:1050px;"></div>
                </div>
                <div class="row hide-for-medium" id="row-2134396038">
                    <div id="col-1797179644" class="col medium-10 small-12 large-10">
                        <div class="col-inner">
                            <p style="text-align: center">
                                <span style="font-size: 100%;font-family: 'Microsoft JhengHei';color: #ffffff">
                                    <span style="font-size: 90%;color: #333333">
                                        | <a style="color: #333333" href="https://www.dogcatstar.com/terms/">服務條款及隱私權保護政策</a>
                                        | <a style="color: #333333" href="https://www.dogcatstar.com/claim/">智慧財產權保護聲明</a>
                                        |
                                    </span>
                                    <span style="font-size: 90%">
                                        <br/>
                                        <span style="color: #333333">臺北市松山區南京東路4段133巷5弄7號1樓</span>
                                        <br/>
                                    </span>
                                </span>
                            </p>
                            <div class="footer__country-selector"></div>
                        </div>
                    </div>
                    <div id="col-1718239654" class="col medium-2 small-12 large-2">
                        <div class="col-inner">
                            <div data-dni-feat="locale"></div>
                        </div>
                    </div>
                </div>
                <div class="row show-for-medium" id="row-149845098">
                    <div id="col-1509407046" class="col small-12 large-12">
                        <div class="col-inner">
                            <p style="text-align: center">
                                <span style="font-size: 100%;font-family: 'Microsoft JhengHei';color: #333333">
                                    <span style="font-size: 90%">
                                        | <a style="color: #333333" href="https://www.dogcatstar.com/terms/">服務條款及隱私權保護政策</a>
                                        | <a style="color: #333333" href="https://www.dogcatstar.com/claim/">智慧財產權保護聲明</a>
                                        |
                                    </span>
                                    <br/>
                                </span>
                            </p>
                            <div class="footer__country-selector"></div>
                        </div>
                    </div>
                    <div id="col-1303024535" class="col small-12 large-12">
                        <div class="col-inner">
                            <div data-dni-feat="locale"></div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_800286936 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                    min-height: 300px;
                }
            </style>
        </section>
        <div>
            汪喵星球 &copy;2023  
		自力耕生股份有限公司 |
		統編 54652703 |
		㊣ 法律顧問：安永圓方國際法律事務所 
		<img style="padding:10px;" src="https://cdn-v2.dogcatstar.com/common/images/footer/home_footer_payment.png">
        </div>
    </div>
    <div class="fb-customerchat" page_id="836293449765984" minimized="true"></div>
    <!-- FOOTER 1 -->
    <!-- FOOTER 2 -->
    <div class="absolute-footer dark medium-text-center small-text-center">
        <div class="container clearfix">
            <div class="footer-primary pull-left">
                <div class="copyright-footer"></div>
            </div>
        </div>
    </div>
    <a href="#top" class="back-to-top button icon invert plain fixed bottom z-1 is-outline circle" id="top-link" aria-label="Go to top">
        <i class="icon-angle-up"></i>
    </a>
</footer>
<!-- .footer-wrapper -->
</div>
<!-- #wrapper -->
<div id="main-menu" class="mobile-sidebar no-scrollbar mfp-hide">
    <div class="sidebar-menu no-scrollbar text-center">
        <ul class="nav nav-sidebar nav-vertical nav-uppercase nav-anim">
            <li class="header-search-form search-form html relative has-icon">
                <div class="header-search-form-wrapper">
                    <div class="searchform-wrapper ux-search-box relative form-flat is-normal">
                        <form role="search" method="get" class="searchform" action="https://www.dogcatstar.com/">
                            <div class="flex-row relative">
                                <div class="flex-col flex-grow">
                                    <label class="screen-reader-text" for="woocommerce-product-search-field-1">搜尋關鍵字:</label>
                                    <input type="search" id="woocommerce-product-search-field-1" class="search-field mb-0" placeholder="搜尋&hellip;" value="" name="s"/>
                                    <input type="hidden" name="post_type" value="product"/>
                                </div>
                                <div class="flex-col">
                                    <button type="submit" value="搜尋" class="ux-search-submit submit-button secondary button icon mb-0" aria-label="Submit">
                                        <i class="icon-search"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="live-search-results text-left z-top"></div>
                        </form>
                    </div>
                </div>
            </li>
            <li class="header-divider"></li>
            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2020935">
                <a href="https://www.dogcatstar.com/faq/">常見問題</a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-post menu-item-28036">
                <a href="https://www.dogcatstar.com/blog/calculator/">餵食量小工具</a>
            </li>
            <li class="account-item has-icon menu-item">
                <a href="https://www.dogcatstar.com/my-account/" class="nav-top-link nav-top-not-logged-in">
                    <span class="header-account-title">登入  </span>
                </a>
            </li>
            <li class="html custom html_topbar_right">https://lin.ee/773SPvi</li>
        </ul>
    </div>
</div>
<script>
    (function() {
        if (document.getElementById("shipping_option") !== null && typeof document.getElementById("shipping_option") !== "undefined") {
            if (window.addEventListener) {
                window.addEventListener('DOMContentLoaded', initPaymentMethod, false);
            } else {
                window.attachEvent('onload', initPaymentMethod);
            }
        }
    }
    )();
    function initPaymentMethod() {
        var e = document.getElementById("shipping_option");
        var shipping = e.options[e.selectedIndex].value;
        var payment = document.getElementsByName('payment_method');

        if (shipping == "HILIFE_Collection" || shipping == "FAMI_Collection" || shipping == "UNIMART_Collection") {
            var i;

            for (i = 0; i < payment.length; i++) {
                if (payment[i].id != 'payment_method_ecpay_shipping_pay') {
                    payment[i].style.display = "none";

                    checkclass = document.getElementsByClassName("wc_payment_method " + payment[i].id).length;

                    if (checkclass == 0) {
                        var x = document.getElementsByClassName(payment[i].id);
                        x[0].style.display = "none";
                    } else {
                        var x = document.getElementsByClassName("wc_payment_method " + payment[i].id);
                        x[0].style.display = "none";
                    }
                } else {
                    checkclass = document.getElementsByClassName("wc_payment_method " + payment[i].id).length;

                    if (checkclass == 0) {
                        var x = document.getElementsByClassName(payment[i].id);
                        x[0].style.display = "";
                    } else {
                        var x = document.getElementsByClassName("wc_payment_method " + payment[i].id);
                        x[0].style.display = "";
                    }
                }
            }
            document.getElementById('payment_method_ecpay').checked = false;
            document.getElementById('payment_method_ecpay_shipping_pay').checked = true;
            document.getElementById('payment_method_ecpay_shipping_pay').style.display = '';
        } else {
            var i;
            for (i = 0; i < payment.length; i++) {
                if (payment[i].id != 'payment_method_ecpay_shipping_pay') {
                    payment[i].style.display = "";

                    checkclass = document.getElementsByClassName("wc_payment_method " + payment[i].id).length;

                    if (checkclass == 0) {
                        var x = document.getElementsByClassName(payment[i].id);
                        x[0].style.display = "";
                    } else {
                        var x = document.getElementsByClassName("wc_payment_method " + payment[i].id);
                        x[0].style.display = "";
                    }
                } else {
                    checkclass = document.getElementsByClassName("wc_payment_method " + payment[i].id).length;

                    if (checkclass == 0) {
                        var x = document.getElementsByClassName(payment[i].id);
                        x[0].style.display = "none";
                    } else {
                        var x = document.getElementsByClassName("wc_payment_method " + payment[i].id);
                        x[0].style.display = "none";
                    }

                    document.getElementById('payment_method_ecpay').checked = true;
                    document.getElementById('payment_method_ecpay_shipping_pay').checked = false;
                    document.getElementById('payment_method_ecpay_shipping_pay').style.display = "none";
                }
            }
        }
    }
</script>
<div id="login-form-popup" class="lightbox-content mfp-hide">
    <!-- 給頁面式的登入使用 //-->
    <div class="tab-title-bar-wide-wrapper">
        <div class="tab-title-bar-wide">
            <span class="is-active" id="tab-login">
                <a href="#" onclick="backToLoginForm();" data-dni="switch-login">登入</a>
            </span>
            <span class="not-active" id="tab-register">
                <a href="#" onclick="switchToRegisterForm();" data-dni="switch-register">註冊</a>
            </span>
        </div>
    </div>
    <div class="account-container lightbox-inner">
        <div class="account-login-inner">
            <div class="tab-title-bar">
                <span class="is-active">
                    <a href="#" onclick="backToLoginForm();" data-dni='switch-login'>登入</a>
                </span>
                <span class="not-active">
                    <a href="#" onclick="switchToRegisterForm();" data-dni='switch-register'>註冊</a>
                </span>
            </div>
            <div class="line-login-section"></div>
            <form action="/my-account/" class="woocommerce-form woocommerce-form-login login" method="post">
                <div class="login-description">
                    透過 手機 / LINE 註冊，<br/>即可直接解鎖推薦碼，分享賺取點數！
                </div>
                <div id="regular-user-login-form-row">
                    <div id="country-codes">
                        <select name="user_phone_country" id="user-login-country-number">
                            <option value="886" selected='selected'>+886			</option>
                            <option value="852">+852			</option>
                            <option value="853">+853			</option>
                            <option value="60">+60			</option>
                            <option value="65">+65			</option>
                        </select>
                    </div>
                    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" autocomplete="username" placeholder="請輸入手機 / 電子信箱 / 使用者名稱" value="" data-dni="username"/>
                </div>
                <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password" placeholder="請輸入您的密碼" autocomplete="current-password" data-dni="password"/>
                </p>
                <div class="fixed-bottom-position">
                    <p class="form-row">
                        <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="5dc3cc0b98"/>
                        <input type="hidden" name="_wp_http_referer" value="/2312brand_10freeshipping/"/>
                        <button data-dni='login-submit' type="submit" class="woocommerce-button button woocommerce-form-login__submit" name="login" value="登入">登入</button>
                    </p>
                    <div class="login-form-bottom">
                        <div class="left-col">
                            <label class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme" style="display: none">
                                <input class="woocommerce-form__input woocommerce-form__input-checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever" checked/>
                                <span>保持登入</span>
                            </label>
                            <span class="lost_password">
                                <a href="https://www.dogcatstar.com/my-account/lost-password//?type=sms">忘記密碼 (手機)</a>
                            </span>
                        </div>
                        <div class="right-col">
                            <span class="lost_password">
                                <a href="https://www.dogcatstar.com/my-account/lost-password//?type=email">忘記密碼 (電子郵件)</a>
                            </span>
                        </div>
                    </div>
                </div>
            </form>
            <div class="additional-login-bar">
                <div class="lable-bar">其它登入方式</div>
                <div class="login-bar">
                    <a href="https://www.dogcatstar.com/social-login/?loginSocial=facebook&redirect=https%3A%2F%2Fwww.dogcatstar.com%2F2312brand_10freeshipping%2F" data-type="fb">
                        <span class="box-icon fb">
                            <img src="https://cdn-v2.dogcatstar.com/common/images/icon_fb_16.svg">
                        </span>
                    </a>
                    <a href="/oauth/login/line?type=manual" data-type="line">
                        <span class="box-icon line">
                            <img src="https://cdn-v2.dogcatstar.com/common/images/icon_line_16.svg">
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="account-register-inner" style="display: none;">
            <div class="tab-title-bar">
                <span class="not-active">
                    <a href="#" onclick="backToLoginForm();">登入</a>
                </span>
                <span class="is-active">
                    <a href="#" onclick="switchToRegisterForm('phone');">註冊</a>
                </span>
            </div>
            <form action="/my-account/?user_action_register=true" method="post" class="woocommerce-form woocommerce-form-register register">
                <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="d7e9e8e8b6"/>
                <input type="hidden" name="_wp_http_referer" value="/2312brand_10freeshipping/"/>
                <div class="register-description">
                    透過 手機 / LINE 註冊，<br/>即可直接解鎖推薦碼，分享賺取點數！
                </div>
                <div id="phone-register-form">
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                        <select name="user_phone_country" class="no_line_break phone_country">
                            <option value="0">請選擇</option>
                            <option value="886" selected='selected'>+886</option>
                            <option value="852">+852</option>
                            <option value="853">+853</option>
                            <option value="60">+60</option>
                            <option value="65">+65</option>
                        </select>
                        <input type="text" name="user_phone_number" class="no_line_break phone_number" placeholder="請輸入您的手機號碼" id="user_phone_number_2" value=""/>
                    </p>
                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <div class="sms-login-phone">
                        <input type="text" name="user_phone_certification" placeholder="簡訊驗證碼" id="user_phone_certification" value=""/>
                        <a type="button" id="sms-get-code" class="sms-get-code">取得驗證碼</a>
                        <input type="hidden" name="sms_nonce" value="86c70ef79b">
                        <div class="sms-error hidden"></div>
                        <div class="sms-message hidden">
                            <span class="sms-counter">60</span>
                            秒後重新取得驗證碼。
                        </div>
                    </div>
</p><input type="hidden" name="register_type" value="phone"/>
<p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
    <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password_phone" placeholder="請輸入您的密碼" autocomplete="new-password"/>
</p>
<div class="fixed-bottom-position">
    <p class="form-row">
        <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="註冊">註冊會員</button>
    </p>
    <div class="login-form-bottom">
        <div class="left-col"></div>
        <div class="right-col">
            <a href="#" onclick="switchToRegisterForm('email');">使用電子信箱註冊</a>
        </div>
    </div>
</div>
</div>
<div id="regular-register-form" style="display: none">
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="reg_email" autocomplete="email" placeholder="請輸入您的 Email" value=""/>
    </p>
    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
        <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password" placeholder="請輸入您的密碼" autocomplete="new-password"/>
    </p>
    <div class="fixed-bottom-position">
        <p class="form-row">
            <button type="submit" class="woocommerce-Button woocommerce-button button woocommerce-form-register__submit" name="register" value="註冊">註冊會員</button>
        </p>
        <div class="login-form-bottom">
            <div class="left-col"></div>
            <div class="right-col">
                <a href="#" onclick="switchToRegisterForm('phone');">使用手機號碼註冊</a>
            </div>
        </div>
    </div>
</div>
</form>
<div class="additional-login-bar">
    <div class="lable-bar">其它註冊方式</div>
    <div class="login-bar">
        <a href="https://www.dogcatstar.com/social-login/?loginSocial=facebook&redirect=https%3A%2F%2Fwww.dogcatstar.com%2F2312brand_10freeshipping%2F" data-type="fb">
            <span class="box-icon fb">
                <img src="https://cdn-v2.dogcatstar.com/common/images/icon_fb_16.svg">
            </span>
        </a>
        <a href="/oauth/login/line?type=manual" data-type="line">
            <span class="box-icon line">
                <img src="https://cdn-v2.dogcatstar.com/common/images/icon_line_16.svg">
            </span>
        </a>
        <a id="other-register-method-email" href="#" onclick="switchToRegisterForm('email');">
            <span class="box-icon email">
                <img src="https://cdn-v2.dogcatstar.com/common/images/icon_email_16.svg">
            </span>
        </a>
        <a id="other-register-method-phone" href="#" onclick="switchToRegisterForm('phone');">
            <span class="box-icon phone">
                <img src="https://cdn-v2.dogcatstar.com/common/images/icon_phone_16.svg">
            </span>
        </a>
    </div>
</div>
</div></div>
<!-- 給頁面式的登入使用 //-->
<div class="additional-login-bar-wide-wrapper">
    <div class="additional-login-bar-wide">
        <div class="lable-bar" id="page-choose-login">其它登入方式</div>
        <div class="lable-bar hidden" id="page-choose-register">其它註冊入方式</div>
        <div class="login-bar">
            <a href="https://www.dogcatstar.com/social-login/?loginSocial=facebook&redirect=https%3A%2F%2Fwww.dogcatstar.com%2F2312brand_10freeshipping%2F" data-type="fb">
                <span class="box-icon fb">
                    <img src="https://cdn-v2.dogcatstar.com/common/images/icon_fb_16.svg">
                </span>
            </a>
            <a href="/oauth/login/line?type=manual" data-type="line">
                <span class="box-icon line">
                    <img src="https://cdn-v2.dogcatstar.com/common/images/icon_line_16.svg">
                </span>
            </a>
            <a id="other-login-method-email" href="#" class="register-option hidden" onclick="switchToRegisterForm('email');">
                <span class="box-icon email">
                    <img src="https://cdn-v2.dogcatstar.com/common/images/icon_email_16.svg">
                </span>
            </a>
            <a id="other-login-method-phone" href="#" class="register-option hidden" onclick="switchToRegisterForm('phone');">
                <span class="box-icon phone">
                    <img src="https://cdn-v2.dogcatstar.com/common/images/icon_phone_16.svg">
                </span>
            </a>
        </div>
    </div>
</div>
<script>

    function switchToRegisterForm(type) {
        (function($) {
            $('.account-login-inner').attr('style', 'display: none;');
            $('.account-register-inner').attr('style', '');
            $('.account-guest-reminder-inner').attr('style', 'display: none;');
            $('#tab-register').removeClass('not-active').addClass('is-active');
            $('#tab-login').removeClass('is-active').addClass('not-active');
            $('.register-option').removeClass('hidden');
            $('#page-choose-register').removeClass('hidden');
            $('#page-choose-login').addClass('hidden');

            if (type === 'email') {
                $('#regular-register-form').attr('style', '');
                $('#phone-register-form').attr('style', 'display: none;');
                $('input[name=register_type]').val('email');
                $('#reg_password_phone').attr('name', 'password_phone');
                $('#reg_password').attr('name', 'password');
                $('#other-register-method-email').hide();
                $('#other-register-method-phone').show();
                $('#other-login-method-email').hide();
                $('#other-login-method-phone').show();

            } else {
                $('#regular-register-form').attr('style', 'display: none;');
                $('#phone-register-form').attr('style', '');
                $('input[name=register_type]').val('phone');
                $('#reg_password_phone').attr('name', 'password');
                $('#reg_password').attr('name', 'password_email');
                $('#other-register-method-email').show();
                $('#other-register-method-phone').hide();
                $('#other-login-method-email').show();
                $('#other-login-method-phone').hide();
            }
        }
        )(jQuery);
    }

    function backToLoginForm() {
        (function($) {
            $('.account-login-inner').attr('style', '');
            $('.account-register-inner').attr('style', 'display: none;');
            $('.account-guest-reminder-inner').attr('style', 'display: none;');
            $('#tab-login').removeClass('not-active').addClass('is-active');
            $('#tab-register').removeClass('is-active').addClass('not-active');
            $('.register-option').addClass('hidden');
            $('#page-choose-register').addClass('hidden');
            $('#page-choose-login').removeClass('hidden');
        }
        )(jQuery);
    }

    (function($) {

        function switchToRegularLogin() {
            $('#country-codes').css('display', 'none');
        }

        function switchToPhoneLogin() {
            $('#country-codes').css('display', 'inline-block');
        }

        // Sarafi Mobile 在 click 時才 foucs 才有效?
        $(document).on('click', '#user_phone_number_1', function() {
            $('#user_phone_number_1').get(0).focus();
        });

        $(document).on('keyup', 'input[name=username]', function() {
            const phoneNumber = $(this).val();
            if (!isNaN(phoneNumber)) {
                if (phoneNumber.length > 5) {
                    switchToPhoneLogin();
                } else {
                    switchToRegularLogin();
                }
            } else {
                switchToRegularLogin();
            }
            // 保持兩個輸入框的值同步
            $('#user_phone_number_1').val($(this).val());
            $('#username').val($(this).val());
        });

        switchToRegularLogin();
    }
    )(jQuery);
</script>
</div><script type="text/javascript">
    (function() {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
    }
    )();
</script>
<link rel='stylesheet' id='dcs-common-style-css' href='https://www.dogcatstar.com/wp-content/themes/dogcatstar/css/dcs-common.css?ver=6.0' type='text/css' media='all'/>
<link rel='stylesheet' id='myaccount-coupon-referral-css' href='https://www.dogcatstar.com/wp-content/themes/dogcatstar/css/myaccount-coupon-referral.css?ver=6.0' type='text/css' media='all'/>
<link rel='stylesheet' id='dcs-style-css' href='https://www.dogcatstar.com/wp-content/themes/dogcatstar/css/style.css?ver=6.0' type='text/css' media='all'/>
<style id='global-styles-inline-css' type='text/css'>
    body {
        --wp--preset--color--black: #000000;
        --wp--preset--color--cyan-bluish-gray: #abb8c3;
        --wp--preset--color--white: #ffffff;
        --wp--preset--color--pale-pink: #f78da7;
        --wp--preset--color--vivid-red: #cf2e2e;
        --wp--preset--color--luminous-vivid-orange: #ff6900;
        --wp--preset--color--luminous-vivid-amber: #fcb900;
        --wp--preset--color--light-green-cyan: #7bdcb5;
        --wp--preset--color--vivid-green-cyan: #00d084;
        --wp--preset--color--pale-cyan-blue: #8ed1fc;
        --wp--preset--color--vivid-cyan-blue: #0693e3;
        --wp--preset--color--vivid-purple: #9b51e0;
        --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);
        --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);
        --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);
        --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);
        --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);
        --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);
        --wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);
        --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);
        --wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);
        --wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);
        --wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);
        --wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);
        --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
        --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
        --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
        --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
        --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
        --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
        --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
        --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
        --wp--preset--font-size--small: 13px;
        --wp--preset--font-size--medium: 20px;
        --wp--preset--font-size--large: 36px;
        --wp--preset--font-size--x-large: 42px;
    }

    .has-black-color {
        color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-color {
        color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-color {
        color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-color {
        color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-color {
        color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-color {
        color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-color {
        color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-color {
        color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-color {
        color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-color {
        color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-color {
        color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-color {
        color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-background-color {
        background-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-background-color {
        background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-background-color {
        background-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-background-color {
        background-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-background-color {
        background-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-background-color {
        background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-background-color {
        background-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-background-color {
        background-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-background-color {
        background-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-background-color {
        background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-background-color {
        background-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-black-border-color {
        border-color: var(--wp--preset--color--black) !important;
    }

    .has-cyan-bluish-gray-border-color {
        border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
    }

    .has-white-border-color {
        border-color: var(--wp--preset--color--white) !important;
    }

    .has-pale-pink-border-color {
        border-color: var(--wp--preset--color--pale-pink) !important;
    }

    .has-vivid-red-border-color {
        border-color: var(--wp--preset--color--vivid-red) !important;
    }

    .has-luminous-vivid-orange-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-amber-border-color {
        border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
    }

    .has-light-green-cyan-border-color {
        border-color: var(--wp--preset--color--light-green-cyan) !important;
    }

    .has-vivid-green-cyan-border-color {
        border-color: var(--wp--preset--color--vivid-green-cyan) !important;
    }

    .has-pale-cyan-blue-border-color {
        border-color: var(--wp--preset--color--pale-cyan-blue) !important;
    }

    .has-vivid-cyan-blue-border-color {
        border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
    }

    .has-vivid-purple-border-color {
        border-color: var(--wp--preset--color--vivid-purple) !important;
    }

    .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
        background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
    }

    .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
        background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
    }

    .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
    }

    .has-luminous-vivid-orange-to-vivid-red-gradient-background {
        background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
    }

    .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
        background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
    }

    .has-cool-to-warm-spectrum-gradient-background {
        background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
    }

    .has-blush-light-purple-gradient-background {
        background: var(--wp--preset--gradient--blush-light-purple) !important;
    }

    .has-blush-bordeaux-gradient-background {
        background: var(--wp--preset--gradient--blush-bordeaux) !important;
    }

    .has-luminous-dusk-gradient-background {
        background: var(--wp--preset--gradient--luminous-dusk) !important;
    }

    .has-pale-ocean-gradient-background {
        background: var(--wp--preset--gradient--pale-ocean) !important;
    }

    .has-electric-grass-gradient-background {
        background: var(--wp--preset--gradient--electric-grass) !important;
    }

    .has-midnight-gradient-background {
        background: var(--wp--preset--gradient--midnight) !important;
    }

    .has-small-font-size {
        font-size: var(--wp--preset--font-size--small) !important;
    }

    .has-medium-font-size {
        font-size: var(--wp--preset--font-size--medium) !important;
    }

    .has-large-font-size {
        font-size: var(--wp--preset--font-size--large) !important;
    }

    .has-x-large-font-size {
        font-size: var(--wp--preset--font-size--x-large) !important;
    }
</style>
<script type='text/javascript' id='general-customize-js-extra'>
    /* <![CDATA[ */
    var general_config = {
        "project_code": "dcs",
        "multisite": {
            "is_multisite_enabled": "yes",
            "site_currency": "TWD",
            "site_currency_symbol": "NT$",
            "site_price_decimals": 0,
            "site_path": "\/",
            "site_country_code": "TW",
            "site_id": 1,
            "user_lang": "zh_TW",
            "all_site_country_code": [{
                "path": "\/",
                "blog_id": "1",
                "code": "TW",
                "country": "\u53f0\u7063",
                "main_language": "zh_TW",
                "currency_symbol": "NT$"
            }, {
                "path": "\/hk\/",
                "blog_id": "2",
                "code": "HK",
                "country": "\u6e2f\u6fb3",
                "main_language": "zh_HK",
                "currency_symbol": "$"
            }, {
                "path": "\/sg\/",
                "blog_id": "3",
                "code": "SG",
                "country": "\u65b0\u52a0\u5761",
                "main_language": "en_US",
                "currency_symbol": "$"
            }, {
                "path": "\/my\/",
                "blog_id": "4",
                "code": "MY",
                "country": "\u99ac\u4f86\u897f\u4e9e",
                "main_language": "en_US",
                "currency_symbol": "RM"
            }]
        },
        "site_url": "https:\/\/www.dogcatstar.com",
        "ajax_url": "https:\/\/www.dogcatstar.com\/wp-admin\/admin-ajax.php",
        "is_reward_point_enabled": "yes",
        "point_multiple": "2",
        "point_name": "\u9ede\u6578",
        "fortune_base_url": "https:\/\/fortune.dogcatstar.com",
        "is_new_cart": "yes",
        "is_orddd_enabled": "no",
        "default_delivery_date": "27-12-2023",
        "reset_delivery_date": "2023-12-27",
        "purchase_use_ajax": "yes",
        "is_checkout_page": "no",
        "is_product_page": "no",
        "is_myaccount_page": "no",
        "is_user_logged_in": "no",
        "is_module_enable": {
            "subscription": "yes",
            "cdn": "no"
        },
        "g4Dni": "G-CDQ4YCRTZF",
        "fDni": "1005001229542704",
        "oDni": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ0ZWFtTmFtZSI6IuaxquWWteaYn-eQgyJ9.qMYTikPFqYGKOUot84OZLdKBScbCCkDkIVVEqvA69co",
        "aDni": "67e32621e0003e1fc39082f4293df379",
        "line_liff_id": "1654084490-kE9PB8X0",
        "line_oa_url": "https:\/\/line.me\/R\/ti\/p\/%40zlo8319e"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/006-lds-simple-customization/js/general-customize2.js?ver=2.0.2' id='general-customize-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/006-lds-simple-customization/js/dni-f2e/projects/general.js?ver=2.0.2' id='dni-general-project-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/006-lds-simple-customization/js/dni-f2e/react-menu/dcs.js?ver=2.0.2' id='react-menu-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.7.2.3' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_view_cart": "\u67e5\u770b\u8cfc\u7269\u8eca",
        "cart_url": "https:\/\/www.dogcatstar.com\/cart\/",
        "is_cart": "",
        "cart_redirect_after_add": "no"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=7.2.3' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.7.2.3' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
    /* <![CDATA[ */
    var woocommerce_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=7.2.3' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {
        "ajax_url": "\/wp-admin\/admin-ajax.php",
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "cart_hash_key": "wc_cart_hash_d75757d773099b2849753cdb18065a9b",
        "fragment_name": "wc_fragments_d75757d773099b2849753cdb18065a9b",
        "request_timeout": "5000"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=7.2.3' id='wc-cart-fragments-js'></script>
<script type='text/javascript' id='metorik-js-js-extra'>
    /* <![CDATA[ */
    var metorik_params = {
        "lifetime": "6",
        "session": "30",
        "ajaxurl": "https:\/\/www.dogcatstar.com\/wp-admin\/admin-ajax.php",
        "cart_tracking": "1",
        "cart_items": "0",
        "cart_checkout_button": "1",
        "add_cart_popup_placement": "bottom",
        "send_cart_events": "added_to_cart removed_from_cart updated_cart_totals updated_shipping_method applied_coupon removed_coupon updated_checkout"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/metorik-helper/assets/js/metorik.min.js?ver=1.5.1' id='metorik-js-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/themes/flatsome/inc/extensions/flatsome-live-search/flatsome-live-search.js?ver=3.14.3' id='flatsome-live-search-js'></script>
<script async src="https://omnitag.omniscientai.com/tag-app.js?ver=2.0.2"></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/hoverIntent.min.js?ver=1.10.2' id='hoverIntent-js'></script>
<script type='text/javascript' id='flatsome-js-js-extra'>
    /* <![CDATA[ */
    var flatsomeVars = {
        "theme": {
            "version": "3.14.3"
        },
        "ajaxurl": "https:\/\/www.dogcatstar.com\/wp-admin\/admin-ajax.php",
        "rtl": "",
        "sticky_height": "80",
        "assets_url": "https:\/\/www.dogcatstar.com\/wp-content\/themes\/flatsome\/assets\/js\/",
        "lightbox": {
            "close_markup": "<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>",
            "close_btn_inside": false
        },
        "user": {
            "can_edit_pages": false
        },
        "i18n": {
            "mainMenu": "Main Menu"
        },
        "options": {
            "cookie_notice_version": "1",
            "swatches_layout": false,
            "swatches_box_select_event": false,
            "swatches_box_behavior_selected": false,
            "swatches_box_update_urls": "1",
            "swatches_box_reset": false,
            "swatches_box_reset_extent": false,
            "swatches_box_reset_time": 300,
            "search_result_latency": "0"
        },
        "is_mini_cart_reveal": ""
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/themes/flatsome/assets/js/flatsome.js?ver=295a0d1d1e8168b25a51f884bffa7b33' id='flatsome-js-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/themes/flatsome/assets/js/woocommerce.js?ver=b3c807cf00d38de8d7f31c1197eb135d' id='flatsome-theme-woocommerce-js-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3-wc.7.2.3' id='select2-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/006-lds-simple-customization/js/dni-f2e/projects/dcs.js?ver=2.0.2' id='dni-dcs-project-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/underscore.min.js?ver=1.13.3' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
    /* <![CDATA[ */
    var _wpUtilSettings = {
        "ajax": {
            "url": "\/wp-admin\/admin-ajax.php"
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/wp-util.min.js?ver=6.0' id='wp-util-js'></script>
<script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
    /* <![CDATA[ */
    var wc_add_to_cart_variation_params = {
        "wc_ajax_url": "\/?wc-ajax=%%endpoint%%",
        "i18n_no_matching_variations_text": "\u5f88\u62b1\u6b49\uff0c\u6c92\u6709\u5546\u54c1\u7b26\u5408\u60a8\u7684\u9078\u64c7\uff0c\u8acb\u91cd\u65b0\u9078\u64c7\u5176\u4ed6\u7d44\u5408\u3002",
        "i18n_make_a_selection_text": "\u8acb\u9078\u64c7\u4efb\u4e00\u5546\u54c1\u9078\u9805\u518d\u52a0\u5165\u8cfc\u7269\u8eca",
        "i18n_unavailable_text": "\u62b1\u6b49\uff0c\u6b64\u5546\u54c1\u5df2\u552e\u5b8c\uff0c\u8acb\u9078\u64c7\u4e0d\u540c\u7684\u7d44\u5408"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=7.2.3' id='wc-add-to-cart-variation-js'></script>
<script type='text/javascript' id='wc-add-to-cart-bundle-js-extra'>
    /* <![CDATA[ */
    var wc_bundle_params = {
        "i18n_free": "\u514d\u8cbb!",
        "i18n_total": "Total: ",
        "i18n_subtotal": "Subtotal: ",
        "i18n_price_format": "%t%p%s",
        "i18n_strikeout_price_string": "<del>%f<\/del> <ins>%t<\/ins>",
        "i18n_insufficient_stock_list": "<p class=\"stock out-of-stock insufficient-stock\">Insufficient stock \u2192 %s<\/p>",
        "i18n_on_backorder_list": "<p class=\"stock available-on-backorder\">\u5141\u8a31\u7121\u5eab\u5b58\u4e0b\u55ae \u2192 %s<\/p>",
        "i18n_insufficient_stock_status": "<p class=\"stock out-of-stock insufficient-stock\">Insufficient stock<\/p>",
        "i18n_on_backorder_status": "<p class=\"stock available-on-backorder\">\u5141\u8a31\u7121\u5eab\u5b58\u4e0b\u55ae<\/p>",
        "i18n_select_options": "Please choose product options.",
        "i18n_select_options_for": "Please choose %s options.",
        "i18n_enter_valid_price": "Please enter valid amounts.",
        "i18n_enter_valid_price_for": "Please enter a valid %s amount.",
        "i18n_string_list_item": "\"%s\"",
        "i18n_string_list_sep": "%s, %v",
        "i18n_string_list_last_sep": "%s and %v",
        "i18n_qty_string": " \u00d7 %s",
        "i18n_optional_string": " \u2014 %s",
        "i18n_optional": "optional",
        "i18n_contents": "Includes",
        "i18n_title_meta_string": "%t \u2013 %m",
        "i18n_title_string": "<span class=\"item_title\">%t<\/span><span class=\"item_qty\">%q<\/span><span class=\"item_suffix\">%o<\/span>",
        "i18n_unavailable_text": "This product is currently unavailable.",
        "i18n_validation_alert": "Please resolve all pending issues before adding this product to your cart.",
        "i18n_zero_qty_error": "Please choose at least 1 item.",
        "i18n_recurring_price_join": "%r,<\/br>%c",
        "i18n_recurring_price_join_last": "%r, and<\/br>%c",
        "discounted_price_decimals": "6",
        "currency_symbol": "NT$",
        "currency_position": "left",
        "currency_format_num_decimals": "0",
        "currency_format_decimal_sep": ".",
        "currency_format_thousand_sep": ",",
        "currency_format_trim_zeros": "no",
        "price_display_suffix": "",
        "prices_include_tax": "no",
        "tax_display_shop": "excl",
        "calc_taxes": "no",
        "photoswipe_enabled": "yes",
        "responsive_breakpoint": "320",
        "zoom_enabled": "no",
        "force_min_max_qty_input": "yes"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/woocommerce-product-bundles/assets/js/frontend/add-to-cart-bundle.min.js?ver=6.10.2' id='wc-add-to-cart-bundle-js'></script>
<script type='text/javascript' id='wc-add-to-cart-bundle-js-after'>
    jQuery(document).on("mfpOpen", function(e) {

        jQuery(".bundle_form .bundle_data").each(function() {

            var $bundle_data = jQuery(this)
              , $composite_form = $bundle_data.closest(".composite_form");

            if ($composite_form.length === 0) {
                $bundle_data.wc_pb_bundle_form();
            }

        });

    });
</script>
<script type='text/javascript' id='zxcvbn-async-js-extra'>
    /* <![CDATA[ */
    var _zxcvbnSettings = {
        "src": "https:\/\/www.dogcatstar.com\/wp-includes\/js\/zxcvbn.min.js"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/zxcvbn-async.min.js?ver=1.0' id='zxcvbn-async-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/dist/hooks.min.js?ver=c6d64f2cb8f5c6bb49caca37f8828ce3' id='wp-hooks-js'></script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-includes/js/dist/i18n.min.js?ver=ebee46757c6a411e38fd079a7ac71d94' id='wp-i18n-js'></script>
<script type='text/javascript' id='wp-i18n-js-after'>
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['ltr']
    });
</script>
<script type='text/javascript' id='password-strength-meter-js-extra'>
    /* <![CDATA[ */
    var pwsL10n = {
        "unknown": "\u5bc6\u78bc\u5f37\u5ea6\u672a\u77e5",
        "short": "\u975e\u5e38\u4f4e",
        "bad": "\u4f4e",
        "good": "\u4e2d",
        "strong": "\u9ad8",
        "mismatch": "\u4e0d\u76f8\u7b26"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-admin/js/password-strength-meter.min.js?ver=6.0' id='password-strength-meter-js'></script>
<script type='text/javascript' id='wc-password-strength-meter-js-extra'>
    /* <![CDATA[ */
    var wc_password_strength_meter_params = {
        "min_password_strength": "1",
        "stop_checkout": "",
        "i18n_password_error": "\u8acb\u8f38\u5165\u4e00\u500b\u8907\u96dc\u4e00\u9ede\u7684\u5bc6\u78bc",
        "i18n_password_hint": "\u63d0\u793a: \u5efa\u8b70\u5bc6\u78bc\u61c9\u8a72\u81f3\u5c11\u8981\u6709 12 \u500b\u5b57\u5143\uff0c\u4e26\u5728\u5bc6\u78bc\u4e2d\u540c\u6642\u4f7f\u7528\u5927\u5c0f\u5beb\u5b57\u6bcd\u3001\u6578\u5b57\u53ca <code>! \" ? $ % ^ & )<\/code> \u7b49\u7279\u6b8a\u7b26\u865f\uff0c\u4fbf\u80fd\u8b93\u5bc6\u78bc\u66f4\u5b89\u5168\u3002"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='https://www.dogcatstar.com/wp-content/plugins/woocommerce/assets/js/frontend/password-strength-meter.min.js?ver=7.2.3' id='wc-password-strength-meter-js'></script>
<script type="text/javascript">
    (function(undefined) {
        var _localizedStrings = {
            "redirect_overlay_title": "Hold On",
            "redirect_overlay_text": "You are being redirected to another page,<br>it may take a few seconds."
        };
        var _targetWindow = "prefer-popup";
        window.NSLPopup = function(url, title, w, h) {
            var userAgent = navigator.userAgent
              , mobile = function() {
                return /\b(iPhone|iP[ao]d)/.test(userAgent) || /\b(iP[ao]d)/.test(userAgent) || /Android/i.test(userAgent) || /Mobile/i.test(userAgent);
            }
              , screenX = window.screenX !== undefined ? window.screenX : window.screenLeft
              , screenY = window.screenY !== undefined ? window.screenY : window.screenTop
              , outerWidth = window.outerWidth !== undefined ? window.outerWidth : document.documentElement.clientWidth
              , outerHeight = window.outerHeight !== undefined ? window.outerHeight : document.documentElement.clientHeight - 22
              , targetWidth = mobile() ? null : w
              , targetHeight = mobile() ? null : h
              , V = screenX < 0 ? window.screen.width + screenX : screenX
              , left = parseInt(V + (outerWidth - targetWidth) / 2, 10)
              , right = parseInt(screenY + (outerHeight - targetHeight) / 2.5, 10)
              , features = [];
            if (targetWidth !== null) {
                features.push('width=' + targetWidth);
            }
            if (targetHeight !== null) {
                features.push('height=' + targetHeight);
            }
            features.push('left=' + left);
            features.push('top=' + right);
            features.push('scrollbars=1');

            var newWindow = window.open(url, title, features.join(','));

            if (window.focus) {
                newWindow.focus();
            }

            return newWindow;
        }
        ;

        var isWebView = null;

        function checkWebView() {
            if (isWebView === null) {
                function _detectOS(ua) {
                    if (/Android/.test(ua)) {
                        return "Android";
                    } else if (/iPhone|iPad|iPod/.test(ua)) {
                        return "iOS";
                    } else if (/Windows/.test(ua)) {
                        return "Windows";
                    } else if (/Mac OS X/.test(ua)) {
                        return "Mac";
                    } else if (/CrOS/.test(ua)) {
                        return "Chrome OS";
                    } else if (/Firefox/.test(ua)) {
                        return "Firefox OS";
                    }
                    return "";
                }

                function _detectBrowser(ua) {
                    var android = /Android/.test(ua);

                    if (/Opera Mini/.test(ua) || / OPR/.test(ua) || / OPT/.test(ua)) {
                        return "Opera";
                    } else if (/CriOS/.test(ua)) {
                        return "Chrome for iOS";
                    } else if (/Edge/.test(ua)) {
                        return "Edge";
                    } else if (android && /Silk\//.test(ua)) {
                        return "Silk";
                    } else if (/Chrome/.test(ua)) {
                        return "Chrome";
                    } else if (/Firefox/.test(ua)) {
                        return "Firefox";
                    } else if (android) {
                        return "AOSP";
                    } else if (/MSIE|Trident/.test(ua)) {
                        return "IE";
                    } else if (/Safari\//.test(ua)) {
                        return "Safari";
                    } else if (/AppleWebKit/.test(ua)) {
                        return "WebKit";
                    }
                    return "";
                }

                function _detectBrowserVersion(ua, browser) {
                    if (browser === "Opera") {
                        return /Opera Mini/.test(ua) ? _getVersion(ua, "Opera Mini/") : / OPR/.test(ua) ? _getVersion(ua, " OPR/") : _getVersion(ua, " OPT/");
                    } else if (browser === "Chrome for iOS") {
                        return _getVersion(ua, "CriOS/");
                    } else if (browser === "Edge") {
                        return _getVersion(ua, "Edge/");
                    } else if (browser === "Chrome") {
                        return _getVersion(ua, "Chrome/");
                    } else if (browser === "Firefox") {
                        return _getVersion(ua, "Firefox/");
                    } else if (browser === "Silk") {
                        return _getVersion(ua, "Silk/");
                    } else if (browser === "AOSP") {
                        return _getVersion(ua, "Version/");
                    } else if (browser === "IE") {
                        return /IEMobile/.test(ua) ? _getVersion(ua, "IEMobile/") : /MSIE/.test(ua) ? _getVersion(ua, "MSIE ") : _getVersion(ua, "rv:");
                    } else if (browser === "Safari") {
                        return _getVersion(ua, "Version/");
                    } else if (browser === "WebKit") {
                        return _getVersion(ua, "WebKit/");
                    }
                    return "0.0.0";
                }

                function _getVersion(ua, token) {
                    try {
                        return _normalizeSemverString(ua.split(token)[1].trim().split(/[^\w\.]/)[0]);
                    } catch (o_O) {}
                    return "0.0.0";
                }

                function _normalizeSemverString(version) {
                    var ary = version.split(/[\._]/);
                    return (parseInt(ary[0], 10) || 0) + "." + (parseInt(ary[1], 10) || 0) + "." + (parseInt(ary[2], 10) || 0);
                }

                function _isWebView(ua, os, browser, version, options) {
                    switch (os + browser) {
                    case "iOSSafari":
                        return false;
                    case "iOSWebKit":
                        return _isWebView_iOS(options);
                    case "AndroidAOSP":
                        return false;
                    case "AndroidChrome":
                        return parseFloat(version) >= 42 ? /; wv/.test(ua) : /\d{2}\.0\.0/.test(version) ? true : _isWebView_Android(options);
                    }
                    return false;
                }

                function _isWebView_iOS(options) {
                    var document = (window["document"] || {});

                    if ("WEB_VIEW"in options) {
                        return options["WEB_VIEW"];
                    }
                    return !("fullscreenEnabled"in document || "webkitFullscreenEnabled"in document || false);
                }

                function _isWebView_Android(options) {
                    if ("WEB_VIEW"in options) {
                        return options["WEB_VIEW"];
                    }
                    return !("requestFileSystem"in window || "webkitRequestFileSystem"in window || false);
                }

                var options = {};
                var nav = window.navigator || {};
                var ua = nav.userAgent || "";
                var os = _detectOS(ua);
                var browser = _detectBrowser(ua);
                var browserVersion = _detectBrowserVersion(ua, browser);

                isWebView = _isWebView(ua, os, browser, browserVersion, options);
            }

            return isWebView;
        }

        function isAllowedWebViewForUserAgent() {
            var nav = window.navigator || {};
            var ua = nav.userAgent || "";
            if (ua.match(new RegExp(['Instagram', 'FBAV', 'FBAN', 'Line', ].join('|')))) {
                return true;
            }

            return false;
        }

        window._nslDOMReady(function() {

            window.nslRedirect = function(url) {
                var overlay = document.createElement('div');
                overlay.id = "nsl-redirect-overlay";
                overlay.insertAdjacentHTML("afterbegin", "<div id='nsl-redirect-overlay-container'><div id='nsl-redirect-overlay-spinner'></div><p id='nsl-redirect-overlay-title'>" + _localizedStrings.redirect_overlay_title + "</p><p id='nsl-redirect-overlay-text'>" + _localizedStrings.redirect_overlay_text + "</p></div>");
                document.body.appendChild(overlay);
                window.location = url;
            }
            ;

            var targetWindow = _targetWindow || 'prefer-popup'
              , lastPopup = false;

            var buttonLinks = document.querySelectorAll(' a[data-plugin="nsl"][data-action="connect"], a[data-plugin="nsl"][data-action="link"]');
            buttonLinks.forEach(function(buttonLink) {
                buttonLink.addEventListener('click', function(e) {
                    if (lastPopup && !lastPopup.closed) {
                        e.preventDefault();
                        lastPopup.focus();
                    } else {

                        var href = this.href
                          , success = false;
                        if (href.indexOf('?') !== -1) {
                            href += '&';
                        } else {
                            href += '?';
                        }

                        var redirectTo = this.dataset.redirect;
                        if (redirectTo === 'current') {
                            href += 'redirect=' + encodeURIComponent(window.location.href) + '&';
                        } else if (redirectTo && redirectTo !== '') {
                            href += 'redirect=' + encodeURIComponent(redirectTo) + '&';
                        }

                        if (targetWindow !== 'prefer-same-window' && checkWebView()) {
                            targetWindow = 'prefer-same-window';
                        }

                        if (targetWindow === 'prefer-popup') {
                            lastPopup = NSLPopup(href + 'display=popup', 'nsl-social-connect', this.dataset.popupwidth, this.dataset.popupheight);
                            if (lastPopup) {
                                success = true;
                                e.preventDefault();
                            }
                        } else if (targetWindow === 'prefer-new-tab') {
                            var newTab = window.open(href + 'display=popup', '_blank');
                            if (newTab) {
                                if (window.focus) {
                                    newTab.focus();
                                }
                                success = true;
                                e.preventDefault();
                            }
                        }

                        if (!success) {
                            window.location = href;
                            e.preventDefault();
                        }
                    }
                });
            });

            var googleLoginButtons = document.querySelectorAll(' a[data-plugin="nsl"][data-provider="google"]');
            if (googleLoginButtons.length && checkWebView() && !isAllowedWebViewForUserAgent()) {
                googleLoginButtons.forEach(function(googleLoginButton) {
                    googleLoginButton.remove();
                });
            }
        });
    }
    )();
</script>
<div id="bb-purchase-lightbox-wrapper" class="hidden">
    <div id="bb-purchase-lighbox-container">
        <div class="bb-lighbox-box">
            <a type="button" role="button" id="bb-purchase-lighbox-close" href="javascript:void(0);">&times;</a>
            <div class="bb-lightbox-title">提醒：寄倉商品需要單獨結帳。購物車現在還有其它商品唷~			</div>
            <div class="bb-lightbox-content">
                <div class="bb-body">
                    <div class="bb-content-body">
                        <a href="/cart" target="_blank" class="btn-lightbox btn-1 active" target="_blank">先去結帳商品						</a>
                        <button id="btn-warehouse-submit" class="btn-lightbox btn-2" href="javascript:void(0);" data-target="service_product">
                            <span class="before-spinner">清空購物車，加入新商品</span>
                            <span class="spinner-container"></span>
                        </button>
                    </div>
                    <div class="bb-note">※ 欲下多筆寄倉/訂閱訂單，請分次結帳唷</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  vimeo #12205 關閉 vimeo auto play-->
<!-- <script src="https://player.vimeo.com/api/player.js"></script>
<script type="text/javascript">
let vimeos = document.querySelectorAll("iframe[ src *= 'https://player.vimeo.com/video']");
if(vimeos.length){
	vimeos.forEach( vimeo => {
		const player = new Vimeo.Player(vimeo)
		player.setLoop(true);    
		player.getQualities().then(function(qualities) {
			player.setQuality(qualities[1].label)
		})
	})
}
</script> -->
</body></html>
