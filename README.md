<h1>Screenshot Machine Shortcode</h1>

<table>
<tr><th align="right" valign="top" nowrap>Plugin Name</th><td>Screenshot Machine Shortcode</td></tr>
<tr><th align="right" valign="top" nowrap>Summary</th><td>Include images from Screenshot Machine in your content with a shortcode.</td></tr>
<tr><th align="right" valign="top" nowrap>Stable Version</th><td>1.1</td></tr>
<tr><th align="right" valign="top" nowrap>Requires At Least</th><td>WordPress 3.0</td></tr>
<tr><th align="right" valign="top" nowrap>Tested Up To</th><td>WordPress 4.3</td></tr>
<tr><th align="right" valign="top" nowrap>Contributors</th><td>jsmoriss</td></tr>
<tr><th align="right" valign="top" nowrap>License</th><td><a href="http://www.gnu.org/licenses/gpl.txt">GPLv3</a></td></tr>
<tr><th align="right" valign="top" nowrap>Tags / Keywords</th><td>screenshot, machine, shortcode</td></tr>
</table>

<h2>Description</h2>

<p>Use the <code>&amp;#91;ssm&amp;#93;</code> shortcode in your content with the following arguments:</p>

<ul>
<li>key="{account key}"</li>
<li>url="{website url}"</li>
<li>size="{size letter}" (default=T)</li>
<li>format="{jpg|png|gif}" (default=jpg)</li>
<li>days="{cache expiration}" (default=14)</li>
<li>wait="{wait in ms}" (default=200)</li>
<li>title="{href title}"</li>
<li>link="{yes|no}" (default=yes)</li>
<li>target="{link target}" (default=_blank)</li>
<li>refresh="{yes|no}" (default=yes)</li>
</ul>

<!--more-->

<p>You can find the {account key} on <a href="https://www.screenshotmachine.com/account.php">your Screenshot Machine account/settings page</a>.</p>

<p>The {website url} is the web page URL to capture into a screenshot.</p>

<p>Valid {size letter} values are:</p>

<ul>
<li>T = Width 120 x Height 90</li>
<li>S = Width 200 x Height 150</li>
<li>E = Width 320 x Height 240</li>
<li>N = Width 400 x Height 300</li>
<li>M = Width 640 x Height 480</li>
<li>L = Width 800 x Height 600</li>
<li>X = Width 1024 x Height 768</li>
</ul>

<p>{jpeg|png|gif} is the image format to use (default is jpg).</p>

<p>{cache expiration} is the number of days a screenshot should be used before a new one is created.</p>

<p>{wait in ms} is the number of milliseconds to wait before capturing the screenshot.</p>

<p>{href title} is the title text for the image alt and link title.</p>

<p>The link yes/no value will determine if the image is linked to the web page URL or not.</p>

<p>The {link target} default will open links in a new window/tab. An empty string, '_self', '_top', '_parent', and a framename are also valid.</p>

<p>The refresh parameter includes javascript to retry the image every second until it's available (for a maximum of 10 seconds).</p>

<p>Example:</p>

<pre><code>&amp;#91;ssm key="abc123" url="http://surniaulula.com/extend/plugins/screenshot-machine-shortcode/" size="S"&amp;#93;
</code></pre>


<h2>Installation</h2>

<p><em>Using the WordPress Dashboard</em></p>

<ol>
<li>Login to your weblog</li>
<li>Go to Plugins</li>
<li>Select Add New</li>
<li>Search for <em>Screenshot Machine Shortcode</em></li>
<li>Select Install</li>
<li>Select Install Now</li>
<li>Select Activate Plugin</li>
</ol>

<p><em>Manual</em></p>

<ol>
<li>Download and unzip the plugin</li>
<li>Upload the entire <code>screenshot-machine-shortcode/</code> folder to the <code>wp-content/plugins/</code> directory</li>
<li>Activate the plugin through the Plugins menu in WordPress</li>
</ol>


<h2>Frequently Asked Questions</h2>




<h2>Other Notes</h2>



