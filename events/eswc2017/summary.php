<? $title = "Linked Research at ESWC 2017"; ?>
<? include '../../top.php'; ?>
    <main>
      <article about="" typeof="schema:Article">
        <h1 property="schema:name"><?=$title;?></h1>

        <div datatype="rdf:HTML" id="content" property="schema:description">
          <section id="edsc-summary" rel="schema:hasPart" resource="#edsc-summary">
            <h2 property="schema:name">Summary</h2>
            <div datatype="rdf:HTML" property="schema:description">
              <p>The first <em>Enabling Decentralised Scholarly Communication</em> (aka #LinkedResearch) workshop took place at the Extended Semantic Web Conference, on 29th May 2017, from 09:00 to 12:30. We had four pre-scheduled presentations, two ad-hoc lightning talks, and three discussion sessions, and the session attracted around 25 participants.</p>

              <p><img src="event-attendees.jpg" alt="A conference room full of chairs occupied by people" title="full house!" /></p>
            </div>
            </section>

          <section id="edsc-participants" rel="schema:hasPart" resource="#edsc-participants">
            <h2 property="schema:name">Participants</h2>
            <div datatype="rdf:HTML" property="schema:description">

              <ul>
              <li><strong>SC:</strong> Sarven Capadisli (chair)</li>
              <li><strong>AG:</strong> Amy Guy (chair)</li>
              <li><strong>DDR:</strong> Dave de Roure (chair, author)</li>
              <li><strong>RV:</strong> Ruben Verborgh (author)</li>
              <li><strong>EH:</strong> Ensar Hadziselimovic (author)</li>
              <li><strong>RT:</strong> Riccardo Tommasini (author)</li>
              <li><strong>JW:</strong> Johannes Wilm (author)</li>
              <li><strong>SK:</strong> Sabrina Kirrane</li>
              <li><strong>RTa:</strong> Ruben Taelman</li>
              <li><strong>AGa:</strong> Alexander Garcia</li>
              <li><strong>HvdS:</strong> Herbert van de Sompel</li>
              <li><strong>AT:</strong> Anna Tordai</li>
              <li><strong>ATh:</strong> Allan Third</li>
              <li><strong>FN:</strong> Finn Årup Nielsen</li>
              <li>A?: Astrid</li>
              <li>L?: Luis</li>
              <li>D?: Dennis</li>
              <li>M?: Martin</li>
              <li>K?: Karl</li>
              <li>... we didn't take names, so if you're missing <a href="https://github.com/linkedresearch/linkedresearch.org">PR to add yourself</a> or contact <a href="https://rhiaro.co.uk">rhiaro</a> or <a href="http://csarven.ca">csarven</a></li>
              </ul>

            </div>
            </section>

            <section id="edsc-transcript" rel="schema:hasPart" resource="#edsc-transcript">
              <h2 property="schema:name">Complete transcript of talks and discussions</h2>
              <div datatype="rdf:HTML" property="schema:description">

<p><strong>SC:</strong> one of the limitations we find with current events in the WebSci/SemWeb community is that there are limitations that need not be there, such as a max number of acceptances per event. We figured that why not just have an open ongoing call throughout the whole year, and we have period face-to-face meetings to exchange ideas. That way people can make their contributions, put it up on line, and it will get peer reviewed. They can decide which conference they want to present it at. So if they can't make it to one, and we hold an event at another, they can do it there. Don't have to wait a whole year round, it's on the Web and available. It's an ongoing call. We ask the contributors to make it a reply to the call. The theme of this is decentralisation, so we are asking what people would like to share. Along with that, we wanted to leave the format open for everyone. The main reason is that we want to let people express their contribution as best as they see fit. If they want to do it in PDF, video, HTML, interactivity, however that allows them to communicate and help others to learn. So they have the Web at their disposal, they can use it however they wish. Along with that of course the works have to be publicly accessible at a URL of their choice. Can be their homepage or university website or github, doesn't matter, the author's call. If they want their work to persist and be around long term, they need to make those sort of decisions. Related is the reviews. They are public, open, transparent, attributed, and the community can verify the reviews as well. All the contributions made to this workshop are all public and archived. At archive.org/archive.is, we have a copy of it. It's not perfect but it's a start.</p>

<p>LinkedResearch is the bigger picture. We have about 70 individuals who are willing to review in this way, in line with these ideas, for the ongoing call. It was optional, but if you want to notify us of your contribution, send us a notification.. We do not use easychair. We contacted individuals directly. I don't know if that scales.. but we established an open communication with individuals and helped them with the process. We knew this wasn't going to be a giant event, half a day. There's etherpad.. discussions later.. if you want to present a one minute/five minute share your ideas, there's a slot for it at the end (sign up below).</p>

<p>Each contributor who is going to present today, we'd like to hear what you thought of the process. How we can improve this, we can reuse this in the future.</p>

<h3>Scholarly Social Machines, David De Roure</h3>

<p>This workshop is about enabling.. the sense of enablement in my talk is not so much the technology, but more of a socio-technical perspective. I come up with a set of questions. Maybe some of those questions can prop discussion later.</p>

<p>Despite the publishing system being 350 years old, it feels like it hasn't changed much. Is it working, or is it really still fit for purpose. How will research be done in the future? How is what we have fit for this?</p>

<p>I've been reflecting on lack of progress. This essay is that reflection. Over the past few years. My theory is that somehow we are trapped in the machine that we are trying to change. Will start with social machines.</p>

<p>The perspective is knowledge infrastructure. It is fundamentally socio-technical. This room, workshop, conference.. all knowledge infrastructure. could be publishing, the web, technology, people. Social Machines give us a perspective onto that. You can have a whole definitional crisis about the meaning, but we can go back to the source of the term (Timbl in Weaving the Web). A good principle of empowerment, r<strong>ATh:</strong>er than machines replacing humans; humans do creative stuff. I like the extended version of this quote.. "new forms of social process". This is 1999. An anticipation of Web 2.0, Twitter.. notion of new social process, empowerment. Anyone can create a hashtag in Twitter which is a new social process. User generated content of Web 2.0, user generated behaviour.. the systems are socially constituted. If you're looking at the same system in different communities, different countries. Demonstrates it is socially constituted system - a social machine.</p>

<p>3-4 years ago, a project in the UK set out to study the theory and practice of social machines. It involves Southampton, Edinburgh and Oxford and is in its last year at the moment. It has an engineering emphasis, about understanding how these machines work and how to build better ones, r<strong>ATh:</strong>er than the lottery we have now. Plenty of failed ones out there. The notion of social machine is really useful.. the Web Science community is very good at doing case studies of small systems but at some point you have to step back and look for abstractions, theory, templates, patterns. SOCIAM has been looking for those. In a way it gives us methods for observing social machines. The work that's gone on with my team in oxford is particularly around this observation. Early on in our observing socialm achines part 1 paper, we talked about the need not to look at isolated machines but in combination, coupled within an ecoystem. We emphasised sociality very much. We were very worried that people working on social machines were emphsising the machine not the social. What is deeply social about these things? What methods do we use? We looked at how people are describing parts of machines. We made it more formal by using a technique from the digital humanities research world of prosopography. Telling stories about the machines. Likening social machines narratives from other narratives from other forms of literature. The narrative angle is very interesting. There are stories about social machines, social machines about stories... a social machine is a story. If we know what a good story is, does that help us know what a good social machine is?</p>

<p>Very much an ecosystem perspective. Early on one of the methods in the project was to go out into the jungle and classify social machines. Valid method.. and then lots of studies on specific machines, also valid. But we're interested in the ecosystem, and all the ways of observing the ecosystem. These things are coupled by the technologies, and the people who engage. People engage in multiple. New ideas and social machines catch one, some disappear, some change. Really the notion of the evolving ecosystem.</p>

<p>Now.. scholarly social machines.</p>

<p>Q: examples?</p>

<p>A: Wikipedia, Twitter, StackOverflow.. The software ecosystem eg github/lab, the music ones.</p>

<p>FORCE11.. Beyond the PDF event. Academics, librarians and publishers all coming together, looking at the future of scholarly communication. Some examples of scholarly-related social machines.</p>

<p>All the time there are new startups, new tools, websites, adding to this picture. And others are disappearing. Definitely an ecosystem, vibrant, vital.</p>

<p>I've recently been involved with meetings about planning research data in the UK. Same set of people.. the persona bout to write the report is the same person.. these people are sitting in the same places in the ecosystem.. evidence of lack of progress is that quite similar reports are piling up about this. I try to get people to think about software as well as data and articles. What happens is people are just thinking about data for the first time. I don't want to spoil it by distracting them with software. It's frustrating. THe new research methods aren't really being accommodated. Citizen science for example. Machine learning is changing the way citizen science is occurring. Training algorithms to be doing this for us. People still seem to talk about /science/ meaning everything is all the same.. open data is the same for everyone, open publishing is the same for everyone.. not recognising all the problems.</p>

<p>Meta observation: the way we go about changing this system is to write papers and give talks like this. We're using the system, which is flawed, to try to fix the system. Which is one way.. but we might want to discuss some fundamental constraints there. if our scholarly infrastructure is no longer fit for purpose, can we use it to change itself?</p>

<p>Not everyone wants it to change. existing business models.. in order to sustain existing models there is a force within the ecosystem to oppose this disintermediation. Is it revolution or evolution? We can discuss this later.</p>

<p>I think we got stuck inside the machine. We're writing articles about it, tweaking bits of the system, coming up with odds and ends that are different. We need to step outside the scholarly social machines ecosystem. Observing.</p>

<p>Maybe it's really hard for us to step outside the system we know the best. In a way this is an autoethnography.</p>

<p>Relaxing the constraint that social machines should be on the Web - looking back at historical social machines. Counted social machines in Story of the First Folio. That was one way of stepping back, but still scholarly.</p>
<p>Another totally different project about digital music objects. What we're doing here is.. this is music so it's completely different. Or is it? The traditional music production chain. What's happened really well in the music industry which is nearly digital end to end in the way that science isn't, si the empowerment .. it's not how it has to be, anyone can produce high quality music in their bedroom and tings are distributed, consumed and reused in different ways. That is a picture of the music ecosystem, but it's also a picture of the scholarly communication ecosystem.</p>
<p>The methodology in this project has been to talk about the different stages of the ecosystem, and the different participants. Using W3C PROV to store music.. When we did that, and using it in digital humanities projects in general. I thought it wasn't going to work. Actually it did work!</p>
<p>Finally.. Once we're outside and looking back in, what are the questions we need to ask?</p>
<ul>
  <li>Are we ready for real-time data coming into the research ecosystem?</li>
  <li>Can we embrace new research methods?</li>
  <li>Are our teams ready?</li>
  <li>Automation?</li>
  <li>What will become obsolete?</li>
  <li>How do we achive what we need to do?</li>
  <li>How are social machines useful?</li>
  <li>Where on the spectrum do we need to be between extreme decentralisation and current centralisation?</li>
</ul>

<h3>Discussion: Best practices for self-publishing scholarly metadata, led by Ruben Verborgh</h3>

<p><a href="https://github.com/RubenVerborgh/Linked-Research-ESWC2017">Background slides</a>.</p>

<p>questions on creating Linked Data</p>
<ul>
  <li>How do we select <em>what</em> to publish as RDF?</li>
  <li>What <em>kind</em> of data do we prioritize?</li>
  <li>What data belongs in a <em>FOAF profile</em>, and what data on a <em>webpage</em>?</li>
</ul>

<p>questions on modeling Linked Data</p>
<ul>
  <li>What <em>ontologies</em> should we use?</li>
  <li>Should we describe the same concepts using <em>multiple</em> ontologies?</li>
  <li>Should we use <em>generic</em> properties and classes or <em>specific</em> subprop  erties and subclasses?</li>
</ul>

<p>questions on Linked Data identifiers</p>
<ul>
  <li>Should we reuse identifiers, mint our own, or both?</li>
  <li>Should we publish data in named RDF graphs?</li>
</ul>

<p>questions on purpose</p>
<ul>
  <li>How will our Linked Data be used?</li>
</ul>

<p><strong>SK:</strong> You/ve done a lot more than me. I'm thinking about it but haven't done anything.. you went a little bit down the ontology route, which is the whole describe everything. And let's publish, and work out later what everyone is going to do with it. We already have these challenges in our community. What are the killer application/ That will drive what we should prioritise, how we should publish. Have you thought much about the applications?</p>
<p><strong>RV:</strong> interesting, good idea that we start working backwards from the applications. I stopped thinking at the querying. I want to enable federated queries. Trying to reduce the coupling between applications and precise data sources. This is where a lot of semantic web communities stop. We can do this and now people can build applications, but we don't actually go the extra mile.</p>
<p><strong>SK:</strong> It's like a catch-22.. make everything queryable then worry about the rest later. I'd really be interested in brainstorming about the applications. How to build a small community and grow it and use all your coauthors connections to entice them to do the same.</p>
<p><strong>RV:</strong> as usual it's a problem of incentives. Where are we challenged to build those apps? I'm organising the DeSemWeb workshop at ISWC where we explicitly ask for applications that do something cool with linked data. We need more challenges like this. We first need to show that it's plausible. It works out technologically, which i have. Now it's time to go beyond that.</p>
<p><strong>HvdS:</strong> What came to mind when you mentioned it were if this were standardised in some kind of way one could automatically generate like google does on the basis of wikipedia data. one could imagine doing stuff like that in a scholarly app which would automatically create such a fingerprint of a person on the basis of querying your page.</p>
<p><strong>RV:</strong> Everyone once in a while I like to rewatch Tim's TED talk on linked data.. just get the data out there. Not because there's immediate payoff, but because it feels useful. We need the apps definitely, but we do have a lot of data to make this happen. Chicken and egg. Do we still need more data or are we ready?</p>
<p><strong>SK:</strong> Both angles, same time.</p>
<p><strong>RV:</strong> Ten years ago in the community if you published 100k triples you got a main track paper. Not always the best research but we might need this. Incentives to publish good quality data.</p>
<p><strong>HvdS:</strong> Could you expose that pipeline as a service to others? We put html in our pages and your tooling grabs it?</p>
<p><strong>RV:</strong> That could be possible. For now the source code is out there, it's a bit custom, but should work. On the other hand, I can do it.. but I'd r<strong>ATh:</strong>er have other people do it themselves. I don't want to become another centralised entity.</p>
<p><strong>HvdS:</strong> just a tool. We all put our data in our own environments. Do we really all have to buid the same kind of toolkit? Could it be something that crawls my page and a dataset comes back.</p>
<p><strong>SC:</strong> It could be a bit of both. We can reuse stuff, but at the same time people that want to address their own immediate use cases or find ways to express themselves better. one of the motivations would be if you want others to discover your hypothesis, however you think is appropriate to expose that or identify it, it could be reused. If the individual doesn't find that valuable then they won't do it. His tooling may not cover everything there is to cover.</p>
<p><strong>HvdS:</strong> in this specific case, this is useful</p>
<p><strong>SK:</strong> Reuse has to come in there. My example is at home we have a filing system, a-z. I would put all the utilities under u. My husband says we're going to put it under esp because that's what it is.. different mental model about how we archive data. If we both expose data it/ll be completely different.. if you scale that out to everyone without providing some kind of guideance, workflow.. flexibility but..</p>
<p><strong>HvdS:</strong> which ontology, which identifiers. We could discuss that until the cows come home, ro we can just use what you created</p>
<p><strong>SK:</strong> We're not talking about only using yours, but if you/ve gone to the trouble and the pain we want to make sure that my stuff hooks up well with your stuff then it makes sense to reuse.</p>
<p><strong>RV:</strong> Thanks I've got homework.. I was very happy to be able to do what I wanted. I put the things that I wanted, I didn't think tha tother eople would want to reuse it. Just an example, but we can look at that..</p>
<p><strong>SK:</strong> People are lazy</p>
<p><strong>AG:</strong> But also people are NIH...</p>
<p><strong>HvdS:</strong> Depends what people's focus are.</p>
<p><strong>SC:</strong> On linkedresearch.org we have a resources page which lists anything from vocabularies we can use to publishing tools, archival places. That's open, if you have suggestions we can add more things on there. That's one way of discovering tools.. there's a lot of stuff out there. A lot of stuff even from this community.</p>
<p><strong>SK:</strong> You can mark it up in your own page to say this is my tool and you can query it and look for all of your tools. Then it's decentralised again with no central repository.</p>
<p><strong>RV:</strong> For the time being if anyone is interested in getting the data out there drop me an email..</p>

<ul><li>How does usage influence the previous questions?</li><li>(or should we just get the data out there)</li>
</ul>

<p>I'll be talking about practicing what we preach.. Always been a pain point in the semantic web community. We should start doing things ourselves. I think people who are here tend to agree on.. how many of you are publishing RDF in some kind of way. *a few hands* Not too bad.. I'm starting from the assumption that we want to publish our own metadata on the web and we know how it works technically. What are the best starting points. What kind of best practices can we find? This can serve as a starting point as a guide for newcomers. Which are the things they should emphasise.</p>
<p>This will become an interactive discussion, but first I'm providing some seeds. What I'm publishing myself. The open questions I encountered while publishing things myself.</p>
<p>What am I publishing? I have a personal website with metadata about myself, my research and so on. And some LinkedResearch articles, which have HTML and RDF. If you parsed this you/d see RDF. I follow the linked data principles. A FOAF profile partly autogenerated from things on the websites, about 6k triples. I have RDFa in the HTML pages, which are generated using templates. About 13k triples. Some overlap between things in the profile in the pages etc. What to put where? Should the foaf profile be complete or should the information be in the pages?</p>
<p>I created a pipeline and use a lightweight query interface. It includes reasoning. You can browse and query them online. Uses Triple Pattern Fragments.</p>
<p>The majority of other people I refer to from my website don't have their own URI. That's a big question to talk about.</p>
<p>Federated query combines my data with dbpedia. I have to use dbpedia identifiers to make that coupling. IN the spirit of decentralisation, if everybody published data like this we could do federated queries across all of our websites. Practice what we preach.. think about doing this with your own data! We can do really cool queries.</p>
<p><strong>HvdS:</strong> How do we know where your query interface is?</p>
<p><strong>RV</strong>: the URIs that I minted dereference into my query interface. It's advertised in the metadata of the pages. inDataset.. all linked data based.</p>
<p>I have lots of open questions, many of which I haven't resolved and I hope to discuss right here (see above).</p>
<p><strong>HvdS:</strong> you're extracting triples from your webpages and putting them in the dataset, that's why they/re queryable?</p>
<p><strong>RV:</strong> you can also use traversal based querying, but the reasoning hasn't happened.</p>
<p><strong>HvdS:</strong> you wouldn't actually need RDFa in html, you could put it all in a dataset</p>
<p><strong>L:</strong> Purpose should be the first question. What should we publish? Most people can agree.. I need to know my metrics without surrendering control. Good starting use case. Without worrying about internal workflow to publish things.</p>
<p><strong>RV:</strong> Task is to come up with use cases.</p>
<p><strong>SK:</strong> A page along with resources to have use cases. People can comment and see where the interest is and nearly vote for it and then we get an idea of what data we need to meet the use cases.</p>
<p>(Perhaps along the lines of <a href="http://csarven.ca/linked-research-scholarly-communication#user-stories-challenges">http://csarven.ca/linked-research-scholarly-communication#user-stories-challenges</a> - SC)</p>
<p><strong>RV:</strong> At some point I had an existencial crisis as I was marking up RDFa. The querying helped. Motivates.</p>
<p><strong>FN:</strong> How much of your semantic information can be represented with wikidata? You have nodes in your rdf... what kinds of information would not be suitable to be represented by wikidata.. your publications could be in there... (<a href="https://www.wikidata.org/wiki/Q30085536">https://www.wikidata.org/wiki/Q30085536</a>)</p>
<p><strong>RV:</strong> I'm publishing this, I'm controlling this. If wikidata is interested I'm using their ontologies they can import it. CC0. This is my data, I'm in control. The motivation for this work (see LDOW paper). Everyone else is already publishing my scholarly metadata and they/re doing it wrong. Mendeley, Springer, they/re doing it wrong. This one I can guarantee is right for me. Ownership, others are already publishing things about me and they/re wrong.</p>
<p><strong>L:</strong> in the end if people query wikidata more than your personal website..</p>
<p><strong>RV:</strong> in the sense that not everything is going to be on wikidata. It's still the web. I like it.. but we cannot expect everything to be in there. We need to publish our own stuff. People can reuse whatever they want. We can't expect to have a one central knowledgebase.</p>
<p><strong>FN:</strong> Wikidata requires references and you're the authority on your own.</p>
<p><strong>RV:</strong> Exactly, this is me taking control of my metadata.</p>
<p><strong>ATh:</strong> We want an infrastructure were we publish our own stuff..</p>
<p><strong>RV:</strong> Wikidata should link to my dataset. Can I just create my profile on wikidata?</p>
<p><strong>FN:</strong> I created it just now.</p>
<p><strong>K:</strong> a lot of people were talking about use cases. Your toolchain.. I dunno if I'm the only one thinking this. It seems to me people use facebook and other centralised services because the barrier to entry is zero. No technical knowledge. And they get something back which they value whether we like it or not. For this we're still at the level where it requires significant technical knowhow to set this up. That's an issue of this entire decentralisation thing. If everyone is going to be doing it themselves they/re going to have to spend a lot of effort ot do it, run a server, to be fully decentralised and not dependent on someone else. You really need a nice return on investment. Why do I spend this effort? This is a critical thing that must be resolved, otherwise we're just going to fall back to centralisation where people will provide prepackaged solutions.</p>
<p><strong>RV:</strong> I agree, first we need to make it easier. But at the same time it's never going to be easier than posting it on facebook. If it's easiest then the competition is lost. We need to find other things.. people have become desensitized, they stopped caring. But it's not just technology. It's about making people care. Why should people take control of their own data? it's a strategy by the /evil/ companies to make people not care. What I'm trying to say is besides technology, we need to look at the social factors.</p>
<p><strong>SC:</strong> It would be useful to drop one level down and not try to solve decentralisation on the Web.. the context here is scholarly communication, and even just the SemWeb community. If we can start by addressing our own problems.. we don't have all the answers for sure, but can we figure it out as we go and improve. Then maybe we can make better projections on how this could work on a global scale. What facebook and twitter are addressing are a global scale. We can be more realistic right now.</p>
<p><strong>K:</strong> The people present at this conference who aren't in this room.. the community... if the people at this community wanted to implement what you/ve built Ruben, how much effort/money would they need to spend? Do they need to run a backend infrastructure? How are you going to convince them to do that if there's no clear benefit to them immediately, the use case.</p>
<p><strong>RV:</strong> This is my counter question. if you have a system where you have to click once and it's done, how many people will do it? In this community it's about the mindset. If we can't convince people at this conference that it is important, how are we going to convince the world.</p>
<p><strong>AT:</strong> People want to do things first off, and it's hard to keep things up to date.. very quickly you get very outdated data. Certain things you can autogenerate, but it's not really foolproof.</p>
<p><strong>SK:</strong> Depends on what you're doing.. I keep my profile, PC list, papers list, up to date.. We as a community do make sure what we're visible.</p>
<p><strong>RV:</strong> it's so easy to keep my data up to date compared to everything else. To keep Mendeley, ResearchGate, up to date is a pain.. so screw this, I keep my own data up to date, and they can take it if they want. Just having one system to update is much easier than five systems, some of which don't even let you update.</p>
<p><strong>ATh:</strong>: also talking as if it's a choice between each person doing it individually OR via third parties. Most of us work in institutions.. if we had this sort of thing set up institutionally or departmentally it can become more of the one click thing. We have to do this anyway, or it's done for us.</p>
<p><strong>RV:</strong> this thing I've presented trying to convince my direct colleagues to implement it.. at the same time we also have those systems. I use my own system to export to those institutional systems.</p>
<p><strong>SK:</strong> Think of how frequently we move. In research, the contracts can be quite short, you're moving every year. I want my profile, my page.</p>
<p><strong>ATh:</strong> you have that choice. We're talking about people with a certain amount of inertia. Even when they move we could do a query and take it with them.</p>

<h3>Discussion: Decentralisation - what did third-party publishers ever do for us?</h3>
<p><strong>SC:</strong> Why do you want to publish with a third party, vs self publishing?</p>
<p><strong>RV:</strong> What they do for me? They mess up my metadata badly. They do give a certain status to the publication which I need for my employer. One thing they do is extracting references and making connections between publications</p>
<p><strong>AG:</strong> So, the next question is how do we do that ourselves? .. That's also why we are trying to run events like this to incentivise people.. .grass roots way. So, universities can see and realise that this is an accessible way..</p>
<p><strong>L:</strong> the technical part can be done.. but the department says we have to publish here .. how do we convince them to let us publish in a decentralised way?</p>
<p><strong>AG:</strong> We can look at how OA is developed..</p>
<p><strong>HvdS:</strong> But that's not how it worked out</p>
<p><strong>AG:</strong> In terms of changing attitudes</p>
<p><strong>L:</strong> Why that particular journal is on that list and.. history? How can we transition to a decentralised approach.</p>
<p><strong>RV:</strong> I asked my supervisor, why they care so much about these big journals? He says there's a correlation with quality, it's not a guarantee. Any alternative is welcome, we know the system is not the best one. If we could use all of this data to create better indicators of quality, to really show that we're doing good research.. they use approximations, maybe we can do better.</p>
<p><strong>SC:</strong> The intent of this question wasn't that we *don't* need them, but individuals having freedom to choose to take it on themselves or use a reliable third party to expose their knowledge on the web. If they want to use infrastructure that is available through their university or company or someone they trust. It's not that publishers are <em>bad</em>, it's completely legitimate services. A lot of people argue that public funding is funnelled in a certain direction that could otherwise be used for the commons... but I didn't want this to just turn into bashing third party publishers. Right now, to have a paper at this conference we have to comply with a bunch of things that the conference offers. It goes to Springer, you have an option to give exclusive rights to them or you can pay extra to have it open access. The alternative, which we went through for one of our articles, the first thing I proposed was can we opt out of being included in the proceedings. But then it would have to be an "invited talk" to be part of the programme. But you don't get a DOI and so on. Some of my coauthors didn't want that, we wanted the published stamp on it so we paid for the open access option and that's how it went. The conference didn't provide us with an option to participate on an equal level with the rest of the contributions that were made. We were forced to either give exclusive rights or pay this extra money on top of what our libraries are paying to make that accessible. We wanted it accessible. Even though we have a copy of it on our website.. the point is that it would be great if the events would provide that possibility. If you want to use a third party to make your stuff available that's your choice, but don't limit the options from those individuals who want to still participate by other means.</p>
<p><strong>A:</strong> what was the reason for some of your team to want to be published officially?</p>
<p><strong>SC:</strong> for them it mattered that it looked better It's peer reviewed either way. But because the conference would only accept is as an invited talk, not discoverable through the proceedings.</p>
<p><strong>A:</strong> about status and discoverability</p>
<p><strong>SC:</strong> I personally find it artificial. Have to keep everyone happy.</p>
<p><strong>ATh:</strong> if Springer and your third party approach used the same metadata you could have a virtual proceedings. The conference could have offered that. Could have been a mixed thing, but requires cooperation by Springer.</p>
<p><strong>SC:</strong> Is there more to the proceedings than having a list of the articles? Two of them are links. *duckduckgo: eswc2017 accepted papers* The value that we attach to the book from Springer is up to us....</p>
<p><strong>RV:</strong> What other things besides status do we need publishers for? Discoverability is a non-issue.</p>
<p><strong>SC:</strong> They provide a service. Commitment that they will persist</p>
<p><strong>RV:</strong> We have archival solutions for that.</p>
<p><strong>A:</strong> Maybe we have a different view of discoverability. Broader than to be found in perpetuity. Abstracting and indexing..</p>
<p><strong>AG:</strong> Isn't this community building and researching stuff for this.......</p>
<p><strong>D:</strong> If the metadata is exposed can't we build tools on top of that?</p>
<p><strong>RV:</strong> If I google parts of my own papers my website is always the first hit. Depending on what people search for..</p>
<p><strong>AT:</strong> Imagine you are in a different CS community who hasn't ever heard of you... how do they find you? How do they know how you are describing the work you do? Different areas in computer science solve similar problems with different labels. Partly due to the conference ecosystem. So you breed more smaller groups of people who know each other and are intimately familiar with each others work, but are definitely not with what is going on in a parallel field.</p>
<p><strong>RV:</strong> but how to publishers help with that? I go to google if I'm looking for things out of my field.</p>
<p><strong>AT:</strong> I don't know for everything that we do, but in Elsevier we have made significant improvements on recommender engines specifically targeted at these sorts of problems. I haven't tried it out.. but I have heard .. depends on the domains. Not an issue that publishers aren't aware of. In this sense, CS is really a different beast from all other sciences. You're more self-sufficient in all of these ways, makes it a different situation. Originally, why is it that science didn't have all the papers published by the communities themselves. They outsourced it.. Scientific societies published their own work and then they outsourced because they didn't want to bother with typesetting and all that. That's how it originally happened. Now it's a different situation because in principle if you are digitally savvy you could self-publish. but that's only applicable to this community.</p>
<p><strong>D:</strong> I know the biology community, the publisher really has a role. They send this thing in word and it's badly formatted, and the publisher has a responsibility to make it..</p>
<p><strong>AT:</strong> it's really a different system in that sense. I just wanted to mention that.. perspective. What the publishers role is for other disciplines.</p>
<p><strong>D:</strong> In biology you cannot publish at a conference, only a journal. they choose the reviewers. In CS the journals role is nearly 0.</p>
<p><strong>AT:</strong> In other domains the conference is just a discussion forum, a meetup, not about actual publishing. Not so much about status.</p>
<p><strong>RV:</strong> Springer recently started publishing their metadata in LD. but if the role is more like recommendation and discovery, why are they giving the metadata away? Then anyone can build search and discovery on top of this. doesn't need to be a publisher.</p>
<p><strong>SC:</strong> SciGraph is CC-BY non-commercial</p>
<p><strong>RV:</strong> yeah that's a catch.. Creates a new role. Discovery platforms for science.</p>
<p><strong>M:</strong> What publishers do is they are service providers for researchers. They take away the time you need to do all that publishing stuff. People asking for that technology... we offer all those technologies to researchers. We exist to help further the careers of academics. We take care that all that stuff is indexed correctly so researchers don't have to do that themselves.</p>
<p><strong>SC:</strong> We do acknowledge all of these different systems. Can we have an ecosystem that is more welcoming and healthy to give some freedom to individuals, but that there are systems built specifically for that, so to find funding for it, make sure people don't have to reinvent the tech. Yesterday we discussed ORCID.. how do I allow my WebID to take part in this system, just as I would ask someone else's ORCID in my article. There are different forces at play. It would be great if we can acknowledge them and build more of a federated approach that bridges between these systems. There are tradeoffs everywhere. It's not that the publishers don't provide a service, but it does come with a certain cost, just as using facebook comes with a certain cost. It's not just all these advantages or disadvantages. They can both be present. Even with self publishing, it's not that it's solving all these issues that were not addressed before.</p>
<p><strong>DDR:</strong> I'd like to bounce one of Ruben/s questions back to the publishers. That very practical point that really you/d like to enter this data once and the systems would all pick it up. Is that something that the publishers working together would all address, or is there a gatedness, that authors can't generate their own metadata?</p>
<p><strong>AT:</strong> when it comes to information we have the attitude that the author knows best. It's their stuff. IF they can't tell us what it is then that's it.</p>
<p><strong>SK:</strong> You can validate it because obviously we publish in journals, conferences. Either they agree or they don't.</p>
<p><strong>AT:</strong> Usually you can misuse things but you get found out because it's a community.</p>
<p><strong>SK:</strong> Same as why we don't plagarise papers..</p>
<p><strong>AT:</strong> authors are making claims. There are some checks, it's accepted.</p>
<p><strong>SK:</strong> I don't think we should look to replace existing systems. I think we should look to offer alternatives. People are very different. Some people want more control, others want less control. Usually there's a sliding scale in between. We should provide resources to support everybody.</p>
<p><strong>AG:</strong> We need to change how people perceive self-hosted research. There's no reason a well referenced blog post can't be taken as seriously as a journal article. You might read a journal article and think it's crap. That's something we can start by changing in this community.</p>
<p><strong>AT:</strong> initially conference papers weren't weighted as much. You can evolve the ways of work being accepted. It's about the funding body and other parts of the ecosystem too. Real discussion about how research is progressing.</p>
<p><strong>D:</strong> Does someone know what happens with all the data we insert into EasyChair? We have control.. if we can export that in RDF we can have all that data?</p>
<p><strong>SK:</strong> If you don't pay for the service you are the service. You have the free version and the paid subscription version. The latter you can export in CSV. If you don't pay you cannot. They/re there to make money. They/re not doing it for fun.</p>
<p><strong>DDR:</strong> A few years ago at this conference there was a panel on the future of scholarly comms.. and the whole thing was dominated by the audience laying into EasyChair.</p>

<h3>Utilising Semantic Web Ontologies to Publish Experimental Workflows, Ensar Hadziselimovic</h3>
<p>The main author is Harsh, but he couldn't be here today. We are PhD candidates in the early stages, looking at semantic web and linked data. Both of us come from similar backgrounds. Web developers, for the last ten years or so. The interesting thing is we had all scales of projects but we didn't find anything about semantic web before we started our studies. So that tells you a bit about how exposed we are outside of scientific circles.</p>
<p>When we started originally, at the ADAPT Center in Dublin. Four big universities. Loads of stuff going on, 115 researchers, 80 industry partners, big companies. Huge number of papers. We specialise in NLP, ML. We were lucky enough to participate in a semweb workshop which opened our eyes to where we want to head with our studies. Harsh looks at ontologies, I look at legal stuff. It became obvious from the beginning that there is a problem with how papers and exepriments are presented in an institution. There's no central point between our four universities for gathering data. Why not use SemWeb to make it more decentralised? Started locally but realised there's an issue in the scientific community as a whole. A huge number of publishing methods avalable, but no consistency when it comes to publishing something related to the paper, such as workflows. Not well represented in classic publishing methods. Also huge diversity. People use github, docker, VMs, no consistency. Why not use SemWeb and LD to try to find some kind of link between the experimental workflows?</p>
<p>We want authors to be in control of their own knowledge. But there are obstacles. We conducted some research in the scientific community. People are really unaware of semweb in our university. We should educate the scientific community in the possibilities.</p>
<p>To go over the experimental workflows: reproducibility and repeatability. Commonsense when it comes to publishing experiments. No option to reproduce someone else's results and change parameters etc. All of this leads to how we can reproduce an experiment. There are a whole number of difficulties. you inherit certain properties of an experiment and you have to be aware of that, and which parts you can use freely when it comes to licensing. Licensing, IP, is a very big issue when it comes to reproducing experiments.</p>
<p>Ontologies: OPMW (<a href="http://www.opmw.org/model/OPMW/&#x29;">http://www.opmw.org/model/OPMW/)</a> based on PROV-O and PPlan. It enables us to track provenance inside scientific workflows.</p>
<p>Second part is legal stuff: ODRL (<a href="https://www.w3.org/ns'odrl/2/ODRL21&#x29;">https://www.w3.org/ns'odrl/2/ODRL21)</a> for digital rights management, to describe privacy etc.</p>
<p>We can see a typical workflow in OPMW, different concepts of the data.</p>
<p>ODRL contains classes, properties and actions to do with licensing and attribution, and what things can be used for.</p>
<p>One interesting approach on ODRL is that it works on a principle of inclusivity. If you take a typical file system you can get certain permissions. Subfolders inherit them. That works in principle by exclusion. ODRL is different. The child experiment is derived from .. it has certain concepts as many as you like. All of these concepts can have properties. Dealing with inheritance with inheritAllowed and inheritFrom. On the parents side we see all of these properties, describing if the property can be passed for inheritance to the child.</p>
<p>OPMW also has related concepts.</p>
<p>Our tool - a web application build with certain values in mind. It has three tasks for users who have different levels of familiarity with workflows, or with linked data / semantic web concepts, or neither. So by using the tool they can be educated about the things they are unfamiliar with. The tool is a work in progress, and is for educating our own staff so they can understand how linked data is useful for them. They are experts in their field, but they have a gap when it comes to linked data. The tool generates documentation about your experimental workflow once you/ve entered the steps.</p>
<p>We have some remaining challenges regarding how to describe different concepts, different types of experiments. PROV may not be sufficient for tracking what we need; mixing it with ODRL has some drawbacks. Licensing is a multidimensional problem. No clear guidelines for licensing experimental workflows. Many people publish experiments without any license, which is considered the worst case in legal circles.</p>
<p>Future work is the user study. We are trying to discover how people are familiar with linked data and the legal issues to do with publishing. It is surprising how much the general computer science community is not aware of these technologies, so we need more participants, more people involved. We are trying to recruit people who can help with promoting this. We see this as a way into the future.</p>
<p>We focus at the moment on workflows but we can expand this further.</p>
<p>Code will be available after the conference!</p>
<p><strong>??:</strong> Trying to derive benefit from PROV-O in scientific workflows.. documenting execution traces for end users and especially when you want to link to domain concepts. PROV is very technical. PROV traces can be huge in size.</p>
<p><strong>E:</strong> Have you looked at OPMW? It extends PPland and PROV to do more to do experimental workflows. Even with that we're still not 100% happy. We're trying to tackle the legal side in parallel, it's very difficult to combine those two. Before I forget, it could be our opportunity to push this thing further. We have a GDPR in one years' time. IN parallel we're doing consent-driven framework in relation to GDPR, it might be a big opportunity because many companies are starting to be aware that their data is not legally proper at the moment. GDPR is very specific that all the data that you have available in portable formats so anyone has to be able to port the data to other services, which is a very vague defined.</p>
<p><strong>SK:</strong> Re licensing.. I'm part of the Permission Obligation Expressions group. Standardising ODRL. We're representing common licensing like CC-BY CC-BY-SA, any licenses. So we're looking to formally represent them so we can reason over them. When it comes to derivative work more than likely you're using components and they come with different licenses, so what license do you give the thing you're actually developing. IS this something that you're doing?</p>
<p><strong>E:</strong> Definitely going to head in that direction.</p>
<p><strong>SK:</strong> How do you license data? It's a really difficult problem</p>
<p><strong>E:</strong> No insights yet. That's a direction I want to head. When you talk about open data, how you can attach the license itself. you can find licensing guidelines all over the place, but there is no place that you can see how actually people do it in practice. I also see this workflow like Ruben/s earlier, we tried to develop something similar in our tool focused on workflows, but also we want to have some kind of licensing method attached to the RDF output we're producing.</p>
<p><strong>RT:</strong> I agree on the licensing problem.. For most people they dont/ care where the data is, but can they eg. constrain facebook to follow my agreement, my license.. but I have to follow theirs. We need something to provide certain conditions to allow companies to use our data. In a discoverable format.</p>
<p><strong>SK:</strong> There's a lot of work in linked data markets, stores, associating licensing and taking ownership of your own data in this form. But at the same time there's no way I can enforce it. You can only say /please/.. and they can do whatever they want. The traceability is an issue.</p>
<p><strong>DDR:</strong> The licensing point is really important and even more complicated in this context. Ten years ago we launched myexperiment.org which publishes workflows as Linked Data, it still works and looks the same. We never solved the licensing problem. The data from lots of sources goes into a workflow so how do you license what comes out? I'm fascinated by this, Provenance has come on.. but not sure we have an answer to the licesnsing yet.</p>
<p><strong>SK:</strong> The whole goal of our project is to formally represent and reason over licenses. It's derivative work, if you're a data scientists. Back to the discussion this morning. It's about education as well. As a simple software engineer, when it came to preparing a presentation I used to just pull down any images, didn't really look at the copyright.. or it's public on the web, surely I can reuse it. but that's not the case. I publish data without putting license on it, which basically means people can't use it.</p>
<p><strong>DDR:</strong> We had interesting problems around IP with the workflows. If someone uses your workflows to generate data, do you have any IP in that? And tagging, there's important IP in tagging. We didn't solve these problems but we did talk with lawyers..</p>

<h3>Instrumenting Continuous Knowledge Extraction, Sharing, and Benchmarking, Riccardo Tommasini</h3>
<p>Paper source: <a href="https://marco-brambilla.com/2017/05/11/instrumenting-continuous-knowledge-extraction-sharing-and-benchmarking/">https://marco-brambilla.com/2017/05/11/instrumenting-continuous-knowledge-extraction-sharing-and-benchmarking/</a></p>
<p>We are working on evolving knowledge. This is a streaming world. Knowledge is evolving over time, and quite fast. "What happens in an internet minute?". How can we get access to this data and reuse it. Other problems come from a scientific perspective.</p>
<p>How can we represent, store, and access this knowledge when it's fast changing. We envision a set of tools that allow us to frame this evolving knowledge. I will show you different tools that we developed.. they are not integrated yet, but we envision an environment where these tools can be used together and maybe piped into a workflow.</p>
<p>One problem was formalising knowledge.</p>
<p>Regarding evolving knowledge, only important entities emerge online. We need to explore the long tail. The value of this comes because I can consider the Web as a growing environment, were I can seed a piece of knowledge as an entity, let it grow in social media, and thanks to the help of experts I can extract them afterwards with value added to them. This is possible today thanks to the Social Knowledge Extractor which formalises how knowledge can be extracted from the long tail.</p>
<p>I can crawl things from social networks, rank entities that are emerging, and rank features that helps me discover knew knowledge. This requires someone who knows the domain. SKE is under submission to ISWC and is already online. We test against lots of tools for doing this kind of work. This is the first tool.</p>
<p>The second one is regards to the problem of streaming data publication.</p>
<p>I have my website, I want to share it online, Ruben showed us the possibility. Some people are happy to pay that effort, some are not. We care about what happens when the data is streaming and changing fast. We want to follow the linked data paradigms also but how does this relate to the temporal dimension? What we considered a couple of years ago is that there are two provenances out there: live streams that are running; and temporal data that we want to re-run. Maybe I want to cyclically replicate the data so people can consume them.</p>
<p>We adapted this publication workflow using linked data paradigms. The first is sGraph, which describes the stream, but theoretically describes all the objects in a stream. Of course you cannot represent them all because a stream is theoretically unbounded. But how can we have access to each single element in the stream, even in the future after some element is expired.</p>
<p>The next concept is iGraph. Imagine a stream of data in RDF chunked in graphs with a timestamp. Each graph is a named graph, which is findable online. Refers to the sGraph, so I have some sort of provenance where does the iGraph come from. Here a question is open; which vocab do we use? is VOID enough? Do we need something more specific? We are working on this topic.</p>
<p>All of these concepts are implemented by Andrea Mauri and Daniele Dell/Aglio in TripleWave ( <a href="https://github.com/streamreasoning/triplewave&#x29;">https://github.com/streamreasoning/triplewave)</a>.</p>
<p>We have spread these tools on the Web which are quietly used by the streaming community. We have live streams from Wikipedia, Tweets, Facebook, to JSON-LD, and make them available through WebSocket. I recently dockerised it so it's easy to deploy. It's cloud-ready. This is the second piece of the kind of tool we are aiming for.</p>
<p>Now we know we can extract knowledge, we can increase the level of the quality of the knowledge that is out there. We can seed it and let it grow. I can reply it in a linked data ready way. TripleWave is able to reply existing datasets from an RDF repository.</p>
<p>The last point of this work regards the benchmarking. Now we have data there because it's available through TripleWave. How can we test that the next tool for making sense of this data is effective? We want a definition of this work in a formal way. We want to foster the reproducibility of this pipeline. We want to create a trust feeling in this environment where people can pick up different pieces and make their own source in a easier way.</p>
<p>We designed a benchmarking infrastructure, presented at last ESWC (Heaven). Now we have a cloud-ready version of this under submission for the next ISWC resource track.</p>
<p>This works for RSP engine but it could be used for the entire community. *describes parts of RSPLab* Python libraries. Can integrate your own tools as extensions.</p>
<p>Happy to help if you want to try the tool. We have a slack channel too.</p>
<p>It's an ecosystem, where tools are discoverable and reusable, not specific tools that everyone needs the same. We want to organise a workshop where tools for science are rewarded if they enable some sort of research. We want to reward the engineering effort behind the research.</p>
<p><strong>HvdS:</strong> I would love a concrete example of what I could do with this.</p>
<p><strong>RT:</strong> Let's make the example with RSPLab and TripleWave. Currently, you can deploy it on AWS or Azure Cloud. You need 3 VMs: One for the streams, one for the RSP engine and one for the controller and monitoring tier.</p>
<p>An iPython notebook allows you to deploy the included benchmarks streams and RSP engines. Using a python library you can also design and execute experiments and share the results as linked data.</p>

<h3>Decentralized creation of academic documents using a Network Attached Storage (NAS) server, Johannes Wilm</h3>
<p>Prerecorded talk: <a href="https://youtu.be/HP5J2Ui4vbI">https://youtu.be/HP5J2Ui4vbI</a></p>
<p><strong>AT:</strong> How secure would a NAS be?</p>
<p><strong>JW:</strong> Not more secure than your router and home connection. Most security comes from having your data "at home" and that there isn't just a single point where data can be copied from (servers of Google or alike).</p>
<p><strong>AT:</strong> Thanks. I think this is a question that may be raised by users from other communities especially as data security awareness is raised by the media.</p>

<h3>Lightning talk: Where is the ledger for science - Alexander Garcia</h3>
<p><a href="https://docs.google.com/presentation/d/1eyHltHpXtVzy_DarGkVO15PDyda09kh-OqzSMzbXjG4/edit">https://docs.google.com/presentation/d/1eyHltHpXtVzy_DarGkVO15PDyda09kh-OqzSMzbXjG4/edit</a></p>
<p>We have no way to keep a ledger for what's happening in science. I started this work because I was working on how to establish relations across the scholarly output. Eg. paper-software-dataset. Publishers wanted to capture this relation when someone was submitting. Lots of issues to do with versioning. Scholarly outputs are actually products'goods. We have lots of operations over those goods. When we said it was a market, people took it very personally. We are transacting on those products. you exchange goods in a market. If you don't exchange goods in a market you're losing money or value. When people say scholarly communication is broken what they/re really saying is the value of the market is decreasing.</p>
<p>Where is the ledger for all of this value? Early stage.</p>
<p>Contributions are no longer self-contained in a research paper. We have a huge network of things that are living in the Web. New artifacts are constantly generated. New Web applications to deal with these things. More repositories, more metadata. Research objects are being deposited in a very diverse ecosystem of repositories. Technology will make it possible for people to keep coming up with new things.</p>
<p>Too many efforts to bring everything down to one single data model. Open AIRE; SHARE. Created a set of harvesters that go to repositories, grab all the metadata and bring it down to a common data model. Doesn't matter if data is lost.</p>
<p>This is a centralised approach for what is in essence a decentralised network. Minimal information. Huge infrastructure to consume data. Poor quality data, little curation. Different from business endeavors. ResearchGate differs as it engages people in curation. Relations across ROs are not really being addressed. Both are paper-centric.</p>
<p>Our approach is to leave things where they are (github, figshare, whatever). I make it easy for you to claim what you have in all of these places, and then you manually curate the record. Prototype, finished about a week ago.</p>
<p>You authenticate against the site (figshare, github, 3 more). Bring evertyhing from SHARE. First step is you auth with your ORCID. Then I bring everything from SHARE under your name. Very dirty data. But you can auth with github, slideshare, so I can bring everything you have. Once you have auth/d I make it easy for you to claim your work, and then organise things. Resource maps are bundles of research objects.</p>
<p>All the value depends on the paper, which is produced at the end of the research lifecycle, even if you come up with lots of things during your research process.</p>

<h3>Lighting talk: Reproducing Software experiments through semantic configurations - Ruben Taelman</h3>
<p>Call for reviews for our article, recently submitted to ISWC. We attempted to solve a problem we encountered ourselves. If you read a paper, they sometimes use a benchmark and refer to certain software but if you look closer they miss essential details like which version of the software, which configuration, and dependencies, which can all influence the outcome of the results. We attempted to semantically describe these different elements.</p>
<p>linkedsoftwaredependencies.org (you can use dokieli to annotate the article)</p>

<p><strong>SC:</strong> It's great that this initiative is happening because it forces us to capture all these artifacts, exposing them, making the reusable by other researchers. Not just the end product of the article, but someone can reuse the workflow steps, the experiment. Or having more precision on the comparisons.</p>

<h3>General discussion</h3>
<p><strong>SC:</strong> One of the points of this workshop is to see what everyone is working on, and where we can glue our efforts to aim towards this decentralised thing.. we're all doing different things. How do we reuse each others work, and if we agree on this general vision, at least for this community, maybe we can make attempts at federating or bridging. How do you find your work fits or conflicts with other peoples' work.</p>
<p><strong>RT:</strong> For the stream reasoning community, I try to maintain a little the github org. We are trying to open up and software is a way to do so. Two problems. The first is scientific provenance, how we do this properly. The second is how can we reward people that are doing all these efforts for their own effort.. they spend hours writing code, and then when I leave my institution it's put aside. It's important to be investigated in a formal way. It's important to say as a community we put effort and resources to sustain people doing so. We are doing it because the research track at ISWC is targeting this. We're going in the right direction but if we're going in the discussion we should consider these two directions.</p>
<p>I saw this event as very helpful for me. The work on workflows, I will keep in touch. There is room for connecting the works of everybody. We need open source for that.</p>
<p><strong>RTa</strong>: I think if you write your software or anything and make it public as open source I think the benefits will come automatically. If you make your source closed then no-one will be able to use it. It is the open source code that is able to be reused, and well document it, then people will come and use it.</p>
<p><strong>RT:</strong> the point is that being part of an OS community (eg. Apache).. making software reusable is hard, it takes too much time. Most of us we don't have time to do that. That would be awesome but honestly we cannot do that. What we can do is to show there are people behind it and welcome people to use your code. I don't care if your code is immediately reusable, probably it's too specific. But if I am able to download it and contact you immediately I will save half of the time for my work. My contribution to your work should make it a little more reusable. If we have this kind of sharing ecosystem in the end we might have a tool that becomes production ready over time.</p>
<p><strong>RTa:</strong> I always try to make software reusable myself because I want to reproduce things. We might have already run across the issue that you run your benchmark and process your results and notice some issues, and have to rerun your benchmark. So it helps if your benchmark is easy to rerun.</p>
<p><strong>ATh:</strong>: I've started doing this as a side effect of developing things using things like docker. As well as logging all the changes to my code I also have a record in the dockerfile of the environment as well as providing an easier way to take the code and reproduce it. You're documenting everything as you go. I don't find it particularly much more effort. I'm doing it for my own convenience but it has the side effect that everyone else can pick it up.</p>
<p><strong>RT:</strong> the problem is that there are people doing this work who are not software engineers. We cannot ask them to .. if your code is not the best no worries, we don't care. We want people to share anyway, and we can share expertise. Take the goal seriously, the tool is okay.</p>
<p><strong>SK:</strong> Concrete first step: We have ISWC coming up. We are the people who submit to the conference. We have a metadata track chair.. why don't we contact them and have a chat? When it comes to the papers can you also gather metadata form the authors with respect to the tool or the dataset or the queries or whatever. Then we/ve started - rather than talking about it - maybe it grows! I'm on the organising committee so I can push it. And this is the most effective way to get something done.</p>
<p><strong>RT:</strong> Another way would be to have an ISWC github org that hosts the code is very easy to do.</p>
<p><strong>SK:</strong> I'll talk to Stefan to see what the plan is.. one of the things that we/ve decided to do is to open up all the metadata we gathered as part of the PROPEL project from the last 10 years, so anyone who has a tool they want to run over it has the opportunity to do it. If we publish this data in the future people can use it.</p>
<p><strong>SC:</strong> We should leave the breadcrumbs as well.</p>

</div>
          </section>
        </div>
      </article>
    </main>
<? include '../../end.php'; ?>