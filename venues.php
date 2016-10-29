<? $title = "Linked Research venues"; ?>
<? include 'top.php'; ?>
        <main>
            <article about="" typeof="schema:Article">
                <? include 'header-small.php'; ?>
                <div datatype="rdf:HTML" id="content" property="schema:description">
                    <section id="venues" rel="schema:hasPart" resource="#venues">
                        <h2 property="schema:name">Venues</h2>
                        <div datatype="rdf:HTML" property="schema:description">
                            <p>Here we maintain a list of academic publication venues which have a positive attitude towards one or more Linked Research princples.</p>

                            <section id="conferences-and-workshops" rel="schema:hasPart" resource="#conferences-and-workshops">
                                <h3 property="schema:name">Conferences and workshops</h3>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <h4>Name</h4>
                                    <p><em>Year(s), discipline</em></p>
                                    <p>Short summary description of good stuff, ie. open access, open reviews, accepts HTML submissions.</p>
                                </div>
                            </section>

                            <section id="journals" rel="schema:hasPart" resource="#journals">
                                <h3 property="schema:name">Journals</h3>
                                <div datatype="rdf:HTML" property="schema:description">
                                    <h4>Name</h4>
                                    <p><em>Year(s), discipline</em></p>
                                    <p>Short summary description of good stuff, ie. open access, requires data to be published openly, open reviews, accepts HTML submissions.</p>
                                </div>
                            </section>
                        </div>
                    </section>

                    <section id="publishers" rel="schema:hasPart" resource="#publishers">
                        <h2 property="schema:name">Publishers</h2>
                        <div datatype="rdf:HTML" property="schema:description">
                            <p>With Linked Research, anyone can be a publisher. Here we list centralised academic publishers or publishing services which make research work available according to some of the Linked Research principles, as well as individuals who publish their work in their own space.</p>
                        </div>
                    </section>
                </div>
            </article>
        </main>
<? include 'end.php'; ?>