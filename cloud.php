<? $title = "Linked Open Research Cloud"; ?>
<? include 'top.php'; ?>
    <main>
      <article about="" typeof="schema:Article">
        <h1 property="schema:name"><?=$title;?></h1>

        <div datatype="rdf:HTML" id="content" property="schema:description">
          <dl id="document-published">
            <dt>Published</dt>
            <dd><time content="2017-08-26T00:00:00Z" datatype="xsd:dateTime" datetime="2017-08-26T00:00:00Z" property="schema:datePublished">2017-08-26</time></dd>
          </dl>

          <dl id="document-modified">
            <dt>Modified</dt>
            <dd><time content="2017-09-03T00:00:00Z" datatype="xsd:dateTime" datetime="2017-09-03T00:00:00Z" property="schema:dateModified">2017-09-03</time></dd>
          </dl>

          <dl id="document-inbox">
            <dt>Notifications Inbox</dt>
            <dd><a href="https://linkedresearch.org/inbox/linkedresearch.org/cloud/" rel="ldp:inbox">inbox/</a></dd>
          </dl>

          <section id="abstract">
            <h2>Abstract</h2>
            <div datatype="rdf:HTML" property="schema:abstract">
              <p>There is an abundance of scientific information on the Web, yet they predominantly have some restricted authorization for humans and machines, require payment, or do not use native Web technologies for sharing and reuse.</p>

              <p>The <dfn id="lorc">Linked Open Research Cloud</dfn> (<abbr title="Linked Open Research Cloud">LORC</abbr>) project aims to increase the awareness, discovery, and reuse of <cite>free culture</cite> resources about scholarly communication on the Web in the form of Linked Data. It accepts notifications about those scholarly activities, makes them available for reuse, and generates an interactive visualisation.</p>

              <p>This article has an inbox to receive <cite><a href="https://www.w3.org/TR/ldn/">Linked Data Notifications</a></cite> (<abbr title="Linked Data Notifications">LDN</abbr>) about scholarly activities, eg. publication of scholarly articles (in any status), <cite><a href="https://www.w3.org/TR/annotation-model/">Web Annotation</a></cite> (like peer reviews, replies), citations, call for contributions, proceedings, scientific observations and workflows, funding information etc. Essentially anything along the lines of the Linked Research <a href="rfc#challenges">challenges</a>.</p>
            </div>
          </section>

          <section id="keywords">
            <h2>Keywords</h2>
            <div>
              <ul rel="schema:about">
                <li><a href="https://en.wikipedia.org/wiki/Linked_Data" resource="http://dbpedia.org/resource/Linked_Data">Linked Data</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Scholarly_communication" resource="http://dbpedia.org/resource/Scholarly_communication">Scholarly communication</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Semantic_publishing" resource="http://dbpedia.org/resource/Semantic_publishing">Semantic publishing</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Social_web" resource="http://dbpedia.org/resource/Social_web">Social web</a></li>
              </ul>
            </div>
          </section>

          <section id="graph" rel="schema:hasPart" resource="#graph">
            <h2 propert="schema:name">Graph</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <figure id="linked-open-research-cloud" rel="schema:hasPart" resource="#figure-centralised-decentralised-architectures">
                <script>document.addEventListener('DOMContentLoaded', function(){ DO.U.showInboxGraph(null, '#linked-open-research-cloud', {'license': 'https://creativecommons.org/publicdomain/zero/1.0/'}); });</script>
                <figcaption property="schema:name">Linked Open Research Cloud</figcaption>
              </figure>

              <div class="note">
                <h4>Note</h4>
                <div>
                  <p>We have just started. Making the LORC look comprehensible is <a href="https://github.com/linkedresearch/linkedresearch.org/labels/cloud">an ongoing work</a>. If you would like to make your ideas tangible, please get involved!</p>
                </div>
              </div>
            </div>
          </section>

          <section id="requirements" rel="schema:hasPart" resource="#requirements">
            <h2 property="schema:name">Requirements</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p>The requirements for a notification to be included in LORC's Inbox and the graph are as follows:</p>

              <ul>
                <li>A notification <em class="rfc2119">MUST</em> conform to one of the specified data shapes.</li>
                <li>A notification <em class="rfc2119">MUST</em> refer to resources that implement the <cite><a href="https://www.w3.org/DesignIssues/LinkedData">Linked Data design principles</a></cite>.</li>
                <li>A notification <em class="rfc2119">MUST</em> refer to resources that are accessible to anyone free of charge.</li>
              </ul>

              <h3 id="what-are-notifications">What are notifications?</h3>
              <p>LORC uses the LDN protocol to receive and serve notifications about scholarly resources, so that they can be discovered and consumed by different applications. Currently the graph is dynamically constructed on the client-side with JavaScript. For LORC, notifications only need to <em>refer</em> to complete works and activities. Stored notifications can be discovered and accessed from the Inbox (via <code>ldp:contains</code>) where each notification will have a dereferenceable HTTP URL with its content represented in RDF.</p>

              <h3 id="notification-payload">Notification payload</h3>
              <p>A notification's payload <em class="rfc2119">MUST</em> be serialized as HTML+RDFa, JSON-LD, or Turtle. A notification <em class="rfc2119">MUST</em> use a <cite><a href="https://creativecommons.org/licenses/">Creative Commons license</a></cite>. The license determines how it can be reused or remixed by consumers.</p>

              <div class="note">
                <h4>Note</h4>
                <div>
                  <p>We will release data shapes for notifications so that you know exactly what can be sent, as well as help us to verify your notification.</p>
                </div>
              </div>

              <h3 id="how-to-send-notifications">How to send notifications?</h3>
              <p>A typical LDN <em>sender</em> discovers the inbox of a target resource, eg. this article, so that the inbox URL is not hardcoded in sender's application. There are conforming <a href="https://linkedresearch.org/ldn/tests/summary#sender">LDN sender</a> applications which you can use to send notifications. However, sending notifications directly into this article's inbox (see the object of the <code>ldp:inbox</code> relation) is still welcome. Here are some examples using <cite>curl</cite>:</p>

              <figure class="listing" id="figure-ldn-research-article-rdfa" rel="schema:hasPart" resource="#figure-ldn-research-article-rdfa">
                <pre about="#figure-ldn-research-article-rdfa" property="schema:description" typeof="fabio:Script"><code>curl -i -X POST -H'Content-Type: text/html' https://linkedresearch.org/inbox/linkedresearch.org/cloud/ \</code>
<code>--data-raw '&lt;!DOCTYPE html&gt;</code>
<code>&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"&gt;</code>
<code>  &lt;head&gt;</code>
<code>    &lt;title&gt;“Title of Research Article” is a reply of “Call for Linked Research”&lt;/title&gt;</code>
<code>    &lt;meta charset="utf-8" /&gt;</code>
<code>  &lt;/head&gt;</code>
<code>  &lt;body about="" prefix="as: https://www.w3.org/ns/activitystreams#" typeof="as:Announce"&gt;</code>
<code>    &lt;p&gt;&lt;cite&gt;&lt;a href="http://example.org/research-article"&gt;Title of Research Article&lt;/a&gt;&lt;/cite&gt; is a reply of &lt;a about="http://example.org/research-article" rel="http://rdfs.org/sioc/ns#reply_of" href="https://linkedresearch.org/calls"&gt;Call for Linked Research&lt;/a&gt;.&lt;/p&gt;</code>
<code>    &lt;p&gt;&lt;Announced by &lt;a href="http://csarven.ca/#i" rel="as:actor"&gt;Sarven&lt;/a&gt;&lt;/p&gt;</code>
<code>    &lt;p&gt;&lt;Using &lt;a href="https://creativecommons.org/licenses/by/4.0/" rel="schema:license"&gt;CC BY 4.0&lt;/a&gt; license&lt;/p&gt;</code>
<code>  &lt;/body&gt;</code>
<code>&lt;/html&gt;</code>
<code>'</code></pre>
                <figcaption property="schema:name">Example <a href="https://www.w3.org/TR/ldn/">Linked Data Notification</a> to announce the research article with <code>curl</code> in HTML+RDFa.</figcaption>
              </figure>

              <figure class="listing" id="figure-ldn-research-article-announce" rel="schema:hasPart" resource="#figure-ldn-research-article-announce">
                <pre about="#figure-ldn-research-article-announce" property="schema:description" typeof="fabio:Script"><code>curl -i -X POST -H'Content-Type: text/turtle' https://linkedresearch.org/inbox/linkedresearch.org/cloud/ \</code>
<code>--data-raw '@prefix as: &lt;https://www.w3.org/ns/activitystreams#&gt; .</code>
<code>@prefix oa: &lt;http://www.w3.org/ns/oa#&gt; .</code>
<code>@prefix xsd: &lt;http://www.w3.org/2001/XMLSchema#&gt; .</code>
<code>@prefix schema: &lt;http://schema.org/&gt; .</code>
<code>&lt;&gt; a as:Announce ;</code>
<code>  schema:license &lt;https://creativecommons.org/licenses/by/4.0/&gt; ;</code>
<code>  as:actor &lt;http://csarven.ca/#i&gt; ;</code>
<code>  as:object &lt;http://example.org/research-article&gt; ;</code>
<code>  as:target &lt;https://linkedresearch.org/calls&gt; ;</code>
<code>  as:updated "2016-11-07T11:47:52.852Z"^^xsd:dateTime .</code>
<code>&lt;http://example.org/research-article&gt;</code>
<code>  a oa:Annotation ;</code>
<code>  oa:motivation oa:replying .</code>
<code>'</code></pre>
                <figcaption property="schema:name">Example <a href="https://www.w3.org/TR/ldn/">Linked Data Notification</a> to announce the research article (using the <a href="https:/www.w3.org/TR/annotation-vocab">Web Annotation vocabulary</a>) with <code>curl</code> in Turtle.</figcaption>
              </figure>

              <figure class="listing" id="figure-ldn-research-article-json-ld" rel="schema:hasPart" resource="#figure-ldn-research-article-json-ld">
                <pre about="#figure-ldn-research-article-json-ld" property="schema:description" typeof="fabio:Script"><code>curl -i -X POST -H'Content-Type: application/ld+json' https://linkedresearch.org/inbox/linkedresearch.org/cloud/ \</code>
<code>--data-raw '{</code>
<code>  "@id":"http://example.org/research-article",</code>
<code>  "http://rdfs.org/sioc/ns#reply_of":</code>
<code>    { "@id": "https://linkedresearch.org/calls" }</code>
<code>}</code>
<code>'</code></pre>
                <figcaption property="schema:name">Example <a href="https://www.w3.org/TR/ldn/">Linked Data Notification</a> to announce the research article (using the <a href="http://rdfs.org/sioc/spec/">SIOC vocabulary</a>) with <code>curl</code> in JSON-LD.</figcaption>
              </figure>
            </div>
          </section>

          <section id="faq" rel="schema:hasPart" resource="#faq">
            <h2>You have some questions, so here are some answers:</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <dl>
                <dt id="lod-cloud">What about the <cite><a href="http://lod-cloud.net/">LOD Cloud</a></cite>?</dt>
                <dd>LORC is only meant to put emphasis on a the scholarly domain with its own requirements. If the LOD Cloud wants to incorporate LORC, there are no constraints from this end.</dd>

                <dt id="related-work">How is it different than related projects?</dt>
                <dd>You tell us 😉 LORC focuses on building the scholarly graph from the ground-level, ie. individuals, groups or labs taking the initiative. LORC is aimed to be composed of mentions of original Linked Data resources available in full and free of charge. For example, metadata of an article, citations of content with restricted access, or simply desktop/print-centric resources, would not qualify. Hence, if the works are not available in the wild or part of the commons, then they do not exist as far as LORC is concerned.</dd>

                <dt id="data-license">What's the license of the LORC visualisation and notifications?</dt>
                <dd>The notifications have their own license assigned by the sender. The LORC visualisation is <a href="https://creativecommons.org/publicdomain/zero/1.0/">CC0 1.0 Universal</a>.</dd>

                <dt id="integrity-and-persistence">Notification integrity and persistence</dt>
                <dd>We have no reason to alter a notification as long as it meets the required shape. If a notification is found to refer to things that do not meet the requirements, they will be removed.</dd>

                <dt id="data-verification">How do you verify if a resource is accessible or free of charge?</dt>
                <dd>At this time, there is no automatic verification system to check this criteria. However, if we find out that it does not meet the criteria, it will be removed</dd>

                <dt id="contact">Can I say, ask or do something?</dt>
                <dd>You are invited to join the public <a href="https://gitter.im/linkedresearch/chat">chat</a> or raise an <a href="https://github.com/linkedresearch/linkedresearch.org/">issue</a>.</dd>
              </dl>
            </div>
          </section>

        </div>
      </article>
    </main>
<? include 'end.php'; ?>
