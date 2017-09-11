<? $title = "Linked Open Research Cloud"; ?>
<? include 'top.php'; ?>
    <main>
      <article about="" typeof="schema:Article doap:Specification">
        <h1 property="schema:name"><?=$title;?></h1>

        <div datatype="rdf:HTML" id="content" property="schema:description">
          <dl id="document-published">
            <dt>Published</dt>
            <dd><time content="2017-08-26T00:00:00Z" datatype="xsd:dateTime" datetime="2017-08-26T00:00:00Z" property="schema:datePublished">2017-08-26</time></dd>
          </dl>

          <dl id="document-modified">
            <dt>Modified</dt>
            <dd><time content="2017-09-11T00:00:00Z" datatype="xsd:dateTime" datetime="2017-09-11T00:00:00Z" property="schema:dateModified">2017-09-11</time></dd>
          </dl>

          <dl id="document-inbox">
            <dt>Notifications Inbox</dt>
            <dd><a href="https://linkedresearch.org/inbox/linkedresearch.org/cloud/" rel="ldp:inbox">inbox/</a></dd>
          </dl>

          <dl id="document-license">
            <dt>License</dt>
            <dd><a href="https://creativecommons.org/publicdomain/zero/1.0/" rel="schema:license" title="Creative Commons Zero">CC0 1.0 Universal</a></dd>
          </dl>

          <section id="about">
            <h2 property="schema:name">About</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p>There is an abundance of scientific information on the Web. However, humans and machines have restricted access, are required to pay, or hindered to efficiently discover relations. The knowledge industry can better address societal challenges by embracing the virtues of the Web via decentralisation and interconnectivity of our collective knowledge.</p>

              <p>The <dfn id="lorc">Linked Open Research Cloud</dfn> (<abbr title="Linked Open Research Cloud">LORC</abbr>) project aims to increase the awareness, discovery, and reuse of resources about scholarly communication on the Web in the form of open <cite><a href="https://www.w3.org/DesignIssues/LinkedData">Linked Data</a></cite>. It pursues this by accepting notifications about scholarly activities, making them available for reuse, and generates an interactive visualisation for additional exploration. Consequently, LORC can assist researchers with their applications to discover pertinent scholarly information on the Web, and connect their knowledge with the global knowledge graph. For the wider scientific community, LORC can facilitate scientometrics studies and decision making based on the scholarly commons ecosystem.</p>

              <p>To this end, this article announce its <em>inbox</em> to receive <cite><a href="https://www.w3.org/TR/ldn/">Linked Data Notifications</a></cite> (<abbr title="Linked Data Notifications">LDN</abbr>) about scholarly activities, eg. publication of scholarly articles, <cite><a href="https://www.w3.org/TR/annotation-model/">Web Annotations</a></cite> (like peer reviews, replies), citations, call for contributions, proceedings, scientific observations and workflows, arguments, funding information etc. With a system like LORC, universal scientific knowledge can be better connected, findable, and accessible, with the potential to amplify its effectiveness and efficiency.</p>
            </div>
          </section>

          <hr class="unicode-red-pill unicode-blue-pill" title="“This is your last chance. After this, there is no turning back. You take the blue pill — the story ends, you wake up in your bed and believe whatever you want to believe. You take the red pill — you stay in Wonderland and I show you how deep the rabbit-hole goes.” — Morpheus, The Matrix (1999)." />

          <section id="keywords">
            <h2>Keywords</h2>
            <div>
              <ul rel="schema:about">
                <li><a href="https://en.wikipedia.org/wiki/Linked_Data" resource="http://dbpedia.org/resource/Linked_Data">Linked Data</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Open_science" resource="http://dbpedia.org/resource/Open_science">Open science</a></li>
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

              <dl id="conformance" el="schema:hasPart" resource="#conformance">
                <dt property="skos:name">Conformance</dt>
                <dd datatype="rdf:HTML" property="schema:description">The key words "<em class="rfc2119">MUST</em>", "<em class="rfc2119">SHOULD</em>", "<em class="rfc2119">MAY</em>" in this document are to be interpreted as described in <cite><a href="https://tools.ietf.org/html/rfc2119" rel="schema:citation">RFC2119</a></cite>.</dd>
              </dl>

              <p>The requirements for a notification to be included in LORC’s Inbox and the graph are as follows:</p>

              <ul>
                <li>A notification <em class="rfc2119">MUST</em> conform to one of the specified <a href="#notification-data-shape">data shapes</a>.</li>
                <li>A notification <em class="rfc2119">MUST</em> refer to resources that implement the <cite><a href="https://www.w3.org/DesignIssues/LinkedData">Linked Data design principles</a></cite>.</li>
                <li>A notification <em class="rfc2119">MUST</em> refer to resources that are accessible to anyone free of charge.</li>
              </ul>

              <section id="notification-payload" rel="schema:hasPart" resource="notification-payload">
                <h3 property="schema:name">Notification payload</h3>
                <div property="schema:description">
                  <ul>
                    <li>A notification’s payload <em class="rfc2119">MUST</em> be serialized as either HTML+RDFa, JSON-LD, or Turtle, and use <code>text/html</code> or <code>application/xhtml+xml</code>, <code>application/ld+json</code>, <code>text/turtle</code> media types respectively in the HTTP <code>Content-Type</code> header.</li>
                    <li>A notification <em class="rfc2119">MUST</em> use a <cite><a href="https://creativecommons.org/publicdomain/zero/1.0/">CC0 1.0 Universal</a></cite> license.</li>
                  </ul>

                  <div class="note">
                    <h4>Note</h4>
                    <div>
                      <p>Note that the LDN protocol requires JSON-LD as baseline, and encourages content-negotiation with the server for the other serializations. In addition to JSON-LD, LORC’s Inbox also accepts HTML+RDFa and Turtle serializations. Sender applications that wants to provide both human and machine-readable serialization may want to use HTML+RDFa.</p>
                    </div>
                  </div>
                 </div>
              </section>

              <section id="notification-data-shape" rel="schema:hasPart" resource="notification-data-shape">
                <h3 property="schema:name">Notification data shape</h3>
                <div property="schema:description">
                  <p>In this section the data shapes for the following notifications are provided:</p>

                  <nav>
                    <ul>
                      <li><a href="#article-data-shape">Article data shape</a></li>
                      <li><a href="#annotation-data-shape">Annotation data shape</a></li>
                      <li><a href="#citation-data-shape">Citation data shape</a></li>
                    </ul>
                  </nav>

                  <p>In addition to the required data shapes, notifications can include anything else that may help with its reuse and the discovery of the resources it refers to. This does not mean that the body of the referred resources should be copied here.</p>

                  <dl id="article-data-shape" rel="schema:hasPart" resource="article-data-shape">
                    <dt property="schema:name">Article data shape</dt>
                    <dd id="article-data-shape-must" property="schema:description">
                      <p><code>MUST</code> include:</p>
                      <figure class="listing">
                        <pre><code id="article-data-shape-must-L1">&lt;&gt;</code>
<code id="article-data-shape-must-L2">  a as:Announce ;</code>
<code id="article-data-shape-must-L3">  as:updated "2017-09-05T21:11:58.611Z"^^xsd:dateTime ;</code>
<code id="article-data-shape-must-L4">  schema:license &lt;https://creativecommons.org/publicdomain/zero/1.0/&gt; ;</code>
<code id="article-data-shape-must-L5">  as:object &lt;http://csarven.ca/dokieli-rww&gt; .</code>
<code id="article-data-shape-must-L6"></code>
<code id="article-data-shape-must-L7">&lt;http://csarven.ca/dokieli-rww&gt;</code>
<code id="article-data-shape-must-L8">  a schema:ScholarlyArticle .</code></pre>
                      </figure>

                      <ul>
                        <li>The subject URI of the <code>as:Announce</code> is not explicitly declared (<code>&lt;&gt;</code>) because eventually it will be parsed as the notification’s URL.</li>
                        <li>A valid <code>xsd:dateTime</code> is expected for <code>as:updated</code>.</li>
                        <li>CC0 1.0 Universal license is expected.</li>
                        <li>The value of <code>as:object</code> is the primary object of the announce, ie. the article.</li>
                        <li>A class along the lines of <code>schema:ScholarlyArticle</code>, <code>sioc:Post</code>, <code>foaf:Document</code>, <code>sioc:Post</code>, <code>biblio:Paper</code>, <code>bibo:Document</code>, <code>as:Article</code>.</li>
                      </ul>
                    </dd>

                    <dd id="article-data-shape-should" property="schema:description">
                      <p><code>SHOULD</code> include:</p>
                      <figure class="listing">
                        <pre><code>&lt;&gt;</code>
<code>  as:actor &lt;http://csarven.ca/#i&gt; .</code>
<code></code>
<code>&lt;http://csarven.ca/dokieli-rww&gt;</code>
<code>  schema:license &lt;https://creativecommons.org/licenses/by/4.0/&gt; .</code></pre>
                      </figure>

                      <ul>
                        <li><code>as:actor</code> is the URI of the agent that sent the notification. Normally a person, as opposed to software.</li>
                        <li>URI of an open/free culture license on the article is expected.</li>
                      </ul>

                      <div class="note">
                        <h4>Note</h4>
                        <div>
                          <p>The property for the license would normally match that of what is in article, hence it is not enforced here. Senders may want to use eg. <cite><a href="http://schema.org/license">schema:license</a></cite>, <cite><a href="http://purl.org/dc/terms/license">dcterms:license</a></cite>, <cite><a href="http://creativecommons.org/ns#license">cc:license</a></cite>, <cite><a href="http://usefulinc.com/ns/doap#license">doap:license</a></cite>.</p>
                        </div>
                      </div>
                    </dd>
                  </dl>


                  <dl id="annotation-data-shape" rel="schema:hasPart" resource="annotation-data-shape">
                    <dt property="schema:name">Annotation data shape</dt>
                    <dd id="annotation-data-shape-must" property="schema:description">
                      <p><code>MUST</code> include:</p>
                      <figure class="listing">
                        <pre><code id="annotation-data-shape-must-L1">&lt;&gt;</code>
<code id="annotation-data-shape-must-L2">  a as:Announce ;</code>
<code id="annotation-data-shape-must-L3">  as:updated "2017-09-05T21:11:58.611Z"^^xsd:dateTime ;</code>
<code id="annotation-data-shape-must-L4">  schema:license &lt;https://creativecommons.org/publicdomain/zero/1.0/&gt; ;</code>
<code id="annotation-data-shape-must-L5">  as:object &lt;http://example.org/annotation&gt; .</code>
<code id="annotation-data-shape-must-L6">  as:target &lt;http://example.net/article#introduction&gt; .</code>
<code id="annotation-data-shape-must-L7"></code>
<code id="annotation-data-shape-must-L8">&lt;http://example.org/annotation&gt;</code>
<code id="annotation-data-shape-must-L9">  a oa:Annotation ;</code>
<code id="annotation-data-shape-must-L10">  oa:motivation oa:assessing .</code></pre>
                      </figure>

                      <ul>
                        <li>The subject URI of the <code>as:Announce</code> is not explicitly declared (<code>&lt;&gt;</code>) because eventually it will be parsed as the notification’s URL.</li>
                        <li>A valid <code>xsd:dateTime</code> is expected for <code>as:updated</code>.</li>
                        <li>CC0 1.0 Universal license is expected.</li>
                        <li>The value of <code>as:object</code> is the primary object of the announce, ie. the annotation.</li>
                        <li>The value of <code>as:target</code> is the target of the announce, ie. the annotated object.</li>
                        <li><code>oa:Annotation</code> to indicate that the primary object is an annotation.</li>
                        <li><code>oa:motivation</code> for the motivation of the annotation eg. assessment, a peer review.</li>
                      </ul>
                    </dd>

                    <dd id="annotation-data-shape-should" property="schema:description">
                      <p><code>SHOULD</code> include:</p>
                      <figure class="listing">
                        <pre><code>&lt;&gt;</code>
<code>  as:actor &lt;http://csarven.ca/#i&gt; .</code>
<code></code>
<code>&lt;http://example.org/annotation&gt;</code>
<code>  schema:license &lt;https://creativecommons.org/licenses/by/4.0/&gt; .</code></pre>
                      </figure>

                      <ul>
                        <li><code>as:actor</code> is the URI of the agent that sent the notification. Normally a person, as opposed to software.</li>
                        <li>URI of an open/free culture license on the annotation is expected.</li>
                      </ul>

                      <div class="note">
                        <h4>Note</h4>
                        <div>
                          <p>The property for the license would normally match that of what is in the article, hence it is not enforced here. Senders may want to use eg. <cite><a href="http://schema.org/license">schema:license</a></cite>, <cite><a href="http://purl.org/dc/terms/license">dcterms:license</a></cite>, <cite><a href="http://creativecommons.org/ns#license">cc:license</a></cite>, <cite><a href="http://usefulinc.com/ns/doap#license">doap:license</a></cite>.</p>
                        </div>
                      </div>
                    </dd>
                  </dl>

                  <dl id="citation-data-shape" rel="schema:hasPart" resource="citation-data-shape">
                    <dt property="schema:name">Citation data shape</dt>
                    <dd id="citation-data-shape-must" property="schema:description">
                      <p><code>MUST</code> include:</p>
                      <figure class="listing">
                        <pre><code id="citation-data-shape-must-L1">&lt;http://example.org/article#argument&gt;</code>
<code id="citation-data-shape-must-L2">  cito:citesAsEvidence &lt;http://example.net/observation#results&gt; .</code></pre>
                      </figure>

                      <ul>
                        <li>Inherit <a href="#article-data-shape-must">article data shape</a>’s <code>MUST</code>s with the exception that the citing entity, eg. <samp>http://example.org/article#argument</samp> can be an instance of any class.</li>
                        <li>The <q cite="http://purl.org/spar/cito/cites">citing entity cites the cited entity</q> in a specific or general way eg. <code>cito:citesAsEvidence</code>, <code>schema:citation</code>.</li>
                      </ul>

                      <div class="note">
                        <h4>Note</h4>
                        <div>
                          <p>In order to foster better discovery, senders may want to use terms from the <cite><a href="http://purl.org/spar/cito/">Citation Typing Ontology</a></cite> (<abbr title="Citation Typing Ontology">CiTO</abbr>) or <cite>schema.org</cite>’s <cite><a href="http://schema.org/citation">citation</a></cite> property. Alternative citation properties are only permitted if they are mentioned in this section.</p>
                        </div>
                      </div>
                    </dd>

                    <dd id="citation-data-shape-should" property="schema:description">
                      <p><code>SHOULD</code> include:</p>
                      <ul>
                        <li>Inherit <a href="#article-data-shape-should">article data shape</a>’s <code>SHOULD</code>s.</li>
                      </ul>
                    </dd>
                  </dl>
                </div>
              </section>

              <section id="sending-notifications" rel="schema:hasPart" resource="sending-notifications">
                <h3 property="schema:name">Sending notifications</h3>
                <div property="schema:description">
                  <p>Notifications can be sent to LORC’s Inbox in different ways:</p>

                  <ul>
                    <li>A typical LDN <em>sender</em> discovers the inbox of a target resource, eg. this article, so that the inbox URL is not hardcoded in sender’s application. There are conforming <a href="https://linkedresearch.org/ldn/tests/summary#sender">LDN sender</a> applications which you can use to send notifications, or you are welcome to use your own.</li>

                    <li>Sending notifications directly into this article’s inbox (see the object of the <code>ldp:inbox</code> relation) is still welcome. For example, using <cite>curl</cite> it can be sent with <samp>curl -i -X POST -H'Content-Type: text/html' https://linkedresearch.org/inbox/linkedresearch.org/cloud/ --data-raw 'Replace this with your HTML+RDFa payload'</samp>. If the response is <code>HTTP/1.1 201 Created</code> you are good to go. The HTTP <code>Location</code> header value is where the notification can be dereferenced from. See more examples at <cite><a href="calls#web-first-call">Call for Linked Research</a></cite> and use LORC’s Inbox; <code>https://linkedresearch.org/inbox/linkedresearch.org/cloud/</code>, for the request URL.</li>

                    <li>If you are using tools like <cite><a href="https://dokie.li/">dokieli</a></cite>, notifications can be sent to LORC with the click of a button. To send a notification about the article, use the <q>Share</q> feature (from menu) and enter <code>https://linkedresearch.org/cloud</code> in the <q>To</q> field. Annotations and citations are soon to be automatic.</li>
                  </ul>
                </div>
              </section>
            </div>
          </section>

          <section id="faq" rel="schema:hasPart" resource="#faq">
            <h2>You have some questions, so here are some answers:</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <dl>
                <dt id="lod-cloud">What about the <cite><a href="http://lod-cloud.net/">LOD Cloud</a></cite>?</dt>
                <dd>LORC puts emphasis on a the scholarly domain with its own requirements. If the LOD Cloud wants to incorporate LORC, there are no constraints from this end.</dd>

                <dt id="related-work">How is it different than related projects?</dt>
                <dd>You tell us 😉 LORC focuses on building the scholarly graph from the ground-level, ie. individuals, groups or labs taking the initiative. LORC is aimed to be composed of mentions of original Linked Data resources available in full and free of charge. For example, metadata of an article, citations of content with restricted access, or simply desktop/print-centric resources, would not qualify. Hence, if the works are not available in the wild or part of the commons, then they do not exist as far as LORC is concerned.</dd>

                <dt id="data-license">What is the license of the visualisation?</dt>
                <dd>The LORC visualisation uses the <a href="https://creativecommons.org/publicdomain/zero/1.0/">CC0 1.0 Universal</a> license.</dd>

                <dt id="notification-integrity">Will notifications be modified?</dt>
                <dd>We have no reason to alter a notification as long as it meets the requirements of a <a href="#notification-data-shape">notification data shape</a>.</dd>

                <dt id="data-access">How do you verify if a resource is accessible or free of charge?</dt>
                <dd>At this time, there is no automatic verification system to check this criteria. However, if we find out that it does not meet the criteria, it will be removed.</dd>

                <dt id="data-quality">What can you say about data quality?</dt>
                <dd>Notifications are just what they say they are. What matters are the resources the notifications refer to. If for example a citation notification does not exist at source (or never intended to), the notification will be eventually removed. <q>Anyone can say anything about anything</q>: consumers of the notifications are encouraged to verify the claims in the notifications for themselves.</dd>

                <dt id="centralised-decentralised">Isn’t LORC a form of centralisation?</dt>
                <dd>Of course it is. This is also a tangible solution, if anything, an experiment to understand the boundaries of what is possible. LORC should be seen as an instance of a service where it collects scholarly notifications. Scholarly communities are encouraged to create their own instances. We can talk about federation and distribution when we get there. If you have ideas on how to <q>decentralise</q> and do all this better, voice yourself and roll up your sleeves.</dd>

                <dt id="contact">Can I say, ask or do something?</dt>
                <dd>You are invited to join the public <a href="https://gitter.im/linkedresearch/chat">chat</a> or raise an <a href="https://github.com/linkedresearch/linkedresearch.org/">issue</a>.</dd>
              </dl>
            </div>
          </section>
        </div>
      </article>
    </main>
<? include 'end.php'; ?>
