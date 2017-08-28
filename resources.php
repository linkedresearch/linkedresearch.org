<? $title = "Linked Research resources"; ?>
<? include 'top.php'; ?>
    <main>
      <article about="" typeof="schema:Article">
        <h1 property="schema:name"><?=$title;?></h1>
        <div datatype="rdf:HTML" id="content" property="schema:description">
          <section id="resources" rel="schema:hasPart" resource="#resources">
            <h2 property="schema:name">Resources and tools</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p>Please make <a href="https://github.com/linkedresearch/linkedresearch.org/">pull requests</a> or <a href="http://linkedresearch.org/#join-in">join the chat</a> to make recommendations and updates to this document. The list here in essence <em>SHOULD</em> conform with open standards, free and open access. See also <a href="http://csarven.ca/linked-research-scholarly-communication#user-stories-assumption">acid test assumptions</a>.</p>

              <section id="best-practices" rel="schema:hasPart" resource="#best-practices">
                <h2 property="schema:name">Best practices</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li><a href="https://www.w3.org/TR/dwbp/">Data on the Web Best Practices</a></li>
                  </ul>
                </div>
              </section>

              <section id="authoring-tools" rel="schema:hasPart" resource="#authoring-tools">
                <h2 property="schema:name">Authoring Tools</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li><a href="https://dokie.li/">dokieli</a>: a clientside editor for decentralised article publishing, annotations and social interactions.</li>
                    <li><a href="http://etherpad.org/">etherpad</a>: a highly customizable Open Source online editor providing collaborative editing in really real-time.</li>
                    <li><a href="https://www.fiduswriter.org/">Fidus Writer</a>: collaborative academic writing.</li>
                    <li><a href="http://substance.io/">Substance</a>: A JavaScript library for web-based content editing.</li>
                  </ul>
                </div>
              </section>

              <section id="reviews-and-annotation" rel="schema:hasPart" resource="#reviews-and-annotation">
                <h2 property="schema:name">Reviews and Annotation</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li><a href="https://dokie.li/">dokieli</a>: decentralised annotations (replies, peer-reviews, liking, resharing, bookmarking); allows annotations to be optionally stored at personal storage, assigning Creative Commons license to contributions, granular semantics and identifiers. Uses <a href="https://www.w3.org/TR/annotation-model/">W3C Web Annotation Model</a> and sends <a href="https://www.w3.org/TR/ldn/">W3C Linked Data Notifications</a>.</li>
                    <li><a href="https://hypothes.is/">Hypothesis</a></li>
                  </ul>
                </div>
              </section>

              <section id="self-publishing" rel="schema:hasPart" resource="#self-publishing">
                <h2 property="schema:name">Self-publishing</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li><a href="https://solid.mit.edu/">Solid</a>: Decentralised personal data storage.</li>
                    <li><a href="http://www.w3.org/TR/ldp/">Linked Data Platform</a>: A W3C standard for RESTful read-write Linked Data resources. There are <a href="https://www.w3.org/wiki/LDP_Implementations">LDP implementations</a> for different environments and tool stacks.</li>
                  </ul>
                </div>
              </section>

              <section id="repositories-and-archives" rel="schema:hasPart" resource="#repositories-and-archives">
                <h2 property="schema:name">Repositories and archives</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li><a href="https://arxiv.org/">arXiv.org e-Print archive</a></li>
                    <li><a href="https://archive.org/web/">Internet Archive</a></li>
                    <li><a href="https://zenodo.org/">Zenodo</a> (research data repository)</li>
                  </ul>
                </div>
              </section>

              <section id="interactions-and-notifications" rel="schema:hasPart" resource="#interactions-and-notifications">
                <h2 property="schema:name">Interactions and notifications</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li><a href="https://dokie.li/">dokieli</a>: sharing and sending of notifications to document authors about interactions (e.g., reviews, citations).</li>
                    <li><a href="https://linkedresearch.org/ldn/">Linked Data Notifications (LDN)</a>: A W3C standard for notifications in RDF.</li>
                  </ul>
                </div>
              </section>

              <section id="rights-and-license" rel="schema:hasPart" resource="#rights-and-license">
                <h2 property="schema:name">Rights and licence</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li><a href="http://dublincore.org/">Dublin Core Metadata Initiative</a></li>
                    <li><a href="https://creativecommons.org/licenses/">Creative Commons licenses</a></li>
                    <li><a href="https://www.apache.org/licenses/">Apache</a></li>
                    <li><a href="https://www.gnu.org/licenses/gpl-faq.html">GNU General Public License</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/MIT_License">MIT License</a></li>
                  </ul>

                  <p>See more at <a href="https://en.wikipedia.org/wiki/Free_software_license">free software licenses</a> (and <a href="https://en.wikipedia.org/wiki/Comparison_of_free_and_open-source_software_licenses">comparisons</a>)</p>
                </div>
              </section>

              <section id="vocabularies-and-ontologies" rel="schema:hasPart" resource="#vocabularies-and-ontologies">
                <h2 property="schema:name">Vocabularies and ontologies</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li>General-purpose: <a href="http://schema.org/">schema.org</a>, <a href="http://purl.org/dc/terms/"></a></li>
                    <li>Publishing and referencing: <a href="http://purl.org/ontology/bibo/">Bibliographic Ontology Specification</a>, <a href="http://purl.org/spar">SPAR Ontologies</a></li>
                    <li>Annotations: <a href="http://www.w3.org/ns/oa">Web Annotations</a></li>
                    <li>Inbox for notifications: <a href="http://www.w3.org/ns/ldp">Linked Data Notifications</a> (ldp:inbox, ldp:contains)</li>
                    <li>Social notifications: <a href="http://www.w3.org/ns/activitystreams">ActivityStreams</a>, <a href="http://purl.org/net/pingback/">Pingback</a></li>
                    <li>Links to personal storage and user preferences: <a href="http://www.w3.org/ns/ldp">LDP</a> and <a href="https://github.com/solid/vocab">Solid</a></li>
                    <li>Access control: <a href="https://www.w3.org/wiki/WebAccessControl">WebAccessControl</a>, <a href="http://www.w3.org/ns/auth/acl">ACL</a></li>
                    <li>Provenance: <a href="http://www.w3.org/ns/prov">PROV Ontology</a></li>
                    <li>Rights and License: <a href="http://creativecommons.org/ns">Creative Commons</a></li>
                    <li>Multi-dimensional data: <a href="https://www.w3.org/TR/vocab-data-cube/">RDF Data Cube vocabulary</a></li>
                    <li>Dataset metadata: <a href="http://rdf-vocabulary.ddialliance.org/discovery.html">DDI-RDF Discovery Vocabulary</a> (Disco)</li>
                    <li>Life Sciences: <a href="http://www.ontobee.org/">Ontobee</a></li>
                    <li>Design Lifecycle: <a href="https://w3id.org/dio">Design Intent Ontology</a></li>
                    <li>Workflow-centric Research Objects: <a href="https://w3id.org/ro/">Wf4Ever Research Object Model</a></li>
                  </ul>

                  <p>This is not meant to be a complete list. See also the <a href="http://lov.okfn.org/dataset/lov/">Linked Open Vocabularies</a>.</p>
                </div>
              </section>

              <section id="converting-to-web-friendly-formats" rel="schema:hasPart" resource="#converting-to-web-friendly-formats">
                <h2 property="schema:name">Converting to Web-friendly formats</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li><a href="https://github.com/smarr/latex-to-html5">LaTeX to HTML5</a></li>
                    <li><a href="https://github.com/tetherless-world/markdown-rdfa">Markdown to RDFa</a> (Python extension)</li>
                    <li><a href="http://pandoc.org/">Pandoc</a> (universal document converter)</li>
                    <li><a href="https://github.com/essepuntato/rash">RASH</a>, <a href="http://dasplab.cs.unibo.it/rocs">ROCS</a></li>
                    <li><a href="https://github.com/pietercolpaert/jekyll-refs">jekyll-refs</a> (bibliography references in RDFa using CiTO and BIBO ontologies</li>
                  </ul>
                </div>
              </section>

              <section id="various-tools" rel="schema:hasPart" resource="#various-tools">
                <h2 property="schema:name">Various tools</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li>Various <a href="https://docs.google.com/spreadsheets/d/1KUMSeq_Pzp4KveZ7pb5rddcssk1XBTiLHniD0d3nDqo/edit#gid=1519702055">tools and innovations in scholarly communication</a></li>
                  </ul>
                </div>
              </section>

              <section id="collaboration-tools" rel="schema:hasPart" resource="#collaboration-tools">
                <h2 property="schema:name">Collaboration tools</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li>..</li>
                  </ul>
                </div>
              </section>

              <section id="finding-linking-and-reuse" rel="schema:hasPart" resource="#finding-linking-and-reuse">
                <h2 property="schema:name">Finding, linking and reuse</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li>..</li>
                  </ul>
                </div>
              </section>

              <section id="activism-and-promotion" rel="schema:hasPart" resource="#activism-and-promotion">
                <h2 property="schema:name">Activism and promotion</h2>
                <div datatype="rdf:HTML" property="schema:description">
                  <ul>
                    <li>..</li>
                  </ul>
                </div>
              </section>
            </div>
          </section>
        </div>
      </article>
    </main>
<? include 'end.php'; ?>
