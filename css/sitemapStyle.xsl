<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:sm="http://www.sitemaps.org/schemas/sitemap/0.9">

<xsl:template match="/">
   <html>
   	<head>
   		<style type="text/css">
         body {
            font-size:12px;
            font-family: Arial;
            font-weight: 800;
            background-color: white;
            text-align:center;
         }
         table{
         	margin: 0 auto;
         }
         h3{
         	font-size: 24px;
            font-family: Arial;
            font-weight: 800;
            color: #3f51b5;
            text-transform: uppercase;
         }
         td {
         	height:50px;
         	padding: 25px;
         	background-color: #3f51b5;
         }
         th {
         	height:20px;
         	padding: 25px;
         	background-color: #3f51b5;
         	color: white;
         }
         .whitecol {
         	background-color: rgba(0, 0, 0, 0.2);;
         }
         a  {
         	text-decoration: none;
         	color:white;
         }
      </style>
   	</head>
      <body>
	      <h3> CSS Galore - SiteMap </h3>
				<table>
					<tr bgcolor="#3f51b5" padding="25px">
					   <th>Location</th>
						<th>Last modification Date</th>
						<th>Change Frequency</th>
						<th>Priority</th>
					</tr>
					<xsl:for-each select="sm:urlset/sm:url">
						<tr>
								<td>
									<xsl:element name="a">
							            <xsl:attribute name="href">
							               <xsl:value-of select="sm:loc"/>
							            </xsl:attribute>
							            <xsl:value-of select="sm:loc"/>
         							</xsl:element>
								</td>
								<td class="whitecol"><xsl:value-of select="sm:lastmod"/></td>
								<td class="whitecol"><xsl:value-of select="sm:changefreq"/></td>
								<td class="whitecol"><xsl:value-of select="sm:priority"/></td>
					    </tr>
					</xsl:for-each>
			  	</table>
	  </body>
   </html>
</xsl:template>
</xsl:stylesheet>