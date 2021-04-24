<?xml version="1.0"?>

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
    <xsl:output doctype-public="-//W3C//DTD XHTML 1.1//EN" doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"
                encoding="ISO-8859-2" method="html"/>


    <xsl:template match="/">
        <html>
            <head>
                <link rel="preconnect" href="https://fonts.gstatic.com"/>
                <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&amp;display=swap" rel="stylesheet"/>
                <meta charset="UTF-8"/>
                <link href="/assets/favicon.ico" rel="icon" type="image/x-icon"/>
                <link rel="stylesheet" href="style.css"/>
                <title>Zadanie 6</title>
            </head>
            <body>
                <h1>
                    Faktura Vat
                </h1>
                <div class="table">
                    <div class="row">
                        <div class="container-50">
                            <div class="facture-number">
                                <xsl:value-of select="facture/number"/>
                            </div>
                            <div class="payment">
                                <div class="payment-1">
                                    <xsl:value-of select="facture/payment/date"/>
                                </div>
                                <div class="payment-2">
                                    <xsl:value-of select="facture/payment/form"/>
                                </div>
                            </div>
                            <div class="seller">
                                <xsl:value-of select="facture/seller"/>
                            </div>
                        </div>

                        <div class="container-50">
                            <div class="city-date">
                                <xsl:value-of select="facture/city-date"/>
                            </div>
                            <div class="service-date">
                                <xsl:value-of select="facture/service-date"/>
                            </div>
                            <div class="buyer">
                                <xsl:value-of select="facture/buyer"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="account-number">
                            <xsl:value-of select="facture/account-number"/>
                        </div>
                    </div>
                    <div class="row">
                        <div class="table-container">
                            <xsl:for-each select="facture/items/product">
                                <div class="table-row">
                                    <div class="product-name">
                                        <xsl:value-of select="name"/>
                                    </div>
                                    <div class="international-unit">
                                        <xsl:value-of select="unit"/>
                                    </div>
                                    <div class="amount">
                                        <xsl:value-of select="amount"/>
                                    </div>
                                    <div class="zl-unit">
                                        <xsl:value-of select="zl-unit"/>
                                    </div>
                                    <div class="gr-unit">
                                        <xsl:value-of select="gr-unit"/>
                                    </div>
                                    <div class="zl-product">
                                        <xsl:value-of select="number(zl-unit) * number(amount)"/>
                                    </div>
                                    <div class="gr-product">
                                        <xsl:value-of select="number(gr-unit) * number(amount)"/>
                                    </div>
                                </div>
                            </xsl:for-each>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container-60">
                            <xsl:value-of select="facture/comments"/>
                        </div>
                        <div class="container-40">
                            <div class="summination">
                                <xsl:call-template name="sumProducts">
                                    <xsl:with-param name="temporary" select="facture/items/product"/>
                                </xsl:call-template>
                            </div>
                            <div class="author">
                                <xsl:value-of select="facture/author"/>
                            </div>
                        </div>
                    </div>
                </div>
            </body>
        </html>
    </xsl:template>
    <xsl:template name="sumProducts">
        <xsl:param name="sum" select="0"/>
        <xsl:param name="temporary"/>
        <xsl:choose>
            <xsl:when test="$temporary">
                <xsl:call-template name="sumProducts">
                    <xsl:with-param name="temporary" select="$temporary[position() > 1]"/>
                    <xsl:with-param name="sum" select="$sum + number($temporary/amount)*number($temporary/zl-unit)"/>
                </xsl:call-template>
            </xsl:when>
            <xsl:otherwise>
                <xsl:value-of select="$sum"/>
            </xsl:otherwise>
        </xsl:choose>
    </xsl:template>
</xsl:stylesheet>