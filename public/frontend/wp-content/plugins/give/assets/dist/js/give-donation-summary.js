(() => {
    var e = {
            50743: function(e, n) {
                ! function(t, r) {
                    var o = {
                            version: "0.4.1",
                            settings: {
                                currency: {
                                    symbol: "$",
                                    format: "%s%v",
                                    decimal: ".",
                                    thousand: ",",
                                    precision: 2,
                                    grouping: 3
                                },
                                number: {
                                    precision: 0,
                                    grouping: 3,
                                    thousand: ",",
                                    decimal: "."
                                }
                            }
                        },
                        a = Array.prototype.map,
                        i = Array.isArray,
                        u = Object.prototype.toString;

                    function c(e) {
                        return !!("" === e || e && e.charCodeAt && e.substr)
                    }

                    function f(e) {
                        return i ? i(e) : "[object Array]" === u.call(e)
                    }

                    function m(e) {
                        return e && "[object Object]" === u.call(e)
                    }

                    function s(e, n) {
                        var t;
                        for (t in e = e || {}, n = n || {}) n.hasOwnProperty(t) && null == e[t] && (e[t] = n[t]);
                        return e
                    }

                    function l(e, n, t) {
                        var r, o, i = [];
                        if (!e) return i;
                        if (a && e.map === a) return e.map(n, t);
                        for (r = 0, o = e.length; r < o; r++) i[r] = n.call(t, e[r], r, e);
                        return i
                    }

                    function v(e, n) {
                        return e = Math.round(Math.abs(e)), isNaN(e) ? n : e
                    }

                    function d(e) {
                        var n = o.settings.currency.format;
                        return "function" == typeof e && (e = e()), c(e) && e.match("%v") ? {
                            pos: e,
                            neg: e.replace("-", "").replace("%v", "-%v"),
                            zero: e
                        } : e && e.pos && e.pos.match("%v") ? e : c(n) ? o.settings.currency.format = {
                            pos: n,
                            neg: n.replace("%v", "-%v"),
                            zero: n
                        } : n
                    }
                    var g = o.unformat = o.parse = function(e, n) {
                            if (f(e)) return l(e, (function(e) {
                                return g(e, n)
                            }));
                            if ("number" == typeof(e = e || 0)) return e;
                            n = n || o.settings.number.decimal;
                            var t = new RegExp("[^0-9-" + n + "]", ["g"]),
                                r = parseFloat(("" + e).replace(/\((.*)\)/, "-$1").replace(t, "").replace(n, "."));
                            return isNaN(r) ? 0 : r
                        },
                        p = o.toFixed = function(e, n) {
                            n = v(n, o.settings.number.precision);
                            var t = Math.pow(10, n);
                            return (Math.round(o.unformat(e) * t) / t).toFixed(n)
                        },
                        y = o.formatNumber = o.format = function(e, n, t, r) {
                            if (f(e)) return l(e, (function(e) {
                                return y(e, n, t, r)
                            }));
                            e = g(e);
                            var a = s(m(n) ? n : {
                                    precision: n,
                                    thousand: t,
                                    decimal: r
                                }, o.settings.number),
                                i = v(a.precision),
                                u = e < 0 ? "-" : "",
                                c = parseInt(p(Math.abs(e || 0), i), 10) + "",
                                d = c.length > 3 ? c.length % 3 : 0;
                            return u + (d ? c.substr(0, d) + a.thousand : "") + c.substr(d).replace(/(\d{3})(?=\d)/g, "$1" + a.thousand) + (i ? a.decimal + p(Math.abs(e), i).split(".")[1] : "")
                        },
                        h = o.formatMoney = function(e, n, t, r, a, i) {
                            if (f(e)) return l(e, (function(e) {
                                return h(e, n, t, r, a, i)
                            }));
                            e = g(e);
                            var u = s(m(n) ? n : {
                                    symbol: n,
                                    precision: t,
                                    thousand: r,
                                    decimal: a,
                                    format: i
                                }, o.settings.currency),
                                c = d(u.format);
                            return (e > 0 ? c.pos : e < 0 ? c.neg : c.zero).replace("%s", u.symbol).replace("%v", y(Math.abs(e), v(u.precision), u.thousand, u.decimal))
                        };
                    o.formatColumn = function(e, n, t, r, a, i) {
                        if (!e) return [];
                        var u = s(m(n) ? n : {
                                symbol: n,
                                precision: t,
                                thousand: r,
                                decimal: a,
                                format: i
                            }, o.settings.currency),
                            p = d(u.format),
                            h = p.pos.indexOf("%s") < p.pos.indexOf("%v"),
                            b = 0,
                            S = l(e, (function(e, n) {
                                if (f(e)) return o.formatColumn(e, u);
                                var t = ((e = g(e)) > 0 ? p.pos : e < 0 ? p.neg : p.zero).replace("%s", u.symbol).replace("%v", y(Math.abs(e), v(u.precision), u.thousand, u.decimal));
                                return t.length > b && (b = t.length), t
                            }));
                        return l(S, (function(e, n) {
                            return c(e) && e.length < b ? h ? e.replace(u.symbol, u.symbol + new Array(b - e.length + 1).join(" ")) : new Array(b - e.length + 1).join(" ") + e : e
                        }))
                    }, e.exports && (n = e.exports = o), n.accounting = o
                }()
            }
        },
        n = {};

    function t(r) {
        var o = n[r];
        if (void 0 !== o) return o.exports;
        var a = n[r] = {
            exports: {}
        };
        return e[r].call(a.exports, a, a.exports, t), a.exports
    }
    t.n = e => {
        var n = e && e.__esModule ? () => e.default : () => e;
        return t.d(n, {
            a: n
        }), n
    }, t.d = (e, n) => {
        for (var r in n) t.o(n, r) && !t.o(e, r) && Object.defineProperty(e, r, {
            enumerable: !0,
            get: n[r]
        })
    }, t.o = (e, n) => Object.prototype.hasOwnProperty.call(e, n), (() => {
        "use strict";
        var e = t(50743),
            n = t.n(e);

        function r(e, n) {
            var t = "undefined" != typeof Symbol && e[Symbol.iterator] || e["@@iterator"];
            if (!t) {
                if (Array.isArray(e) || (t = function(e, n) {
                        if (!e) return;
                        if ("string" == typeof e) return o(e, n);
                        var t = Object.prototype.toString.call(e).slice(8, -1);
                        "Object" === t && e.constructor && (t = e.constructor.name);
                        if ("Map" === t || "Set" === t) return Array.from(e);
                        if ("Arguments" === t || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(t)) return o(e, n)
                    }(e)) || n && e && "number" == typeof e.length) {
                    t && (e = t);
                    var r = 0,
                        a = function() {};
                    return {
                        s: a,
                        n: function() {
                            return r >= e.length ? {
                                done: !0
                            } : {
                                done: !1,
                                value: e[r++]
                            }
                        },
                        e: function(e) {
                            throw e
                        },
                        f: a
                    }
                }
                throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")
            }
            var i, u = !0,
                c = !1;
            return {
                s: function() {
                    t = t.call(e)
                },
                n: function() {
                    var e = t.next();
                    return u = e.done, e
                },
                e: function(e) {
                    c = !0, i = e
                },
                f: function() {
                    try {
                        u || null == t.return || t.return()
                    } finally {
                        if (c) throw i
                    }
                }
            }
        }

        function o(e, n) {
            (null == n || n > e.length) && (n = e.length);
            for (var t = 0, r = new Array(n); t < n; t++) r[t] = e[t];
            return r
        }
        window.GiveDonationSummary = {
            init: function() {
                GiveDonationSummary.initAmount(), GiveDonationSummary.initFrequency(), GiveDonationSummary.initFees(), GiveDonationSummary.initTotal()
            },
            initAmount: function() {
                GiveDonationSummary.observe('[name="give-amount"]', (function(e, n) {
                    n.find('[data-tag="amount"]').html(GiveDonationSummary.format_amount(e.value, n))
                }))
            },
            initFrequency: function() {
                GiveDonationSummary.observe('[name="give-recurring-period"]', (function(e, n) {
                    n.find(".js-give-donation-summary-frequency-help-text").toggle(!e.checked), n.find('[data-tag="frequency"]').toggle(!e.checked), n.find('[data-tag="recurring"]').toggle(e.checked).html(e.dataset.periodLabel);
                    var t = document.querySelector('[name="give-recurring-period-donors-choice"]');
                    if (t) {
                        var r = t.options[t.selectedIndex].value || !1;
                        r && n.find('[data-tag="recurring"]').html(GiveDonationSummaryData.recurringLabelLookup[r])
                    }
                })), GiveDonationSummary.observe('[name="give-price-id"]', (function(e, n) {
                    var t = e.value,
                        r = document.querySelector(".give_recurring_donation_details");
                    if (r) {
                        var o = JSON.parse(r.value);
                        if (void 0 !== o.multi) {
                            var a = "yes" === o.multi[t]._give_recurring,
                                i = o.multi[t].give_recurring_pretty_text;
                            n.find(".js-give-donation-summary-frequency-help-text").toggle(!a), n.find('[data-tag="frequency"]').toggle(!a), n.find('[data-tag="recurring"]').toggle(a).html(i)
                        }
                    }
                }))
            },
            initFees: function() {
                GiveDonationSummary.observe(".give_fee_mode_checkbox", (function(e, n) {
                    n.find(".fee-break-down-message").hide(), n.find(".js-give-donation-summary-fees").toggle(e.checked);
                    var t = document.querySelector('[name="give-fee-amount"]').value.replace(".", Give.form.fn.getInfo("decimal_separator", n));
                    n.find('[data-tag="fees"]').html(GiveDonationSummary.format_amount(t, n))
                }))
            },
            initTotal: function() {
                GiveDonationSummary.observe(".give-final-total-amount", (function(e, n) {
                    var t = e.dataset.total.replace(".", Give.form.fn.getInfo("decimal_separator", n));
                    n.find('[data-tag="total"]').html(GiveDonationSummary.format_amount(t, n))
                }));
                var e = document.querySelector(".give-final-total-amount");
                e && (e.dataset.total = e.dataset.total)
            },
            handleNavigateBack: function() {},
            onGatewayLoadSuccess: function() {
                var e = jQuery("#give_purchase_form_wrap .give-donation-summary-section").detach();
                e.length && (jQuery(".give-donation-summary-section").remove(), e.appendTo("#donate-fieldset"), GiveDonationSummary.initTotal(), GiveDonationSummary.handleNavigateBack = function(e) {
                    e.stopPropagation(), e.preventDefault(), window.formNavigator.back()
                })
            },
            observe: function(e, n) {
                var t = document.querySelector(e);
                if (t) {
                    var o = jQuery(t.closest(".give-form"));
                    new MutationObserver((function(e, a) {
                        var i, u = r(e);
                        try {
                            for (u.s(); !(i = u.n()).done;) {
                                "attributes" === i.value.type && n(t, o)
                            }
                        } catch (e) {
                            u.e(e)
                        } finally {
                            u.f()
                        }
                    })).observe(t, {
                        attributes: !0
                    })
                }
            },
            format_amount: function(e, t) {
                e = e.replace(Give.form.fn.getInfo("thousands_separator", t), "").replace(Give.form.fn.getInfo("decimal_separator", t), ".");
                var r = Give.form.fn.getInfo("currency_code", t),
                    o = GiveDonationSummaryData.currencyPrecisionLookup[r];
                return n().formatMoney(e, {
                    symbol: Give.form.fn.getInfo("currency_symbol", t),
                    format: "before" === Give.form.fn.getInfo("currency_position", t) ? "%s%v" : "%v%s",
                    decimal: Give.form.fn.getInfo("decimal_separator", t),
                    thousand: Give.form.fn.getInfo("thousands_separator", t),
                    precision: o
                })
            }
        }, jQuery(document).on("give:postInit", GiveDonationSummary.init), jQuery(document).on("Give:onGatewayLoadSuccess", GiveDonationSummary.onGatewayLoadSuccess)
    })()
})();