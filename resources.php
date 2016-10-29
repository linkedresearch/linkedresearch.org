<? $title = "Linked Research resources"; ?>
<? include 'top.php'; ?>
        <main>
            <article about="" typeof="schema:Article">
                <? include 'header-small.php'; ?>
                <div datatype="rdf:HTML" id="content" property="schema:description">
                    <section id="resources" rel="schema:hasPart" resource="#resources">
                        <h2 property="schema:name">Resources and tools</h2>
                        <div datatype="rdf:HTML" property="schema:description">
                            <p>Please make <a href="https://github.com/linkedresearch/linkedresearch.org/">pull requests</a> or <a href="http://linkedresearch.org/#join-in">join the chat</a> to make recommendations and updates to this document.</p>

                            <section id="authoring-tools" rel="schema:hasPart" resource="#authoring-tools">
                                <h2 property="schema:name">Authoring Tools</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li><a href="https://dokie.li/">dokieli</a>: a clientside editor for decentralised article publishing, annotations and social interactions</li>
                                    </ul>
                                </div>
                            </section>

                            <section id="reviews-and-annotation" rel="schema:hasPart" resource="#reviews-and-annotation">
                                <h2 property="schema:name">Reviews and Annotation</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li><a href="https://dokie.li/">dokieli</a>: decentralised annotations (replies, peer-reviews, liking, resharing, bookmarking); allows annotations to be optionally stored at presonal storage, assigning Creative Commons license to contributions, granular semantics and identifiers. Uses <a href="https://www.w3.org/TR/annotation-model/">W3C Web Annotation Model</a> and sends <a href="https://www.w3.org/TR/ldn/">W3C Linked Data Notifications</a>.</li>
                                        <li><a href="https://hypothes.is/">Hypothesis</a></li>
                                    </ul>
                                </div>
                            </section>

                            <section id="self-publishing-and-archiving" rel="schema:hasPart" resource="#self-publishing-and-archiving">
                                <h2 property="schema:name">Self-publishing and archiving</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li><a href="https://solid.mit.edu">Solid</a>: Decentralised personal data storage.</li>
                                        <li><a href="http://www.w3.org/TR/ldp/">Linked Data Platform</a>: A W3C standard for RESTful read-write Linked Data resources.</li>
                                        <li><a href="https://arxiv.org/">arXiv.org e-Print archive</a></li>
                                        <li><a href="https://archive.org/">Internet Archive</a></li>
                                        <li>TODO: a guide to publishing on your institutions hosting</li>
                                    </ul>
                                </div>
                            </section>                        

                            <section id="converting-to-web-friendly-formats" rel="schema:hasPart" resource="#converting-to-web-friendly-formats">
                                <h2 property="schema:name">Converting to Web-friendly formats</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li><a href="https://github.com/smarr/latex-to-html5">LaTeX to HTML5</a></li>
                                        <li><a href="https://github.com/tetherless-world/markdown-rdfa">Markdown to RDFa</a> (Python extension)</li>
                                        <li><a href="http://pandoc.org/">Pandoc</a> (universal document converter)</li>
                                        <li><a href="https://github.com/essepuntato/rash">RASH</a> / <a href="http://dasplab.cs.unibo.it/rocs">ROCS</a></li>
                                    </ul>
                                </div>
                            </section>

                            <section id="semantic-markup-and-ontologies" rel="schema:hasPart" resource="#semantic-markup-and-ontologies">
                                <h2 property="schema:name">Semantic markup and ontologies</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li>General-purpose: <a href="https://schema.org/">schema.org</a></li>
                                        <li>Publishing and referencing: <a href="http://purl.org/spar">SPAR Ontologies</a></li>
                                        <li>Annotations: <a href="http://www.w3.org/ns/oa">Web Annotations</a></li>
                                        <li>Notifications: <a href="http://www.w3.org/ns/ldp">Linked Data Platform (Inbox)</a></li>
                                        <li>Social notifications: <a href="http://www.w3.org/ns/activitystreams">ActivityStreams</a> and <a href="http://purl.org/net/pingback/">Pingback</a></li>
                                        <li>Links to personal storage and user preferences: <a href="http://www.w3.org/ns/ldp">LDP</a> and <a href="https://github.com/solid/vocab">Solid</a></li>
                                        <li>Access control: <a href="https://www.w3.org/wiki/WebAccessControl">WebAccessControl</a>/<a href="http://www.w3.org/ns/auth/acl">ACL</a></li>
                                    </ul>
                                </div>
                            </section>

                            <section id="interactions-and-notifications" rel="schema:hasPart" resource="#interactions-and-notifications">
                                <h2 property="schema:name">Interactions and notifications</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li><a href="https://dokie.li/">dokieli</a>: sharing and sending of notifications to document authors about interactions.</li>
                                        <li><a href="https://linkedresearch.org/ldn/">Linked Data Notifications (LDN)</a>: A W3C standard for notifications in RDF.</li>
                                        <li><a href="https://webmention.net/">Webmention</a>: A W3C standard for notifying mentions between documents.</li>
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