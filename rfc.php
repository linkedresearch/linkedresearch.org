<?php $title = "RFC - Linked Research"; ?>
<?php include 'top.php'; ?>
    <main>
      <article about="" typeof="schema:Article">
        <h1 property="schema:name"><?=$title;?></h1>
        <div datatype="rdf:HTML" id="content" property="schema:description">
          <dl id="document-published">
            <dt>Published</dt>
            <dd><time content="2017-07-04T00:00:00Z" datatype="xsd:dateTime" datetime="2017-07-04T00:00:00Z" property="schema:datePublished">2017-07-04</time></dd>
          </dl>

          <dl id="document-modified">
            <dt>Modified</dt>
            <dd><time content="2017-07-12T00:00:00Z" datatype="xsd:dateTime" datetime="2017-07-12T00:00:00Z" property="schema:dateModified">2017-07-12</time></dd>
          </dl>

          <dl id="document-inbox">
            <dt>Notifications Inbox</dt>
            <dd><a href="https://linkedresearch.org/inbox/linkedresearch.org/rfc/" rel="ldp:inbox">inbox/</a></dd>
          </dl>

          <section id="document-status" rel="schema:hasPart" resource="#document-status">
            <h2 about="#document-status" property="schema:name" typeof="bibo:DocumentStatus">Document Status</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p>Draft.</p>
            </div>
          </section>

          <section id="abstract">
            <h2>Abstract</h2>
            <div datatype="rdf:HTML" property="schema:abstract">
              <p>Linked Research is a conceptual framework that describes how implementations in scholarly communication can interoperate. Its philosophy is influenced by the social machinery to build a knowledge Web for humans, machines, and anything in between.</p>
            </div>
          </section>

          <section id="keywords">
            <h2>Keywords</h2>
            <div>
              <ul rel="schema:about">
                <li><a href="https://en.wikipedia.org/wiki/Human-computer_interaction" resource="http://dbpedia.org/resource/Human-computer_interaction">Human-computer interaction</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Linked_Data" resource="http://dbpedia.org/resource/Linked_Data">Linked Data</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Semantic_publishing" resource="http://dbpedia.org/resource/Semantic_publishing">Semantic publishing</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Social_machine" resource="http://dbpedia.org/resource/Social_machine">Social machine</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Social_web" resource="http://dbpedia.org/resource/Social_web">Social web</a></li>
              </ul>
            </div>
          </section>


          <section id="freedom-of-expression" rel="schema:hasPart" resource="#freedom-of-expression">
            <h2 property="schema:name">Freedom of Expression</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p>.</p>
            </div>
          </section>

          <section id="free-culture" rel="schema:hasPart" resource="#free-culture">
            <h2 property="schema:name">Free Culture</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p>Works are made available to the commons.</p>
            </div>
          </section>

          <section id="acid-test" rel="schema:hasPart" resource="#acid-test">
            <h2 propert="schema:name">Acid Test</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <dl>
                <dt>Derived from</dt>
                <dd><a rel="prov:wasDerivedFrom" href="http://csarven.ca/linked-research-scholarly-communication">http://csarven.ca/linked-research-scholarly-communication</a></dd>
              </dl>

              <p>The acid test assumptions may be used to assess the accessibility and interoperability of tooling and services in scholarly communication.</p>

              <dl id="acid-test-assumptions">
                <dt>Assumptions</dt>
                <dd>
                  <ul>
                    <li id="acid-test-assumptions-open-standards" rel="schema:hasPart"><span property="schema:description" about="#acid-test-assumptions-open-standards" typeof="doco:Sentence">All interactions conform with open standards, with 1) no dependency on proprietary APIs, protocols, or formats, and 2) no commercial dependency or priori relationship between the groups using the workflows and tools involved.</span></li>

                    <li id="acid-test-assumptions-publishing" rel="schema:hasPart"><span property="schema:description" about="#acid-test-assumptions-publishing" typeof="doco:Sentence">Any mechanisms are available through at least two independent interoperable tool stacks.</span></li>

                    <li id="acid-test-assumptions-free-and-open-access" rel="schema:hasPart"><span property="schema:description" about="#acid-test-assumptions-free-and-open-access" typeof="doco:Sentence">Information and interactions are available for free and open access with suitable licensing and attribution for retrieval and reuse.</span></li>

                    <li id="acid-test-assumptions-human-and-machine-readable" rel="schema:hasPart"><span property="schema:description" about="#acid-test-assumptions-human-and-machine-readable" typeof="doco:Sentence">Information is both human and machine-readable.</span></li>

                    <li id="acid-test-assumptions-prior-knowledge" rel="schema:hasPart"><span property="schema:description" about="#acid-test-assumptions-prior-knowledge" typeof="doco:Sentence">All interactions are possible without prior out-of-band knowledge of the user’s environment or configuration.</span></li>
                  </ul>
                  <span rel="schema:hasPart"><span content="There is no spoon." property="schema:description" resource="#acid-test-assumptions-no-spoon" typeof="doco:Sentence"></span></span>
                </dd>
              </dl>

              <aside id="challenges" rel="rdfs:seeAlso" resource="#challenges">
                <h3>Challenges</h3>
                <div datatype="rdf:HTML" property="schema:description">
                  <p>Example challenges to meet with the <a rel="rdfs:seeAlso" href="#acid-test-assumptions">acid test assumptions</a> in place:</p>

                  <ul>
                    <li id="challenge-availability" rel="schema:hasPart"><span property="schema:description" about="#challenge-availability" typeof="doco:Sentence">Alexander makes his article available on the Web with the research objects available at fine granularity, e.g., variables of a hypothesis.</span></li>

                    <li id="challenge-reference" rel="schema:hasPart"><span property="schema:description" about="#challenge-reference" typeof="doco:Sentence">Beverly references and discusses Alexander’s research objects from her own research article, e.g., an argument against a methodological step.</span></li>

                    <li id="challenge-annotation" rel="schema:hasPart"><span property="schema:description" about="#challenge-annotation" typeof="doco:Sentence">Carol annotates Beverly’s argument on Alexander’s work by suggesting that it was misinterpreted, and stores the note publicly at her own personal content store.</span></li>

                    <li id="challenge-review" rel="schema:hasPart"><span property="schema:description" about="#challenge-review" typeof="doco:Sentence">Darmok and Eve write reviews for Beverly’s article and store them at their preferred locations respectively; Beverly is notified about the reviews.</span></li>

                    <li id="challenge-call-for-contributions" rel="schema:hasPart"><span property="schema:description" about="#challenge-call-for-contributions" typeof="doco:Sentence">Frank publicly announces a call for contributions for an academic conference. He specifies the scope of the call and desired qualities of the submissions.</span></li>

                    <li id="challenge-reply-to-call" rel="schema:hasPart"><span property="schema:description" about="#challenge-reply-to-call" typeof="doco:Sentence">Guinan notices Frank’s call for contributions to be suitable for her research article, and submits a link to her work. In her article, Guinan indicates that it was a reply to the call.</span></li>

                    <li id="challenge-peer-review" rel="schema:hasPart"><span property="schema:description" about="#challenge-peer-review" typeof="doco:Sentence">Frank assigns Herman, Inigo, and Jean-Luc to peer-review Guinan’s work. Herman and Inigo both write their reviews so that only Frank and Guinan may read them; meanwhile Jean-Luc makes his review public.</span></li>

                    <li id="challenge-proceedings" rel="schema:hasPart"><span property="schema:description" about="#challenge-proceedings" typeof="doco:Sentence">Keiko is assisting Frank, and compiles a list of articles which meet the requirements and standards of Frank’s call for contributions based on reviews and public feedback. She sends notifications to various institutions that the proceedings are ready to be archived.</span></li>

                    <li id="challenge-library" rel="schema:hasPart"><span property="schema:description" about="#challenge-library" typeof="doco:Sentence">Liz manages scholarly archiving at her institution; she retrieves and catalogues the articles which were mentioned for library indexing.</span></li>

                    <li id="challenge-interaction" rel="schema:hasPart"><span property="schema:description" about="#challenge-interaction" typeof="doco:Sentence">Marshall is a PhD student; he uses the interactive components in Beverly’s article by changing the parameters and rerunning an experiment and decides to expand on this for his own work.</span></li>

                    <li id="challenge-views" rel="schema:hasPart"><span property="schema:description" about="#challenge-views" typeof="doco:Sentence">Nelson reads Alexander’s article from his handheld device, and prints a single page summary.</span></li>

                    <li id="challenge-archives" rel="schema:hasPart"><span property="schema:description" about="#challenge-arhives" typeof="doco:Sentence">Ophelia notices the new index of articles in response to Frank’s call and selects the ones she is interested in for her personal collection of potential references.</span></li>

                    <li id="challenge-discovery" rel="schema:hasPart"><span property="schema:description" about="#challenge-discovery" typeof="doco:Sentence">Paris sees the peer-reviews about Guinan’s work and proceeds to discover further information about the qualifications and experience of the reviewers.</span></li>

                    <li id="challenge-personal-annotations" rel="schema:hasPart"><span property="schema:description" about="#challenge-personal-annotations" typeof="doco:Sentence">At Frank’s conference, Q listens to the presentations from the authors and makes personal notes about the work; he occasionally makes his observations visible to the authors or rest of the conference audience.</span></li>

                    <li id="challenge-forecast-fields" rel="schema:hasPart"><span property="schema:description" about="#challenge-forecast-fields" typeof="doco:Sentence">Rajiya aggregates all of the scholarly communication available in the last 5 years, and builds a visualisation to analyze research gaps. She then forecasts emerging fields.</span></li>

                    <li id="challenge-funding-opportunities" rel="schema:hasPart"><span property="schema:description" about="#challenge-funding-opportunities" typeof="doco:Sentence">Sahrahsahe builds a profile of her research lab, and runs a comparative analysis to check which funding opportunities that are applicable with good chances to obtain the grants.</span></li>

                    <li id="challenge-controversial-research" rel="schema:hasPart"><span property="schema:description" about="#challenge-controversial-research" typeof="doco:Sentence">Tabitha is interested in identifying research articles that generate controversial social activity, so she runs a filter for long running discussions with varying social reactions in a community query service.</span></li>
                  </ul>
              </aside>

            </div>
          </section>

          <section id="web-of-things" rel="schema:hasPart" resource="#web-of-things">
            <h2 property="schema:name">Web of Things</h2>
            <div datatype="rdf:HTML" property="schema:description">
            </div>
          </section>

          <section id="web-of-trust" rel="schema:hasPart" resource="#web-of-trust">
            <h2 property="schema:name">Web of Trust</h2>
            <div datatype="rdf:HTML" property="schema:description">
            </div>
          </section>

        </div>
      </article>
    </main>
<?php include 'end.php'; ?>
