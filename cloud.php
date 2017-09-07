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
            <dd><time content="2017-09-04T00:00:00Z" datatype="xsd:dateTime" datetime="2017-09-04T00:00:00Z" property="schema:dateModified">2017-09-04</time></dd>
          </dl>

          <dl id="document-inbox">
            <dt>Notifications Inbox</dt>
            <dd><a href="https://linkedresearch.org/inbox/linkedresearch.org/cloud/" rel="ldp:inbox">inbox/</a></dd>
          </dl>

          <section id="abstract">
            <h2>Abstract</h2>
            <div datatype="rdf:HTML" property="schema:abstract">
              <p>There is an abundance of scientific information on the Web. However, humans and machines have restricted authorization access, required to pay, or hindered to efficiently discover relations. The knowledge industry can better address societal challenges by embracing the virtues of the Web via decentralisation and interconnectivity of our collective knowledge.</p>

              <p>The <dfn id="lorc">Linked Open Research Cloud</dfn> (<abbr title="Linked Open Research Cloud">LORC</abbr>) project aims to increase the awareness, discovery, and reuse of resources about scholarly communication on the Web in the form of <cite><a href="https://www.w3.org/DesignIssues/LinkedData">Linked Data</a></cite>. It does this by accepting notifications about scholarly activities, making them available for reuse, and generates an interactive visualisation.</p>

              <p>This article has an inbox to receive <cite><a href="https://www.w3.org/TR/ldn/">Linked Data Notifications</a></cite> (<abbr title="Linked Data Notifications">LDN</abbr>) about scholarly activities, eg. publication of scholarly articles, <cite><a href="https://www.w3.org/TR/annotation-model/">Web Annotation</a></cite> (like peer reviews, replies), citations, call for contributions, proceedings, scientific observations and workflows, funding information etc. By enabling scientific knowledge better findable and accessible, we can potentially increase their effectiveness and efficiency.</p>
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

          <section id="notifications" rel="schema:hasPart" resource="#notifications">
            <h2 property="schema:name">Notifications</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p>LORC uses the <cite><a href="https://www.w3.org/TR/ldn/">Linked Data Notifications</a></cite> protocol to receive and serve notifications about scholarly resources, so that they can be discovered and consumed by different applications. The visualisation in this article is dynamically constructed (with JavaScript and SVG) by consuming LORC’s Inbox. For LORC, notifications only need to <em>refer</em> to complete works and activities. Different applications can discover and get the contents of the Inbox, where each notification has a dereferenceable HTTP URL with its content represented in RDF.</p>

              <p>The requirements for a notification to be included in LORC’s Inbox and the graph are as follows:</p>

              <ul>
                <li>A notification <em class="rfc2119">MUST</em> conform to one of the specified data shapes.</li>
                <li>A notification <em class="rfc2119">MUST</em> refer to resources that implement the <cite><a href="https://www.w3.org/DesignIssues/LinkedData">Linked Data design principles</a></cite>.</li>
                <li>A notification <em class="rfc2119">MUST</em> refer to resources that are accessible to anyone free of charge.</li>
              </ul>

              <section id="notification-payload" rel="schema:hasPart" resource="notification-payload">
                <h3 property="schema:name">Notification payload</h3>
                <div property="schema:description">
                  <ul>
                    <li>A notification’s payload <em class="rfc2119">MUST</em> be serialized as HTML+RDFa, JSON-LD, or Turtle.</li>
                    <li>A notification <em class="rfc2119">MUST</em> use a <cite><a href="https://creativecommons.org/licenses/">Creative Commons license</a></cite>.</li>
                  </ul>

                  <div class="note">
                    <h4>Note</h4>
                    <div>
                      <p>Note that the LDN protocol requires JSON-LD as baseline, and encourages content-negotiation with the server for the other serializations. In addition to JSON-LD, LORC's Inbox also accepts HTML+RDFa and Turtle serializations. Sender applications that wants to provide both human and machine-readable serialization may want to use HTML+RDFa.</p>
                    </div>
                  </div>

                  <div class="note">
                    <h4>Note</h4>
                    <div>
                      <p>We will release data shapes for notifications so that you know exactly what can be sent, as well as help us to verify your notification. See also <a href="https://github.com/linkedresearch/linkedresearch.org/labels/cloud">open issues</a>.</p>
                    </div>
                  </div>
                </div>
              </section>

              <section id="sending-notifications" rel="schema:hasPart" resource="sending-notifications">
                <h3 property="schema:name">Sending notifications</h3>
                <div property="schema:description">
                  <p>A typical LDN <em>sender</em> discovers the inbox of a target resource, eg. this article, so that the inbox URL is not hardcoded in sender’s application. There are conforming <a href="https://linkedresearch.org/ldn/tests/summary#sender">LDN sender</a> applications which you can use to send notifications, or you are welcome to use your own. However, sending notifications directly into this article’s inbox (see the object of the <code>ldp:inbox</code> relation) is still welcome.</p>

                  <p>Here are some examples using <cite>curl</cite>:</p>

                  <figure class="listing" id="figure-ldn-research-article-rdfa" rel="schema:hasPart" resource="#figure-ldn-research-article-rdfa">
                    <pre about="#figure-ldn-research-article-rdfa" property="schema:description" typeof="fabio:Script"><code>curl -i -X POST -H'Content-Type: text/html' https://linkedresearch.org/inbox/linkedresearch.org/cloud/ \</code>
<code>--data-raw '&lt;!DOCTYPE html&gt;</code>
<code>&lt;html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml"&gt;</code>
<code>  &lt;head&gt;</code>
<code>    &lt;title&gt;“Title of Research Article” is a reply of “Call for Linked Research”&lt;/title&gt;</code>
<code>    &lt;meta charset="utf-8" /&gt;</code>
<code>  &lt;/head&gt;</code>
<code>  &lt;body about="" prefix="as: https://www.w3.org/ns/activitystreams#" typeof="as:Announce"&gt;</code>
<code>    &lt;p&gt;&lt;cite&gt;&lt;a href="http://example.org/research-article"&gt;Title of Research Article&lt;/a&gt;&lt;/cite&gt; is a reply of &lt;a about="http://example.org/research-article" rel="http://rdfs.org/sioc/ns#reply_of" href="https://linkedresearch.org/calls"&gt;Call for Linked Research&lt;/a&gt;.&lt;/p&gt;</code>
<code>    &lt;p&gt;&lt;Announced by &lt;a href="http://csarven.ca/#i" rel="as:actor"&gt;Sarven&lt;/a&gt;&lt;/p&gt;</code>
<code>    &lt;p&gt;&lt;Using &lt;a href="https://creativecommons.org/publicdomain/zero/1.0/" rel="schema:license"&gt;CC BY 4.0&lt;/a&gt; license&lt;/p&gt;</code>
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
<code>  schema:license &lt;https://creativecommons.org/publicdomain/zero/1.0/&gt; ;</code>
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

                <dt id="data-license">What is the license of the visualisations?</dt>
                <dd>The LORC visualisation uses the <a href="https://creativecommons.org/publicdomain/zero/1.0/">CC0 1.0 Universal</a> license.</dd>

                <dt id="notification-integrity">Will notifications be modified?</dt>
                <dd>We have no reason to alter a notification as long as it meets the required shape.</dd>

                <dt id="data-verification">How do you verify if a resource is accessible or free of charge?</dt>
                <dd>At this time, there is no automatic verification system to check this criteria. However, if we find out that it does not meet the criteria, it will be removed.</dd>

                <dt id="contact">Can I say, ask or do something?</dt>
                <dd>You are invited to join the public <a href="https://gitter.im/linkedresearch/chat">chat</a> or raise an <a href="https://github.com/linkedresearch/linkedresearch.org/">issue</a>.</dd>
              </dl>
            </div>
          </section>
        </div>
      </article>
    </main>
<? include 'end.php'; ?>
