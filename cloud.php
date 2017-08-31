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
            <dd><time content="2017-08-30T00:00:00Z" datatype="xsd:dateTime" datetime="2017-08-30T00:00:00Z" property="schema:dateModified">2017-08-30</time></dd>
          </dl>

          <dl id="document-inbox">
            <dt>Notifications Inbox</dt>
            <dd><a href="https://linkedresearch.org/inbox/linkedresearch.org/cloud/" rel="ldp:inbox">inbox/</a></dd>
          </dl>

          <section id="abstract">
            <h2>Abstract</h2>
            <div datatype="rdf:HTML" property="schema:abstract">
              <p>The <dfn id="lorc">Linked Open Research Cloud</dfn> (<abbr title="Linked Open Research Cloud">LORC</abbr>) is an initiative to increase the visibility of <cite>free culture</cite> resources about scholarly communication on the Web. It accepts and serves notifications about scholarly activities, and generates a graph.</p>
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
                <script>document.addEventListener('DOMContentLoaded', function(){ DO.U.showInboxGraph(null, '#linked-open-research-cloud', null); });</script>
                <figcaption property="schema:name">Linked Open Research Cloud</figcaption>
              </figure>

              <div class="note">
                <h4>Note</h4>
                <div>
                  <p>We are just starting out here. Making the LORC look comprehensible is an ongoing work. If you would like to make your ideas tangible, please get involved!</p>
                </div>
              </div>
            </div>
          </section>

          <section id="about" rel="schema:hasPart" resource="#about">
            <h2 property="schema:name">About</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p>This article has an inbox to receive <cite><a href="https://www.w3.org/TR/ldn/">Linked Data Notifications</a></cite> (<abbr title="Linked Data Notifications">LDN</abbr>) about scholarly activities, eg. publication of scholarly articles (in any status), <cite><a href="https://www.w3.org/TR/annotation-model">Web Annotation</a></cite> (like peer reviews, replies), citations, call for contributions, scientific observations, workflows, funding information etc. Practically anything along the lines of the Linked Research <a href="rfc#challenges">challenges</a>. The notifications refer to actual works which are expected to follow the <cite><a about="" href="https://www.w3.org/DesignIssues/LinkedData" rel="cito:givesSupportTo">Linked Data design principles</a></cite>. <strong>Only mentions about complete works and activities that are free and open are welcome</strong> for inclusion in the graph. The notifications are used towards constructing the <q>cloud</q>.</p>

              <h3 id="what-are-notifications">What are notifications?</h3>
              <p>LDN notifications tend to be information snippets about some object or activity. The notifications are Linked Data resources, so they can be discovered and consumed by applications which comply with that stack of Web technologies. Currently the diagram is dynamically constructed (although user-agents may cache it) on the client-side with JavaScript. Notifications only <em>refer</em> to complete works and activities rather than collecting them. There is no automatic verification system to determine whether an object contains the full article for instance, but if it does not and we find out, we will remove it 😉. Stored notifications can be discovered and accessed from the inbox (via <code>ldp:contains</code>). Each notification will have a dereferenceable HTTP URL.</p>

              <h3 id="notification-payload">What do notifications contain?</h3>
              <p>A notification's payload can be in HTML+RDFa, JSON-LD, or Turtle. Besides whatever is announced in the notification (like something cited something) we recommend that they use the Creative Commons license, include the senders profile URI, and a datestamp. Reminder that the license you use determines how it can be reused or remixed by consumers.</p>

              <div class="note">
                <h4>Note</h4>
                <div>
                  <p>We will release a notifications data shape so that you know exactly what can be sent, as well as help us to verify your notification.</p>
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

              <h3 id="faq">You have some questions, so here are some answers:</h3>
              <dl>
                <dt id="lod-cloud">What about the <cite><a href="http://lod-cloud.net/">LOD Cloud</a></cite>?</dt>
                <dd>LORC is only meant to put emphasis on a the scholarly domain with its own requirements. If the LOD Cloud wants to incorporate LORC, there are no constraints from this end.</dd>

                <dt id="related-work">What about all those other related initiatives?</dt>
                <dd>What about them? What is their coverage and are they referring to publicly accessible things? LORC focuses on building the graph from the ground-level, ie. individuals, groups or labs taking the initiative to build the <q>Web We Want</q>. It is <em>not</em> collecting or processing second-hand datadumps. We are strictly not interested in <q>metadata</q> aggregates or anything that is not initially meant to have <em>universal access</em> on the Web. If the original work and activities in full are not out in the wild or part of the <q>commons</q>, then they do not exist as far as LORC is concerned.</dd>

                <dt id="data-license">What's the license on the graph and notifications?</dt>
                <dd>The LORC graph is <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a>. Notifications have their own license - whatever assigned by the sender. Notification payloads without a license will be assigned with <a href="https://creativecommons.org/publicdomain/zero/1.0/">CC0 1.0 Universal</a> license.</dd>

                <dt id="integrity-and-persistence">Notification integrity and persistence</dt>
                <dd>We promise not to alter the notification payload. We will remove notifications that do not meet the payload criteria.</dd>

                <dt id="contact">Can I say, ask or do something?</dt>
                <dd>You are invited to join the public <a href="https://gitter.im/linkedresearch/chat">chat</a> or raise an <a href="https://github.com/linkedresearch/linkedresearch.org/">issue</a> to be part of the party.</dd>
              </dl>
            </div>
          </section>
        </div>
      </article>
    </main>
<? include 'end.php'; ?>
