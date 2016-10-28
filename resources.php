<? $title = "Linked Research resources"; ?>
<? include 'top.php'; ?>
        <main>
            <article about="" typeof="schema:Article">
                <? include 'header-small.php'; ?>
                <div datatype="rdf:HTML" id="content" property="schema:description">
                    <section id="resources" rel="schema:hasPart" resource="#resources">
                        <h2 property="schema:name">Resources and tools</h2>
                        <div datatype="rdf:HTML" property="schema:description">
                            
                            <section id="authoring-tools" rel="schema:hasPart" resource="#authoring-tools">
                                <h2 property="schema:name">Authoring Tools</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li><a href="https://dokie.li">dokieli</a>: A decentralised semantic document editor.</li>
                                    </ul>
                                </div>
                            </section>

                            <section id="reviews-and-annotation" rel="schema:hasPart" resource="#reviews-and-annotation">
                                <h2 property="schema:name">Reviews and Annotation</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li><a href="https://dokie.li">dokieli</a>: decentralised marginalia annotations.</li>
                                        <li><a href="https://hypothes.is">Hypothesis</a></li>
                                    </ul>
                                </div>
                            </section>

                            <section id="self-publishing-and-archiving" rel="schema:hasPart" resource="#self-publishing-and-archiving">
                                <h2 property="schema:name">Self-publishing and archiving</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li><a href="https://solid.mit.edu">Solid</a>: Decentralised personal data storage.</li>
                                        <li><a href="http://www.w3.org/TR/ldp/">Linked Data Platform</a>: A W3C standard for RESTful read-write Linked Data resources.</li>
                                        <li>TODO: a guide to publishing on your institutions hosting</li>
                                        <li>arxiv</li>
                                        <li>SciHub</li>
                                    </ul>
                                </div>
                            </section>                        

                            <section id="converting-to-web-friendly-formats" rel="schema:hasPart" resource="#converting-to-web-friendly-formats">
                                <h2 property="schema:name">Converting to Web-friendly formats</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li>RASH Converter</li>
                                    </ul>
                                </div>
                            </section>

                            <section id="semantic-markup-and-ontologies" rel="schema:hasPart" resource="#semantic-markup-and-ontologies">
                                <h2 property="schema:name">Semantic markup and ontologies</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li>CiTO</li>
                                        <li>Dataset things</li>
                                    </ul>
                                </div>
                            </section>

                            <section id="interactions-and-notifications" rel="schema:hasPart" resource="#interactions-and-notifications">
                                <h2 property="schema:name">Interactions and notifications</h2>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <ul>
                                        <li><a href="https://dokie.li">dokieli</a>: sharing and sending of notifications to document authors about interactions.</li>
                                        <li><a href="https://linkedresearch.org/ldn/">Linked Data Notifications (LDN)</a>: A W3C standard for  notifications in RDF.</li>
                                        <li><a href="https://webmention.net">Webmention</a>: A W3C standard for notifying of links between documents.</li>
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