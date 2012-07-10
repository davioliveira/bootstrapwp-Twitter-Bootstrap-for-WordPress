<?php
/**
 * Template Name: Style Guide, no sidebar
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.7
 *
 * Last Updated: June 3, 2012
 */
get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
    <div class="bs-docs-container">

      <!-- Masthead
      ================================================== -->
      <header class="jumbotron subhead" id="overview">
        <h1><?php the_title();?></h1>
   <p class="lead">On top of the scaffolding, basic HTML elements are styled and enhanced with extensible classes to provide a fresh, consistent look and feel.</p>
   <div class="navbar navbar-subnav">
    <div class="navbar-inner">
      <ul class="nav">
        <li><a href="#typography">Typography</a></li>
        <li><a href="#code">Code</a></li>
        <li><a href="#tables">Tables</a></li>
        <li><a href="#forms">Forms</a></li>
        <li><a href="#buttons">Buttons</a></li>
        <li><a href="#icons">Icons by Glyphicons</a></li>
      </ul>
    </div>
  </div>
</header>


<!-- Typography
================================================== -->
<section id="typography">
  <div class="page-header">
    <h1>Typography <small>Headings, paragraphs, lists, and other inline type elements</small></h1>
  </div>

  <h2>Headings</h2>
  <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available.</p>
  <div class="bs-docs-example">
    <h1>h1. Heading 1</h1>
    <h2>h2. Heading 2</h2>
    <h3>h3. Heading 3</h3>
    <h4>h4. Heading 4</h4>
    <h5>h5. Heading 5</h5>
    <h6>h6. Heading 6</h6>
  </div>

  <h2>Body copy</h2>
  <p>Bootstrap's global default <code>font-size</code> is <strong>13px</strong>, with a <code>line-height</code> of <strong>18px</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their line-height (9px by default).</p>
  <div class="bs-docs-example">
    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
  </div>

  <h3>Lead body copy</h3>
  <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
  <div class="bs-docs-example">
    <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
  </div>

  <h2>Built with Less</h2>
  <p>The typographic scale is based on two LESS variables in <strong>variables.less</strong>: <code>@baseFontSize</code> and <code>@baseLineHeight</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>


  <hr class="bs-docs-separator">


  <h2>Emphasis</h2>
  <p>Make use of HTML's default emphasis tags, <code>&lt;strong&gt;</code> and <code>&lt;em&gt;</code>.</p>

  <h3><code>&lt;strong&gt;</code></h3>
  <p>For emphasizing a snippet of text with <strong>important</strong></p>
  <div class="bs-docs-example">
    <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
  </div>
<pre class="prettyprint">
&lt;strong&gt;rendered as bold text&lt;/strong&gt;
</pre>

  <h3><code>&lt;em&gt;</code></h3>
  <p>For emphasizing a snippet of text with <em>stress</em></p>
  <div class="bs-docs-example">
    <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
  </div>
<pre class="prettyprint">
&lt;em&gt;rendered as italicized text&lt;/em&gt;
</pre>

  <p><span class="label label-info">Heads up!</span> Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>


  <hr class="bs-docs-separator">


  <h2>Abbreviations</h2>
  <p>Stylized implemenation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.</p>

  <h3><code>&lt;abbr&gt;</code></h3>
  <p>For expanded text on long hover of an abbreviation, include the <code>title</code> attribute.</p>
  <div class="bs-docs-example">
    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
  </div>
<pre class="prettyprint">
&lt;abbr title="attribute"&gt;attr&lt;/abbr&gt;
</pre>

  <h3><code>&lt;abbr class="initialism"&gt;</code></h3>
  <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
  <div class="bs-docs-example">
    <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
  </div>
<pre class="prettyprint">
&lt;abbr title="attribute" class="initialism"&gt;attr&lt;/abbr&gt;
</pre>


  <hr class="bs-docs-separator">


  <h2>Addresses</h2>
  <p>Present contact information for the nearest ancestor or the entire body of work.</p>

  <h3><code>&lt;address&gt;</code></h3>
  <p>Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
  <div class="bs-docs-example">
    <address>
      <strong>Twitter, Inc.</strong><br>
      795 Folsom Ave, Suite 600<br>
      San Francisco, CA 94107<br>
      <abbr title="Phone">P:</abbr> (123) 456-7890
    </address>
    <address>
      <strong>Full Name</strong><br>
      <a href="mailto:#">first.last@gmail.com</a>
    </address>
  </div>
<pre class="prettyprint linenums">
&lt;address&gt;
  &lt;strong&gt;Twitter, Inc.&lt;/strong&gt;&lt;br&gt;
  795 Folsom Ave, Suite 600&lt;br&gt;
  San Francisco, CA 94107&lt;br&gt;
  &lt;abbr title="Phone"&gt;P:&lt;/abbr&gt; (123) 456-7890
&lt;/address&gt;

&lt;address&gt;
  &lt;strong&gt;Full Name&lt;/strong&gt;&lt;br&gt;
  &lt;a href="mailto:#"&gt;first.last@gmail.com&lt;/a&gt;
&lt;/address&gt;
</pre>


  <hr class="bs-docs-separator">


  <h2>Blockquotes</h2>
  <p>For quoting blocks of content from another source within your document.</p>

  <h3>Default blockqoute</h3>
  <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes we recommend a <code>&lt;p&gt;</code>.</p>
  <div class="bs-docs-example">
    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    </blockquote>
  </div>
<pre class="prettyprint linenums">
&lt;blockquote&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
&lt;/blockquote&gt;
</pre>

  <h3>Blockquote options</h3>
  <p>Style and content changes for simple variations on a standard blockquote.</p>

  <h4>Naming a source</h4>
  <p>Add <code>&lt;small&gt;</code> tag for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
  <div class="bs-docs-example">
    <blockquote>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
    </blockquote>
  </div>
<pre class="prettyprint linenums">
&lt;blockquote&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
  &lt;small&gt;Someone famous &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
&lt;/blockquote&gt;
</pre>

  <h4>Alternate displays</h4>
  <p>Use <code>.pull-left</code> and <code>.pull-right</code> classes for floated, right-aligned blockquote content.</p>
  <div class="bs-docs-example" style="overflow: hidden;">
    <blockquote class="pull-right">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
      <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
    </blockquote>
  </div>
<pre class="prettyprint linenums">
&lt;blockquote class="pull-right"&gt;
  &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
  &lt;small&gt;Someone famous &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
&lt;/blockquote&gt;
</pre>


  <hr class="bs-docs-separator">


  <!-- Lists -->
  <h2>Lists</h2>

  <h3>Unordered</h3>
  <p>A list of items in which the order does <em>not</em> explicitly matter.</p>
  <div class="bs-docs-example">
    <ul>
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit
        <ul>
          <li>Phasellus iaculis neque</li>
          <li>Purus sodales ultricies</li>
          <li>Vestibulum laoreet porttitor sem</li>
          <li>Ac tristique libero volutpat at</li>
        </ul>
      </li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ul>
  </div>
<pre class="prettyprint linenums">
&lt;ul&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;
</pre>

  <h3>Ordered</h3>
  <p>A list of items in which the order <em>does</em> explicitly matter.</p>
  <div class="bs-docs-example">
    <ol>
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit</li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ol>
  </div>
<pre class="prettyprint linenums">
&lt;ol&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ol&gt;
</pre>

  <h3>Unstyled</h3>
  <p>A list of items with no <code>list-style</code> or additional left padding.</p>
  <div class="bs-docs-example">
    <ul class="unstyled">
      <li>Lorem ipsum dolor sit amet</li>
      <li>Consectetur adipiscing elit</li>
      <li>Integer molestie lorem at massa</li>
      <li>Facilisis in pretium nisl aliquet</li>
      <li>Nulla volutpat aliquam velit
        <ul>
          <li>Phasellus iaculis neque</li>
          <li>Purus sodales ultricies</li>
          <li>Vestibulum laoreet porttitor sem</li>
          <li>Ac tristique libero volutpat at</li>
        </ul>
      </li>
      <li>Faucibus porta lacus fringilla vel</li>
      <li>Aenean sit amet erat nunc</li>
      <li>Eget porttitor lorem</li>
    </ul>
  </div>
<pre class="prettyprint linenums">
&lt;ul class="unstyled"&gt;
  &lt;li&gt;...&lt;/li&gt;
&lt;/ul&gt;
</pre>

  <h3>Description</h3>
  <p>A list of terms with their associated descriptions.</p>
  <div class="bs-docs-example">
    <dl>
      <dt>Description lists</dt>
      <dd>A description list is perfect for defining terms.</dd>
      <dt>Euismod</dt>
      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
      <dd>Donec id elit non mi porta gravida at eget metus.</dd>
      <dt>Malesuada porta</dt>
      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
    </dl>
  </div>
<pre class="prettyprint linenums">
&lt;dl&gt;
  &lt;dt&gt;...&lt;/dt&gt;
  &lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;
</pre>

  <h4>Horizontal description</h4>
  <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side.</p>
  <div class="bs-docs-example">
    <dl class="dl-horizontal">
      <dt>Description lists</dt>
      <dd>A description list is perfect for defining terms.</dd>
      <dt>Euismod</dt>
      <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
      <dd>Donec id elit non mi porta gravida at eget metus.</dd>
      <dt>Malesuada porta</dt>
      <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
      <dt>Felis euismod semper eget lacinia</dt>
      <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
    </dl>
  </div>
<pre class="prettyprint linenums">
&lt;dl class="dl-horizontal"&gt;
  &lt;dt&gt;...&lt;/dt&gt;
  &lt;dd&gt;...&lt;/dd&gt;
&lt;/dl&gt;
</pre>
  <p>
    <span class="label label-info">Heads up!</span>
    Horizontal description lists will truncate terms that are too long to fit in the left column fix <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.
  </p>
</section>



<!-- Code
================================================== -->
<section id="code">
  <div class="page-header">
    <h1>Code <small>Inline and block code snippets</small></h1>
  </div>

  <h2>Inline</h2>
  <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
<pre class="prettyprint linenums">
For example, &lt;code&gt;section&lt;/code&gt; should be wrapped as inline.
</pre>

  <h2>Basic block</h2>
  <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>
<pre>
&lt;p&gt;Sample text here...&lt;/p&gt;
</pre>
<pre class="prettyprint linenums" style="margin-bottom: 9px;">
&lt;pre&gt;
  &amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
&lt;/pre&gt;
</pre>
  <p><strong>Note:</strong> Be sure to keep code within <code>&lt;pre&gt;</code> tags as close to the left as possible; it will render all tabs.</p>
  <p>You may optionally add the <code>.pre-scrollable</code> class which will set a max-height of 350px and provide a y-axis scrollbar.</p>
</section>



<!-- Tables
================================================== -->
<section id="tables">
  <div class="page-header">
    <h1>Tables <small>For, you guessed it, tabular data</small></h1>
  </div>

  <h2>Default styles</h2>
  <p>For basic styling&mdash;light padding and only horizontal dividers&mdash;add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>
  <div class="bs-docs-example">
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
<pre class="prettyprint linenums">
&lt;table class="table"&gt;
  …
&lt;/table&gt;
</pre>


  <hr class="bs-docs-separator">


  <h2>Optional classes</h2>
  <p>Add any of the follow classes to the <code>.table</code> base class.</p>

  <h3><code>.table-striped</code></h3>
  <p>Adds zebra-striping to any table row within the <code>&lt;tbody&gt;</code> via the <code>:nth-child</code> CSS selector (not available in IE7-IE8).</p>
  <div class="bs-docs-example">
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-striped"&gt;
  …
&lt;/table&gt;
</pre>

  <h3><code>.table-bordered</code></h3>
  <p>Add borders and rounded corners to the table.</p>
  <div class="bs-docs-example">
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td rowspan="2">1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <td>Mark</td>
          <td>Otto</td>
          <td>@TwBootstrap</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td>3</td>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
<pre class="prettyprint linenums">
&lt;table class="table table-bordered"&gt;
  …
&lt;/table&gt;
</pre>

  <h3><code>.table-hover</code></h3>
  <p>Enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
  <div class="bs-docs-example">
    <table class="table table-hover">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td>3</td>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-hover"&gt;
  …
&lt;/table&gt;
</pre>

  <h3><code>.table-condensed</code></h3>
  <p>Makes tables more compact by cutting cell padding in half.</p>
  <div class="bs-docs-example">
    <table class="table table-condensed">
      <thead>
        <tr>
          <th>#</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Username</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
        </tr>
        <tr>
          <td>3</td>
          <td colspan="2">Larry the Bird</td>
          <td>@twitter</td>
        </tr>
      </tbody>
    </table>
  </div>
<pre class="prettyprint linenums" style="margin-bottom: 18px;">
&lt;table class="table table-condensed"&gt;
  …
&lt;/table&gt;
</pre>


  <hr class="bs-docs-separator">


  <h2>Supported table markup</h2>
  <p>List of supported table HTML elements and how they should be used.</p>
  <table class="table table-bordered table-striped">
    <colgroup>
      <col class="span1">
      <col class="span7">
    </colgroup>
    <thead>
      <tr>
        <th>Tag</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>
          <code>&lt;table&gt;</code>
        </td>
        <td>
          Wrapping element for displaying data in a tabular format
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;thead&gt;</code>
        </td>
        <td>
          Container element for table header rows (<code>&lt;tr&gt;</code>) to label table columns
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;tbody&gt;</code>
        </td>
        <td>
          Container element for table rows (<code>&lt;tr&gt;</code>) in the body of the table
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;tr&gt;</code>
        </td>
        <td>
          Container element for a set of table cells (<code>&lt;td&gt;</code> or <code>&lt;th&gt;</code>) that appears on a single row
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;td&gt;</code>
        </td>
        <td>
          Default table cell
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;th&gt;</code>
        </td>
        <td>
          Special table cell for column (or row, depending on scope and placement) labels<br>
          Must be used within a <code>&lt;thead&gt;</code>
        </td>
      </tr>
      <tr>
        <td>
          <code>&lt;caption&gt;</code>
        </td>
        <td>
          Description or summary of what the table holds, especially useful for screen readers
        </td>
      </tr>
    </tbody>
  </table>
<pre class="prettyprint linenums">
&lt;table&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th&gt;…&lt;/th&gt;
      &lt;th&gt;…&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td&gt;…&lt;/td&gt;
      &lt;td&gt;…&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;
</pre>

</section>



<!-- Forms
================================================== -->
<section id="forms">
  <div class="page-header">
    <h1>Forms</h1>
  </div>

  <h2>Default styles</h2>
  <p>Individual form controls receive styling, but without any required base class on the <code>&lt;form&gt;</code> or large changes in markup. Results in stacked, left-aligned labels on top of form controls.</p>
  <form class="bs-docs-example">
    <label>Label name</label>
    <input type="text" placeholder="Type something…">
    <p class="help-block">Example block-level help text here.</p>
    <label class="checkbox">
      <input type="checkbox"> Check me out
    </label>
    <button type="submit" class="btn">Submit</button>
  </form>
<pre class="prettyprint linenums">
&lt;form class="well"&gt;
  &lt;label&gt;Label name&lt;/label&gt;
  &lt;input type="text" placeholder="Type something…"&gt;
  &lt;span class="help-block"&gt;Example block-level help text here.&lt;/span&gt;
  &lt;label class="checkbox"&gt;
    &lt;input type="checkbox"&gt; Check me out
  &lt;/label&gt;
  &lt;button type="submit" class="btn"&gt;Submit&lt;/button&gt;
&lt;/form&gt;
</pre>


  <hr class="bs-docs-separator"></hr>


  <h2>Optional layouts</h2>
  <p>Included with Bootstrap are three optional form layouts for common use cases.</p>

  <h3>Search form</h3>
  <p>Add <code>.form-search</code> to the form and <code>.search-query</code> to the <code>&lt;input&gt;</code> for an extra-rounded text input.</p>
  <form class="bs-docs-example form-search">
    <input type="text" class="input-medium search-query">
    <button type="submit" class="btn">Search</button>
  </form>
<pre class="prettyprint linenums">
&lt;form class="form-search"&gt;
  &lt;input type="text" class="input-medium search-query"&gt;
  &lt;button type="submit" class="btn"&gt;Search&lt;/button&gt;
&lt;/form&gt;
</pre>

  <h3>Inline form</h3>
  <p>Add <code>.form-inline</code> for left-aligned labels and inline-block controls for a compact layout.</p>
  <form class="bs-docs-example form-inline">
    <input type="text" class="input-small" placeholder="Email">
    <input type="password" class="input-small" placeholder="Password">
    <label class="checkbox">
      <input type="checkbox"> Remember me
    </label>
    <button type="submit" class="btn">Sign in</button>
  </form>
<pre class="prettyprint linenums">
&lt;form class="form-inline"&gt;
  &lt;input type="text" class="input-small" placeholder="Email"&gt;
  &lt;input type="password" class="input-small" placeholder="Password"&gt;
  &lt;label class="checkbox"&gt;
    &lt;input type="checkbox"&gt; Remember me
  &lt;/label&gt;
  &lt;button type="submit" class="btn"&gt;Sign in&lt;/button&gt;
&lt;/form&gt;
</pre>

  <h3>Horizontal form</h3>
  <p>Right align labels and float them to the left to make them appear on the same line as controls. Requires the most markup changes from a default form:</p>
  <ul>
    <li>Add <code>.form-horizontal</code> to the form</li>
    <li>Wrap labels and controls in <code>.control-group</code></li>
    <li>Add <code>.control-label</code> to the label</li>
    <li>Wrap any associated controls in <code>.controls</code> for proper alignment</li>
  </ul>
  <form class="bs-docs-example form-horizontal">
    <div class="control-group">
      <label class="control-label" for="">Email</label>
      <div class="controls">
        <input type="text" placeholder="Email">
      </div>
    </div>
    <div class="control-group">
      <label class="control-label" for="">Password</label>
      <div class="controls">
        <input type="password" placeholder="Password">
      </div>
    </div>
    <div class="control-group">
      <div class="controls">
        <label class="checkbox">
          <input type="checkbox"> Remember me
        </label>
        <button type="submit" class="btn">Sign in</button>
      </div>
    </div>
  </form>
<pre class="prettyprint linenums">
&lt;form class="form-horizontal"&gt;
  &lt;div class="control-group"&gt;
    &lt;label class="control-label" for=""&gt;Email&lt;/label&gt;
    &lt;div class="controls"&gt;
      &lt;input type="text" placeholder="Email"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="control-group"&gt;
    &lt;label class="control-label" for=""&gt;Password&lt;/label&gt;
    &lt;div class="controls"&gt;
      &lt;input type="password" placeholder="Password"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="control-group"&gt;
    &lt;div class="controls"&gt;
      &lt;label class="checkbox"&gt;
        &lt;input type="checkbox"&gt; Remember me
      &lt;/label&gt;
      &lt;button type="submit" class="btn"&gt;Sign in&lt;/button&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/form&gt;
</pre>


  <hr class="bs-docs-separator"></hr>


  <h2>Supported form controls</h2>
  <p>Examples of standard form controls supported in an example form layout.</p>

  <h3>Inputs</h3>
  <p>Most common form control, text-based input fields. Includes support for all HTML5 types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color.</p>
  <p>Requires the use of a specified <code>type</code> at all times.</p>
  <form class="bs-docs-example form-inline">
    <input type="text" placeholder="Text input">
  </form>
<pre class="prettyprint linenums">
&lt;input type="text" placeholder="Text input"&gt;
</pre>

  <h3>Textarea</h3>
  <p>Form control which supports multiple lines of text. Change <code>row</code> attribute as necessary.</p>
  <form class="bs-docs-example form-inline">
    <textarea rows="3"></textarea>
  </form>
<pre class="prettyprint linenums">
&lt;textarea id="textarea" rows="3"&gt;&lt;/textarea&gt;
</pre>

  <h3>Checkboxes and radios</h3>
  <p>Checkboxes are for selecting one or several options in a list while radios are for selecting one option from many.</p>
  <h4>Default (stacked)</h4>
  <form class="bs-docs-example">
    <label class="checkbox">
      <input type="checkbox" value="">
      Option one is this and that&mdash;be sure to include why it's great
    </label>
    <br>
    <label class="radio">
      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
      Option one is this and that&mdash;be sure to include why it's great
    </label>
    <label class="radio">
      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
      Option two can be something else and selecting it will deselect option one
    </label>
  </form>
<pre class="prettyprint linenums">
&lt;label class="checkbox"&gt;
  &lt;input type="checkbox" value=""&gt;
  Option one is this and that&mdash;be sure to include why it's great
&lt;/label&gt;

&lt;label class="radio"&gt;
  &lt;input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked&gt;
  Option one is this and that&mdash;be sure to include why it's great
&lt;/label&gt;
&lt;label class="radio"&gt;
  &lt;input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
  Option two can be something else and selecting it will deselect option one
&lt;/label&gt;
</pre>

  <h4>Inline checkboxes</h4>
  <p>Add the <code>.inline</code> class to a series of checkboxes or radios for controls appear on the same line.</p>
  <form class="bs-docs-example">
    <label class="checkbox inline">
      <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
    </label>
    <label class="checkbox inline">
      <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
    </label>
    <label class="checkbox inline">
      <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
    </label>
  </form>
<pre class="prettyprint linenums">
&lt;label class="checkbox inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox1" value="option1"&gt; 1
&lt;/label&gt;
&lt;label class="checkbox inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox2" value="option2"&gt; 2
&lt;/label&gt;
&lt;label class="checkbox inline"&gt;
  &lt;input type="checkbox" id="inlineCheckbox3" value="option3"&gt; 3
&lt;/label&gt;
</pre>

  <h3>Selects</h3>
  <p>Use the default option or specify a <code>multiple="multiple"</code> to show multiple options at once.</p>
  <form class="bs-docs-example">
    <select>
      <option>something</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
    <br>
    <select>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </form>
<pre class="prettyprint linenums">
&lt;select&gt;
  &lt;option&gt;something&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;

&lt;select&gt;
  &lt;option&gt;1&lt;/option&gt;
  &lt;option&gt;2&lt;/option&gt;
  &lt;option&gt;3&lt;/option&gt;
  &lt;option&gt;4&lt;/option&gt;
  &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;
</pre>


  <hr class="bs-docs-separator"></hr>


  <h2>Extending form controls</h2>
  <p>Adding on top of existing browser controls, Bootstrap includes other useful form components.</p>

  <h3>Prepended and appended inputs</h3>
  <p>Add text or buttons before or after any text-based input. Do note that <code>select</code> elements are not supported here.</p>

  <h4>Default options</h4>
  <p>Wrap a <code>.add-on</code> and an <code>input</code> with one of two classes to prepend or append text to an input.</p>
  <form class="bs-docs-example">
    <div class="input-prepend">
      <span class="add-on">@</span>
      <input class="span2" id="prependedInput" size="16" type="text" placeholder="Username">
    </div>
    <br>
    <div class="input-append">
      <input class="span2" id="appendedInput" size="16" type="text">
      <span class="add-on">.00</span>
    </div>
  </form>
<pre class="prettyprint linenums">
&lt;div class="input-prepend"&gt;
  &lt;span class="add-on"&gt;@&lt;/span&gt;&lt;input class="span2" id="prependedInput" size="16" type="text" placeholder="Username"&gt;
&lt;/div&gt;
&lt;div class="input-append"&gt;
  &lt;input class="span2" id="appendedInput" size="16" type="text"&gt;&lt;span class="add-on"&gt;.00&lt;/span&gt;
&lt;/div&gt;
</pre>

  <h4>Combined</h4>
  <p>Use both classes and two instances of <code>.add-on</code> to prepend and append an input.</p>
  <form class="bs-docs-example form-inline">
    <div class="input-prepend input-append">
      <span class="add-on">$</span>
      <input class="span2" id="appendedPrependedInput" size="16" type="text">
      <span class="add-on">.00</span>
    </div>
  </form>
<pre class="prettyprint linenums">
&lt;div class="input-prepend input-append"&gt;
  &lt;span class="add-on"&gt;$&lt;/span&gt;&lt;input class="span2" id="appendedPrependedInput" size="16" type="text"&gt;&lt;span class="add-on"&gt;.00&lt;/span&gt;
&lt;/div&gt;
</pre>

  <h4>Buttons instead of text</h4>
  <p>Instead of a <code>&lt;span&gt;</code> with text, use a <code>.btn</code> to attach a button (or two) to an input.</p>
  <form class="bs-docs-example">
    <div class="input-append">
      <input class="span2" id="appendedInputButton" size="16" type="text">
      <button class="btn" type="button">Go!</button>
    </div>
    <br>
    <div class="input-append">
      <input class="span2" id="appendedInputButtons" size="16" type="text">
      <button class="btn" type="button">Search</button>
      <button class="btn" type="button">Options</button>
    </div>
  </form>
<pre class="prettyprint linenums">
&lt;div class="input-append"&gt;
  &lt;input class="span2" id="appendedInputButton" size="16" type="text"&gt;&lt;button class="btn" type="button"&gt;Go!&lt;/button&gt;
&lt;/div&gt;

&lt;div class="input-append"&gt;
  &lt;input class="span2" id="appendedInputButtons" size="16" type="text"&gt;&lt;button class="btn" type="button"&gt;Search&lt;/button&gt;&lt;button class="btn" type="button"&gt;Options&lt;/button&gt;
&lt;/div&gt;
</pre>

  <h3>Control sizing</h3>
  <p>Use relative sizing classes like <code>.input-large</code> or match your inputs to the grid column sizes using <code>.span*</code> classes.</p>

  <h4>Relative sizing</h4>
  <form class="bs-docs-example">
    <div class="controls docs-input-sizes">
      <input class="input-mini" type="text" placeholder=".input-mini">
      <input class="input-small" type="text" placeholder=".input-small">
      <input class="input-medium" type="text" placeholder=".input-medium">
      <input class="input-large" type="text" placeholder=".input-large">
      <input class="input-xlarge" type="text" placeholder=".input-xlarge">
      <input class="input-xxlarge" type="text" placeholder=".input-xxlarge">
    </div>
  </form>
<pre class="prettyprint linenums">
&lt;input class="input-mini" type="text"&gt;
&lt;input class="input-small" type="text"&gt;
&lt;input class="input-medium" type="text"&gt;
&lt;input class="input-large" type="text"&gt;
&lt;input class="input-xlarge" type="text"&gt;
&lt;input class="input-xxlarge" type="text"&gt;
</pre>

  <h4>Grid sizing</h4>
  <p>Use <code>.span1</code> to <code>.span12</code> for inputs that match the same sizes of the grid columns.</p>
  <form class="bs-docs-example">
    <div class="controls docs-input-sizes">
      <input class="span1" type="text" placeholder=".span1">
      <input class="span2" type="text" placeholder=".span2">
      <input class="span3" type="text" placeholder=".span3">
      <select class="span1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <select class="span2">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <select class="span3">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
    </div>
  </form>
<pre class="prettyprint linenums">
&lt;input class="span1" type="text"&gt;
&lt;input class="span2" type="text"&gt;
&lt;input class="span3" type="text"&gt;
</pre>

  <h3>Uneditable inputs</h3>
  <p>Present data in a form that's not editable without using actual form markup.</p>
  <form class="bs-docs-example">
    <span class="input-xlarge uneditable-input">Some value here</span>
  </form>
<pre class="prettyprint linenums">
  &lt;span class="input-xlarge uneditable-input"&gt;Some value here&lt;/span&gt;
</pre>

  <h3>Form actions</h3>
  <p>End a form with a group of actions (buttons). When placed within a <code>.form-horizontal</code>, the buttons will automatically indent to line up with the form controls.</p>
  <form class="bs-docs-example">
    <div class="form-actions">
      <button type="submit" class="btn btn-primary">Save changes</button>
      <button class="btn">Cancel</button>
    </div>
  </form>
<pre class="prettyprint linenums">
&lt;div class="form-actions"&gt;
  &lt;button type="submit" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
  &lt;button class="btn"&gt;Cancel&lt;/button&gt;
&lt;/div&gt;
</pre>

  <h3>Help text</h3>
  <p>Inline and block level support for help text that appears around form controls.</p>
  <h4>Inline help</h4>
  <form class="bs-docs-example form-inline">
    <input type="text"> <span class="help-inline">Inline help text</span>
  </form>
<pre class="prettyprint linenums">
&lt;span class="help-inline"&gt;Inline help text&lt;/span&gt;
</pre>

  <h4>Block help</h4>
  <form class="bs-docs-example form-inline">
    <input type="text">
    <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
  </form>
<pre class="prettyprint linenums">
&lt;span class="help-block"&gt;A longer block of help text that breaks onto a new line and may extend beyond one line.&lt;/span&gt;
</pre>


  <hr class="bs-docs-separator"></hr>


  <h2>Form control states</h2>
  <p>Provide feedback to users or visitors with basic feedback states on form controls and labels.</p>

  <h3>Input focus</h3>
  <p>We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.</p>
  <form class="bs-docs-example form-inline">
    <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused...">
  </form>
<pre class="prettyprint linenums">
&lt;input class="input-xlarge" id="focusedInput" type="text" value="This is focused..."&gt;
</pre>

  <h3>Disabled inputs</h3>
  <p>Add the <code>disabled</code> attribute on an input to prevent user input and trigger a slightly different look.</p>
  <form class="bs-docs-example form-inline">
    <input class="input-xlarge" id="disabledInput" type="text" placeholder="Disabled input here…" disabled>
  </form>
<pre class="prettyprint linenums">
&lt;input class="input-xlarge" id="disabledInput" type="text" placeholder="Disabled input here..." disabled&gt;
</pre>

  <h3>Validation states</h3>
  <p>Bootstrap includes validation styles for error, warning, and success messages. To use, add the appropriate class to the surrounding <code>.control-group</code>.</p>

  <form class="bs-docs-example form-horizontal">
    <div class="control-group warning">
      <label class="control-label" for="inputWarning">Input with warning</label>
      <div class="controls">
        <input type="text" id="inputWarning">
        <span class="help-inline">Something may have gone wrong</span>
      </div>
    </div>
    <div class="control-group error">
      <label class="control-label" for="inputError">Input with error</label>
      <div class="controls">
        <input type="text" id="inputError">
        <span class="help-inline">Please correct the error</span>
      </div>
    </div>
    <div class="control-group success">
      <label class="control-label" for="inputSuccess">Input with success</label>
      <div class="controls">
        <input type="text" id="inputSuccess">
        <span class="help-inline">Woohoo!</span>
      </div>
    </div>
  </form>
<pre class="prettyprint linenums">
&lt;div class="control-group warning"&gt;
  &lt;label class="control-label" for="inputWarning"&gt;Input with warning&lt;/label&gt;
  &lt;div class="controls"&gt;
    &lt;input type="text" id="inputWarning"&gt;
    &lt;span class="help-inline"&gt;Something may have gone wrong&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="control-group error"&gt;
  &lt;label class="control-label" for="inputError"&gt;Input with error&lt;/label&gt;
  &lt;div class="controls"&gt;
    &lt;input type="text" id="inputError"&gt;
    &lt;span class="help-inline"&gt;Please correct the error&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class="control-group success"&gt;
  &lt;label class="control-label" for="inputSuccess"&gt;Input with success&lt;/label&gt;
  &lt;div class="controls"&gt;
    &lt;input type="text" id="inputSuccess"&gt;
    &lt;span class="help-inline"&gt;Woohoo!&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;
</pre>

</section>



<!-- Buttons
================================================== -->
<section id="buttons">
  <div class="page-header">
    <h1>Buttons</h1>
  </div>

  <h2>Default buttons</h2>
  <p>Button styles can be applied to anything with the <code>.btn</code> class applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.</p>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Button</th>
        <th>class=""</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><button class="btn" href="#">Default</button></td>
        <td><code>btn</code></td>
        <td>Standard gray button with gradient</td>
      </tr>
      <tr>
        <td><button class="btn btn-primary" href="#">Primary</button></td>
        <td><code>btn btn-primary</code></td>
        <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
      </tr>
      <tr>
        <td><button class="btn btn-info" href="#">Info</button></td>
        <td><code>btn btn-info</code></td>
        <td>Used as an alternative to the default styles</td>
      </tr>
      <tr>
        <td><button class="btn btn-success" href="#">Success</button></td>
        <td><code>btn btn-success</code></td>
        <td>Indicates a successful or positive action</td>
      </tr>
      <tr>
        <td><button class="btn btn-warning" href="#">Warning</button></td>
        <td><code>btn btn-warning</code></td>
        <td>Indicates caution should be taken with this action</td>
      </tr>
      <tr>
        <td><button class="btn btn-danger" href="#">Danger</button></td>
        <td><code>btn btn-danger</code></td>
        <td>Indicates a dangerous or potentially negative action</td>
      </tr>
      <tr>
        <td><button class="btn btn-inverse" href="#">Inverse</button></td>
        <td><code>btn btn-inverse</code></td>
        <td>Alternate dark gray button, not tied to a semantic action or use</td>
      </tr>
    </tbody>
  </table>

  <h4>Cross browser compatibility</h4>
  <p>IE9 doesn't crop background gradients on rounded corners, so we remove it. Related, IE9 jankifies disabled <code>button</code> elements, rendering text gray with a nasty text-shadow that we cannot fix.</p>


  <hr class="bs-docs-separator">


  <h2>Button sizes</h2>
  <p>Fancy larger or smaller buttons? Add <code>.btn-large</code>, <code>.btn-small</code>, or <code>.btn-mini</code> for two additional sizes.</p>
  <p>
    <button class="btn btn-large btn-primary">Primary action</button>
    <button class="btn btn-large">Action</button>
  </p>
  <p>
    <button class="btn btn-small btn-primary">Primary action</button>
    <button class="btn btn-small">Action</button>
  </p>
  <p>
    <button class="btn btn-mini btn-primary">Primary action</button>
    <button class="btn btn-mini">Action</button>
  </p>


  <hr class="bs-docs-separator">


  <h2>Disabled state</h2>
  <p>Make buttons look unclickable by fading them back 50%.</p>

  <h3>Anchor element</h3>
  <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
  <p class="bs-docs-example">
    <a href="#" class="btn btn-large btn-primary disabled">Primary link</a>
    <a href="#" class="btn btn-large disabled">Link</a>
  </p>
<pre class="prettyprint linenums">
&lt;a href="#" class="btn btn-large btn-primary disabled"&gt;Primary link&lt;/a&gt;
&lt;a href="#" class="btn btn-large disabled"&gt;Link&lt;/a&gt;
</pre>
  <p>
    <span class="label label-info">Heads up!</span>
    We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required.
  </p>

  <h3>Button element</h3>
  <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
  <p class="bs-docs-example">
    <button class="btn btn-large btn-primary disabled" disabled="disabled">Primary button</button>
    <button class="btn btn-large" disabled>Button</button>
  </p>
<pre class="prettyprint linenums">
&lt;button class="btn btn-large btn-primary disabled" disabled="disabled"&gt;Primary button&lt;/button&gt;
&lt;button class="btn btn-large" disabled&gt;Button&lt;/button&gt;
</pre>


  <hr class="bs-docs-separator">


  <h2>One class, multiple tags</h2>
  <p>Use the <code>.btn</code> class on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
<form class="bs-docs-example">
  <a class="btn" href="">Link</a>
  <button class="btn" type="submit">Button</button>
  <input class="btn" type="button" value="Input">
  <input class="btn" type="submit" value="Submit">
</form>
<pre class="prettyprint linenums">
&lt;a class="btn" href=""&gt;Link&lt;/a&gt;
&lt;button class="btn" type="submit"&gt;
  Button
&lt;/button&gt;
&lt;input class="btn" type="button"
         value="Input"&gt;
&lt;input class="btn" type="submit"
         value="Submit"&gt;
</pre>
  <p>As a best practice, try to match the element for you context to ensure matching cross-browser rendering. If you have an <code>input</code>, use an <code>&lt;input type="submit"&gt;</code> for your button.</p>

</section>



<!-- Icons
================================================== -->
<section id="icons">
  <div class="page-header">
    <h1>Icons <small>Graciously provided by <a href="http://glyphicons.com" target="_blank">Glyphicons</a></small></h1>
  </div>

  <h2>Icon glyphs</h2>
  <p>140 icons in sprite form, available in dark gray (default) and white, provided by <a href="http://glyphicons.com" target="_blank">Glyphicons</a>.</p>
  <div class="row">
    <div class="span2">
      <ul class="the-icons">
        <li><i class="icon-glass"></i> icon-glass</li>
        <li><i class="icon-music"></i> icon-music</li>
        <li><i class="icon-search"></i> icon-search</li>
        <li><i class="icon-envelope"></i> icon-envelope</li>
        <li><i class="icon-heart"></i> icon-heart</li>
        <li><i class="icon-star"></i> icon-star</li>
        <li><i class="icon-star-empty"></i> icon-star-empty</li>
        <li><i class="icon-user"></i> icon-user</li>
        <li><i class="icon-film"></i> icon-film</li>
        <li><i class="icon-th-large"></i> icon-th-large</li>
        <li><i class="icon-th"></i> icon-th</li>
        <li><i class="icon-th-list"></i> icon-th-list</li>
        <li><i class="icon-ok"></i> icon-ok</li>
        <li><i class="icon-remove"></i> icon-remove</li>
        <li><i class="icon-zoom-in"></i> icon-zoom-in</li>
        <li><i class="icon-zoom-out"></i> icon-zoom-out</li>
        <li><i class="icon-off"></i> icon-off</li>
        <li><i class="icon-signal"></i> icon-signal</li>
        <li><i class="icon-cog"></i> icon-cog</li>
        <li><i class="icon-trash"></i> icon-trash</li>
        <li><i class="icon-home"></i> icon-home</li>
        <li><i class="icon-file"></i> icon-file</li>
        <li><i class="icon-time"></i> icon-time</li>
        <li><i class="icon-road"></i> icon-road</li>
        <li><i class="icon-download-alt"></i> icon-download-alt</li>
        <li><i class="icon-download"></i> icon-download</li>
        <li><i class="icon-upload"></i> icon-upload</li>
        <li><i class="icon-inbox"></i> icon-inbox</li>
      </ul>
    </div>
    <div class="span2">
      <ul class="the-icons">
        <li><i class="icon-play-circle"></i> icon-play-circle</li>
        <li><i class="icon-repeat"></i> icon-repeat</li>
        <li><i class="icon-refresh"></i> icon-refresh</li>
        <li><i class="icon-list-alt"></i> icon-list-alt</li>
        <li><i class="icon-lock"></i> icon-lock</li>
        <li><i class="icon-flag"></i> icon-flag</li>
        <li><i class="icon-headphones"></i> icon-headphones</li>
        <li><i class="icon-volume-off"></i> icon-volume-off</li>
        <li><i class="icon-volume-down"></i> icon-volume-down</li>
        <li><i class="icon-volume-up"></i> icon-volume-up</li>
        <li><i class="icon-qrcode"></i> icon-qrcode</li>
        <li><i class="icon-barcode"></i> icon-barcode</li>
        <li><i class="icon-tag"></i> icon-tag</li>
        <li><i class="icon-tags"></i> icon-tags</li>
        <li><i class="icon-book"></i> icon-book</li>
        <li><i class="icon-bookmark"></i> icon-bookmark</li>
        <li><i class="icon-print"></i> icon-print</li>
        <li><i class="icon-camera"></i> icon-camera</li>
        <li><i class="icon-font"></i> icon-font</li>
        <li><i class="icon-bold"></i> icon-bold</li>
        <li><i class="icon-italic"></i> icon-italic</li>
        <li><i class="icon-text-height"></i> icon-text-height</li>
        <li><i class="icon-text-width"></i> icon-text-width</li>
        <li><i class="icon-align-left"></i> icon-align-left</li>
        <li><i class="icon-align-center"></i> icon-align-center</li>
        <li><i class="icon-align-right"></i> icon-align-right</li>
        <li><i class="icon-align-justify"></i> icon-align-justify</li>
        <li><i class="icon-list"></i> icon-list</li>
      </ul>
    </div>
    <div class="span2">
      <ul class="the-icons">
        <li><i class="icon-indent-left"></i> icon-indent-left</li>
        <li><i class="icon-indent-right"></i> icon-indent-right</li>
        <li><i class="icon-facetime-video"></i> icon-facetime-video</li>
        <li><i class="icon-picture"></i> icon-picture</li>
        <li><i class="icon-pencil"></i> icon-pencil</li>
        <li><i class="icon-map-marker"></i> icon-map-marker</li>
        <li><i class="icon-adjust"></i> icon-adjust</li>
        <li><i class="icon-tint"></i> icon-tint</li>
        <li><i class="icon-edit"></i> icon-edit</li>
        <li><i class="icon-share"></i> icon-share</li>
        <li><i class="icon-check"></i> icon-check</li>
        <li><i class="icon-move"></i> icon-move</li>
        <li><i class="icon-step-backward"></i> icon-step-backward</li>
        <li><i class="icon-fast-backward"></i> icon-fast-backward</li>
        <li><i class="icon-backward"></i> icon-backward</li>
        <li><i class="icon-play"></i> icon-play</li>
        <li><i class="icon-pause"></i> icon-pause</li>
        <li><i class="icon-stop"></i> icon-stop</li>
        <li><i class="icon-forward"></i> icon-forward</li>
        <li><i class="icon-fast-forward"></i> icon-fast-forward</li>
        <li><i class="icon-step-forward"></i> icon-step-forward</li>
        <li><i class="icon-eject"></i> icon-eject</li>
        <li><i class="icon-chevron-left"></i> icon-chevron-left</li>
        <li><i class="icon-chevron-right"></i> icon-chevron-right</li>
        <li><i class="icon-plus-sign"></i> icon-plus-sign</li>
        <li><i class="icon-minus-sign"></i> icon-minus-sign</li>
        <li><i class="icon-remove-sign"></i> icon-remove-sign</li>
        <li><i class="icon-ok-sign"></i> icon-ok-sign</li>
      </ul>
    </div>
    <div class="span2">
      <ul class="the-icons">
        <li><i class="icon-question-sign"></i> icon-question-sign</li>
        <li><i class="icon-info-sign"></i> icon-info-sign</li>
        <li><i class="icon-screenshot"></i> icon-screenshot</li>
        <li><i class="icon-remove-circle"></i> icon-remove-circle</li>
        <li><i class="icon-ok-circle"></i> icon-ok-circle</li>
        <li><i class="icon-ban-circle"></i> icon-ban-circle</li>
        <li><i class="icon-arrow-left"></i> icon-arrow-left</li>
        <li><i class="icon-arrow-right"></i> icon-arrow-right</li>
        <li><i class="icon-arrow-up"></i> icon-arrow-up</li>
        <li><i class="icon-arrow-down"></i> icon-arrow-down</li>
        <li><i class="icon-share-alt"></i> icon-share-alt</li>
        <li><i class="icon-resize-full"></i> icon-resize-full</li>
        <li><i class="icon-resize-small"></i> icon-resize-small</li>
        <li><i class="icon-plus"></i> icon-plus</li>
        <li><i class="icon-minus"></i> icon-minus</li>
        <li><i class="icon-asterisk"></i> icon-asterisk</li>
        <li><i class="icon-exclamation-sign"></i> icon-exclamation-sign</li>
        <li><i class="icon-gift"></i> icon-gift</li>
        <li><i class="icon-leaf"></i> icon-leaf</li>
        <li><i class="icon-fire"></i> icon-fire</li>
        <li><i class="icon-eye-open"></i> icon-eye-open</li>
        <li><i class="icon-eye-close"></i> icon-eye-close</li>
        <li><i class="icon-warning-sign"></i> icon-warning-sign</li>
        <li><i class="icon-plane"></i> icon-plane</li>
        <li><i class="icon-calendar"></i> icon-calendar</li>
        <li><i class="icon-random"></i> icon-random</li>
        <li><i class="icon-comment"></i> icon-comment</li>
        <li><i class="icon-magnet"></i> icon-magnet</li>
      </ul>
    </div>
    <div class="span2">
      <ul class="the-icons">
        <li><i class="icon-chevron-up"></i> icon-chevron-up</li>
        <li><i class="icon-chevron-down"></i> icon-chevron-down</li>
        <li><i class="icon-retweet"></i> icon-retweet</li>
        <li><i class="icon-shopping-cart"></i> icon-shopping-cart</li>
        <li><i class="icon-folder-close"></i> icon-folder-close</li>
        <li><i class="icon-folder-open"></i> icon-folder-open</li>
        <li><i class="icon-resize-vertical"></i> icon-resize-vertical</li>
        <li><i class="icon-resize-horizontal"></i> icon-resize-horizontal</li>
        <li><i class="icon-hdd"></i> icon-hdd</li>
        <li><i class="icon-bullhorn"></i> icon-bullhorn</li>
        <li><i class="icon-bell"></i> icon-bell</li>
        <li><i class="icon-certificate"></i> icon-certificate</li>
        <li><i class="icon-thumbs-up"></i> icon-thumbs-up</li>
        <li><i class="icon-thumbs-down"></i> icon-thumbs-down</li>
        <li><i class="icon-hand-right"></i> icon-hand-right</li>
        <li><i class="icon-hand-left"></i> icon-hand-left</li>
        <li><i class="icon-hand-up"></i> icon-hand-up</li>
        <li><i class="icon-hand-down"></i> icon-hand-down</li>
        <li><i class="icon-circle-arrow-right"></i> icon-circle-arrow-right</li>
        <li><i class="icon-circle-arrow-left"></i> icon-circle-arrow-left</li>
        <li><i class="icon-circle-arrow-up"></i> icon-circle-arrow-up</li>
        <li><i class="icon-circle-arrow-down"></i> icon-circle-arrow-down</li>
        <li><i class="icon-globe"></i> icon-globe</li>
        <li><i class="icon-wrench"></i> icon-wrench</li>
        <li><i class="icon-tasks"></i> icon-tasks</li>
        <li><i class="icon-filter"></i> icon-filter</li>
        <li><i class="icon-briefcase"></i> icon-briefcase</li>
        <li><i class="icon-fullscreen"></i> icon-fullscreen</li>
      </ul>
    </div>
  </div>

  <h3>Glyphicons attribution</h3>
  <p><a href="http://glyphicons.com/">Glyphicons</a> Halflings are normally not available for free, but an arrangement between Bootstrap and the Glyphicons creators have made this possible at not cost to you as developers. As a thank you, we ask you to include an optional link back to <a href="http://glyphicons.com/">Glyphicons</a> whenever practical.</p>


  <hr class="bs-docs-separator">


  <h2>How to use</h2>
  <p>All icons require an <code>&lt;i&gt;</code> tag with a unique class, prefixed with <code>icon-</code>. To use, place the following code just about anywhere:</p>
<pre class="prettyprint linenums">
&lt;i class="icon-search"&gt;&lt;/i&gt;
</pre>
  <p>There are also styles available for inverted (white) icons, made ready with one extra class:</p>
<pre class="prettyprint linenums">
&lt;i class="icon-search icon-white"&gt;&lt;/i&gt;
</pre>
  <p>
    <span class="label label-info">Heads up!</span>
    When using beside strings of text, as in buttons or nav links, be sure to leave a space after the <code>&lt;i&gt;</code> tag for proper spacing.
  </p>


  <hr class="bs-docs-separator">


  <h2>Icon examples</h2>
  <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>

  <h4>Buttons</h4>
  <div class="bs-docs-example">
    <div class="btn-toolbar" style="margin-bottom: 9px">
      <div class="btn-group">
        <a class="btn" href="#"><i class="icon-align-left"></i></a>
        <a class="btn" href="#"><i class="icon-align-center"></i></a>
        <a class="btn" href="#"><i class="icon-align-right"></i></a>
        <a class="btn" href="#"><i class="icon-align-justify"></i></a>
      </div>
      <div class="btn-group">
        <a class="btn btn-primary" href="#"><i class="icon-user icon-white"></i> User</a>
        <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="icon-pencil"></i> Edit</a></li>
          <li><a href="#"><i class="icon-trash"></i> Delete</a></li>
          <li><a href="#"><i class="icon-ban-circle"></i> Ban</a></li>
          <li class="divider"></li>
          <li><a href="#"><i class="i"></i> Make admin</a></li>
        </ul>
      </div>
    </div>
  </div>

  <h4>Navigation</h4>
  <div class="bs-docs-example">
    <div class="well" style="padding: 8px 0; margin-bottom: 0;">
      <ul class="nav nav-list">
        <li class="active"><a href="#"><i class="icon-home icon-white"></i> Home</a></li>
        <li><a href="#"><i class="icon-book"></i> Library</a></li>
        <li><a href="#"><i class="icon-pencil"></i> Applications</a></li>
        <li><a href="#"><i class="i"></i> Misc</a></li>
      </ul>
    </div>
  </div>

  <h4>Form fields</h4>
  <form class="bs-docs-example form-horizontal">
    <div class="control-group">
      <label class="control-label" for="inputIcon">Email address</label>
      <div class="controls">
        <div class="input-prepend">
          <span class="add-on"><i class="icon-envelope"></i></span><input class="span2" id="inputIcon" type="text">
        </div>
      </div>
    </div>
  </form>

</section>


<?php endwhile; ?>

<?php get_footer(); ?>