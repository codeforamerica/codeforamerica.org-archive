<?php include_once('../_includes/head.php'); 
    $pageTitle = 'Fellows';
?>

<?php include_once('../_includes/header.php'); ?>

<section class="layout-semibreve">
    
    <div class="layout-centered">
    	<h2>Open by Default [beta]</h2>
    	<h4>An open data playbook to help you get started in your city or county.</h4>
    </div>
    
    <div class="layout-minor">
        <nav role="navigation" class="toc" id="toc" style="padding-top:20px;">
        	<h4>Table of Contents</h4>
            <ul class="sectlevel1">
                <li><a href="#intro">Introduction: What is open data?</a></li>
                <li><a href="#groundwork">Laying the Groundwork for Open Data</a></li>
                <li><a href="#success-stories">Demonstrating Value: Open data success stories</a></li>
                <li><a href="#publishing">Opening and Publishing Data</a></li>
                <li><a href="#sustainability">Planning for Sustainability</a></li>
                <li><a href="#utility">Making Open Data Useful</a></li>
                <li><a href="#resources">Further Resources</a></li>
            </ul>
        </nav>
    </div>

    <div class="layout-major">	
		<p>When public data is made freely available in open, standardized formats, it can drive transparency, community engagement, and accountability. Governments around the country are building a culture and commitment to openness in City Hall across departments by making government data openly and easily available to citizens — and supporting open data with process and technology.</p>
		<p>In this guide, we’ll explain some of the practical tactics and considerations you’ll need to know to get an open data initiative off the ground in your city or county, drawing upon the experience and expertise of other governments who have successfully done so.</p>
		<p><em>This guide is in beta and we'll be continuing to develop it. Help us improve this resource by <a href="https://github.com/codeforamerica/codeforamerica.org/issues?state=open">submitting an issue</a> or pull request on Github, or email us with comments and suggestions: gov-staff [at] codeforamerica [dot] org.</em></p>
    </div>
    	
	<div class="badge-heading badge-gov badge-blue" id="intro">
	    <h2>Introduction: What is open data, and why bother?</h2>
	</div>
	
	<p>Government data is a valuable public resource that, when accessible by every community member, can be a powerful tool to support the goals and values of the community. Cities and counties around the country are making an effort to ensure the data they hold is freely and easily available to the public by embracing and institutionalizing the practice of “open data.”</p>
	<p>What is open data? Basically, open data refers to data (such as documents, databases, records, or transcripts, including those managed by outside vendors) released by a government or organization that is:</p>
	<ul>
		<li>freely available to be used, shared, and reused by anyone for any purpose, commercial or otherwise.</li>
		<li>available in digital, machine-readable formats (such as .csv) so that it can be used in combination with other data and applications.</li>
		<li>available in its entirety — and able to be downloaded “in bulk” and not just manually retrieved record-by-record.</li>
	</ul>
	<p>There are many benefits of opening data. By opening data in machine-readable formats, governments can drive internal efficiency, spark community engagement, and fuel a civic tech ecosystem —to name just a few of the reasons your government might decide to pursue an open data initiative.</p>
	<div class="alert"><p><strong>Further reading:</strong> The <a href="http://opengovdata.org/">8 Principles of Open Data</a> lays out an in-depth definition of open data. For further definitions of key open data terms, see this <a href="https://docs.google.com/a/codeforamerica.org/document/d/1ZbkQ2Ad66FKVj-v2T-UHKJbsh0CHV-dm9MEAoy6yT2Y/edit">Open Data Glossary</a>.</p></div>
	<h4>Acknowledgements</h4>
	<p>Many individuals and organizations contributed their knowledge and expertise to this guide. In particular, we would like to thank: Jim Craner, Peter Koht, Amy Mok, Dave Guarino, Tim O’Reilly, David Eaves, Laura Meixell, Andrew Crow, Mark Headd, Rebecca Williams, Mark Leech, Tim Welsh, Jenny Park, Tim Moreland, Daniel Hoffman, Millie Crossland, Ian Kalin, Jack Madans, Mike Migurski, Garrett Jacobs, the Sunlight Foundation, and the Open Knowledge Foundation.</p>
    
    <div class="badge-heading badge-gov badge-blue" id="groundwork">
        <h2>Laying the Groundwork for Open Data</h2>
    </div>
	
	<h4>Define the goals of your open data initiative</h4>
	<p>In order to be successful, open data initiatives must be clearly aligned with larger strategic goals and objectives. Opening data just for the sake of “doing open data” is a recipe for frustration, confusion, and lack of long-term impact.</p>
	<p>So, before getting started, it's key to define your goals for open data. Being clear about this from the beginning will make it easier to articulate the value and get other stakeholders on board. Ask yourself: Why is open data important for your government? What do you hope to accomplish? How can open data support the existing needs and priorities of your government and leadership?</p>
	<h4>Common goals and outcomes for open data</h4>
	<p>Depending on a combination of resources, priorities, and values, cities may have any number of goals for an open data initiative. Common goals include:</p>
	<ul>
		<li>Increase interoperability between systems and data-driven applications within City Hall and with other jurisdictions.</li>
		<li>Save staff time and create efficiencies by increasing information sharing between departments.</li>
		<li>Provide citizens information to better understand their government's activities and participate in improving the quality of life and promoting economic development.</li>
		<li>Provide greater awareness of — and availability of — data for data-driven decision-making throughout City Hall.</li>
		<li>Seed the environment for a local civic technology ecosystem.</li>
		<li>Capitalize on applications and services built on open data standards in other cities.</li>
		<li>Increase communication and demonstrate openness to build citizens’ trust in government.</li>
		<li>Reduce the burden on government staff to respond to repetitive public records requests by making frequently-requested information available to residents in a self-serve format.</li>
	</ul>
	
	<div class="alert"><p><strong>Further reading:</strong> See <a href="#success-stories">this section</a> for examples of how open data has achieved these goals in different communities.</p>
	</div>
	
	<h4>Aligning it with organizational goals and priorities</h4>
	<p>Showing how open data can drive progress on high-priority issues can help generate initial buy-in from leadership, establish quick wins, and generate momentum to get a longer-term open data initiative off the ground. When crafting your rationale for open data, you should consider how open data can strategically support high-level policy priorities specific to your local context — such as creating jobs, reducing vacant and abandoned properties, or increasing government transparency. You might want to review recent high-profile speeches from your city’s leadership, such as an annual State of the City address, to identify key issues.</p>
	<p>Be creative and push your thinking about how open data could have an impact in unexpected areas. For example, in Boston, Mayor Menino stated in his 2012 State of the City address that he wanted to the improve school selection process for families. Using open data, the city then <a href="http://beyondtransparency.org/chapters/part-1/open-data-and-open-discource-at-boston-public-schools/">built a simple web interface</a> to help parents easily see what schools their child was eligible for and compare them on a range of dimensions like test scores, after-school programs offered, and travel time from their home.</p>
	<h4>What to expect: How open data has worked for cities of all sizes</h4>
	<p>There’s a way to do open data on any budget. Cities and counties with populations (and budgets) of all sizes have launched successful open data initiatives. The strategy and structure you choose to pursue should be informed by an understanding of your government’s resources, political environment, and priorities. Cost, demands on staff time, technology needs, and team structure can vary widely.</p>
	<p>Other cities have paved the way and can serve as a model for what to expect as you launch your own open data initiative. Here are some examples of how other cities have done it, told by the government staff who made it happen.</p>
			
    <!-- this is the short snippet -->
    <div class="wodge wodge-l">
		<h3 class="wodge-header">Louisville, KY: Open Data</h3>
		<img src="http://www.codeforamerica.org/blog/wp-content/uploads/2014/06/louisville.png" class="wodge-image">
		<div class="wodge-text">
			<p>Tim Welsh, Deputy Director of Technology for Louisville Metro Government, describes open data in Louisville.</p>
		</div>
		<a href="/projects/louisville-open-data" class="button wodge-button">Read more</a>
	</div>

    <!-- this is the short snippet -->
    <div class="wodge wodge-l">
		<h3 class="wodge-header">Chattanooga, TN: Open Data</h3>
		<img src="http://www.codeforamerica.org/blog/wp-content/uploads/2014/06/chattanooga.png" class="wodge-image">
		<div class="wodge-text">
			<p>Jenny Park and Tim Moreland, Open Government Specialists for the City of Chattanooga, answer some questions about their open data initiatve.</p>
		</div>
		<a href="/projects/chattanooga-open-data" class="button wodge-button">Read more</a>
	</div>
			
    <!-- this is the short snippet -->
    <div class="wodge wodge-l">
		<h3 class="wodge-header">Montgomery County, MD: Open Data</h3>
		<img src="http://www.codeforamerica.org/blog/wp-content/uploads/2014/06/montgomery-county.png" class="wodge-image">
		<div class="wodge-text">
			<p>Montgomery County was one of the first counties in the United States to enact an open data policy. Daniel Hoffman, Chief Innovation Officer, explains how they have implemented open data.</p>
		</div>
		<a href="/projects/montgomery-county-open-data" class="button wodge-button">Read more</a>
	</div>

    <!-- this is the short snippet -->
    <div class="wodge wodge-l">
		<h3 class="wodge-header">Pittsburgh, PA: Open Data</h3>
		<img src="http://www.codeforamerica.org/blog/wp-content/uploads/2014/06/pittsburgh.png" class="wodge-image">
		<div class="wodge-text">
			<p>Pittburgh's open data initiative emerged from a strong Mayoral directive, and now  the city is working to implement processes and practices across departments to make open data the norm. Laura Meixell, the Analytics and Strategy Manager for the City of Pittsburgh (and a former Code for America fellow), is helping lead the charge.</p>
		</div>
		<a href="/projects/pittsburgh-open-data" class="button wodge-button">Read more</a>
	</div>

    <!-- this is the short snippet -->
    <div class="wodge wodge-l">
		<h3 class="wodge-header">Albuquerque, New Mexico: Open Data</h3>
		<img src="http://www.codeforamerica.org/blog/wp-content/uploads/2014/06/abq.png" class="wodge-image">
		<div class="wodge-text">
			<p>Rather than going the typical route of using an open data catalog provider like Socrata or even open source CKAN, Albuquerque has pursued a scrappy do-it-yourself strategy. Mark Leech, Application Development Manager has been leading the City’s open data initiative, ABQ Data. </p>
		</div>
		<a href="/projects/albuquerque-open-data" class="button wodge-button">Read more</a>
	</div>
	
    <!-- this is the short snippet -->
    <div class="wodge wodge-l">
    	<h3 class="wodge-header">Kansas City, MO: Open Data</h3>
    	<img src="http://www.codeforamerica.org/blog/wp-content/uploads/2014/06/kcmo.png" class="wodge-image">
		<div class="wodge-text">
			<p>Millie Crossland, KCMO's technology project liason, explains the three types of stakeholders they found when implementing open data: "Data Go-tos, Process Innovators, and Connectors."</p>
		</div>
    	<a href="/projects/kansas-city-open-data" class="button wodge-button">Read more</a>
    </div>

	<div class="alert"><p><strong>Further reading:</strong> <a href="beyondtransparency.org"><em>Beyond Transparency</em></a>, edited by former Chicago Chief Data Officer Brett Goldstein with Code for America, is an anthology featuring stories and essays  from over twenty experts and practitioners about open data's impact in cities. The book is available to read for free online. You can also purchase a hard copy.</p></div>

	<h4>Build departmental support and executive buy-in</h4>
	<p>A sustainable long-term open data initiative requires cooperation between multiple departmental stakeholders, and support from executive leadership to put resources towards open data. The next step to creating a successful open data initiative is to get buy-in within city hall. You’ll want to start by identifying a small group of supporters who can be the initial champions, and gradually work to build momentum and consensus more broadly. Every city’s internal structure and circumstances are different — there’s no “one size fits all” method to getting political support for open data — but here are some general guidelines to get you started.</p>

	<h4>Who needs to be at the table?</h4>
	<p><strong>Executive leadership:</strong> A successful open data project often involves coordination and cooperation between multiple city departments; having support from City leadership can help ensure the project receives enough resources to be successful. Depending on your city, this might be the Mayor, City Manager, or another executive team member. The executive leadership advocate should be high enough up in the organization to help resolve differences between departments and agencies if they arise (and they probably will!).</p>
	<p><strong>Internal champion:</strong> In addition to executive leadership level sponsorship, it’s important to have a mid-level “boots on the ground” advocate who is invested in driving the open data initiative forward. This internal champion should serve as point person for questions, help define processes and coordinate stakeholders, and support the departmental representatives during the rollout process. Ideally, they will host weekly or bi-weekly “Open Data Office Hours” where folks from other departments can come to for help.</p>
    <p>There’s no "ideal" job title for this person -- in other cities, it has been anyone from the Chief Technology Officer to a communications manager to Open Government Specialist. The important thing is their commitment to making sure the open data initiative succeeds. If you’re reading this guide, the internal champion might be you.</p>
	<p><strong>IT leader:</strong> Because an open data project can involve changes to the administration of existing data-based workflows, data storage repositories, etc., close cooperation of an expert on your municipality’s data infrastructure is essential.</p>
	<p><strong>GIS Specialist:</strong> A great deal of  municipal data is place-based, tied to a specific geographic location.  Having the assistance of a GIS specialist can ensure that data is provided to users in a useful format (e.g., interactive online maps are more helpful to the general public than downloads of raw GIS data files) and that geographic data is accurate.</p>
	<p><strong>Departmental Stakeholders:</strong> Even if your open data initiative is being driven by members of the IT department, getting support from multiple departments across City Hall who own the data you want to release is critical to success (more on prioritizing data for release later). A supportive departmental representative can help spur adoption of open data publication initiatives within their department and while also providing valuable subject matter expertise to the leaders of the city-wide open data project.</p>
	<div class="alert"><p><strong>Further reading:</strong> The <a href="http://www.socrata.com/open-data-field-guide-chapter/assemble-a-winning-team/">Socrata Open Data Field Guide</a> includes additional tips about assembling an open data team.</p></div>	
	<p>Here's some tips for getting departmental stakeholders on board with open data:</p>
	<ul>
		<li>Explain direct benefits to the department (“we’ll reduce the number of citizen calls requesting this information”)</li>
		<li>Assuage fears (“the goal is to increase services provided while reducing costs, but without reducing headcount”)</li>
		<li>Point out opportunities for increased innovation and efficiency (“your rainfall report will be automatically sent to the Water Department and the Street Maintenance Department”)</li>
	</ul>
	<p>One tactic is to prepare department-specific handouts for the director and leadership of each city department. The handout should specify examples of the types of data that department might publicize and included examples of applications and services built on similar data in other cities.  Demonstrating examples of successful projects can help persuade decision-makers to get on board with the plan.</p>

    <div class="badge-heading badge-gov badge-blue" id="intro">
        <h2 id="success-stories">Demonstrating Value: Open data success stories</h2>
    </div>
	
	<p>Here are some quick stories and proof points about how other governments have used open data to help you persuade key stakeholders of the value of open data.</p>
	
	<h3>Public Safety</h3>
	
	<div class="wodge wodge-s">
	    <img src="http://placehold.it/120x120" class="wodge-image" />
		<h4 class="wodge-header">San Francisco: Crime Spotting Map</h4>
		<div class="wodge-button">
	        <a href="http://sanfrancisco.crimespotting.org/" class="button">More</a>
	    </div>
	   	<div class="wodge-text">
	        <p>San Francisco Crimespotting is an interactive map of crimes in San Francisco and a tool for understanding crime in cities, built using open data from the city. Crimespotting lets residents find out what's going on in their neighborhood with interactive maps and customizable RSS feeds of crimes in areas that they care about.</p>
    	</div>
    </div>
    
    <div class="wodge wodge-s">
    	<img src="http://placehold.it/120x120" class="wodge-image" />
	    <h4 class="wodge-header">New York City: Targeting Illegal Building Conversions Inspections</h4>
		<div class="wodge-button">
        	<a href="http://beyondtransparency.org/chapters/part-4/beyond-open-data-the-data-driven-city/" class="button">More</a>
    	</div>
   	    <div class="wodge-text">
            <p>In New York City, dangerous illegal building conversions are a big problem and public safety risk. The government opened and integrated data that had previously been siloed within by several departments and analyzed it to increase accurate inspection targeting and better allocate scarce resources where they will do the most good.</p>
	    </div>
	</div>
    
    <h3>Economic Development</h3>
    	    
    <div class="wodge wodge-s">
	    <img src="http://placehold.it/120x120" class="wodge-image" />
        <h4 class="wodge-header">Asheville, North Carolina: Empowering Startups</h4>
	    <div class="wodge-button">
    	    <a href="http://beyondtransparency.org/chapters/part-1/ashvilles-open-data-journey-pragmatics-policy-and-participation/" class="button">More</a>
	    </div>
	    <div class="wodge-text">
            <p>CIO Jonathan Feldman started “Open Data Day” to bring together citizens journalists, business people, elected officials and others together making opening data a collective issue. Led in partnership with Venture Asheville, the event gave Asheville a chance to highlight business opportunities that arise from publishing open data. One local employer with a staff of 35 uses publicly-available data from municipalities, adds their analysis, and sells it to insurance companies.</p>
        </div>
    </div>
    	    
    <div class="wodge wodge-s">
        <img src="http://placehold.it/120x120" class="wodge-image" />
		<h4 class="wodge-header">Charlotte, NC: Helping Local Organizations Unlock Funding</h4>
		<div class="wodge-button">
        	<a href="http://www.codeforamerica.org/blog/2014/04/23/making-data-actionable-charlottes-quality-of-life-dashboard/" class="button">More</a>
    	</div>
   	    <div class="wodge-text">
            <p>The City of Charlotte publishes detailed neighborhood-level data about a number of quality of life indicators. Local non-profit organizations use the dashboard to find sources and statistics to support grant applications.</p>
	    </div>
	</div>
    	    
    <h3>Citizen Participation </h3>
	
	<div class="wodge wodge-s">
    	<img src="http://placehold.it/120x120" class="wodge-image" />
	    <h4 class="wodge-header">Chicago: Flu Shot Locations</h4>
		<div class="wodge-button">
        	<a href="http://www.codeforamerica.org/blog/2012/11/06/city-of-chicago-adopts-flu-shot-app-built-by-civic-hackers/" class="button">More</a>
    	</div>
   	    <div class="wodge-text">
            <p>During an OpenGov Hack Night event, Tom Kompare, a local hacker heard the Chicago Health Department talk about making it easier for people to find where to get flu shots. Kompare had a prototype site out within a week of the initial event. Another local organization was able to provide feedback on the app and help arrange a meeting with the City to discuss it. After support from the city to get legal and communications departments to sign off, the official app launched within a month.</p>
	    </div>
	</div>
	
    <h3>Health and Human Services</h3>
    
    <div class="wodge wodge-s">
    	<img src="http://placehold.it/120x120" class="wodge-image" />
	    <h4 class="wodge-header">Louisville: Restaurant Inspection Scores on Yelp</h4>
    	<div class="wodge-button">
        	<a href="http://www.foodsafetynews.com/2013/09/yelp-is-posting-health-inspection-scores/#.U6oD__2jm28" class="button">More</a>
    	</div>
       	<div class="wodge-text">
            <p>Louisville Metro Government published restaurant inspection data in an open, standardized format set by a cohort of other cities, third party organizations, and industry. Yelp was then able to consume the data easily and publish it alongside its popular online restaurant reviews, making the data more useful and accessible to the average citizen.</p>
    	</div>
    </div>

	<div class="wodge wodge-s">
    	<img src="http://placehold.it/120x120" class="wodge-image" />
	    <h4 class="wodge-header">San Mateo County: Aggregating Community Services</h4>
		<div class="wodge-button">
        	<a href="http://www.smc-connect.org" class="button">More</a>
    	</div>
   	    <div class="wodge-text">
            <p>San Mateo County worked to create an open database of all local community organizations and the services they offered, and then created a centralized, searchable site called SMC-Connect. This has made it easier for residents and case workers in need to find services they or their clients are eligible for in times of need by providing a single, comprehensive point of reference.</p>
	    </div>
	</div>
	
    <h3>Internal Cost Savings and Efficiency</h3>
    
    <div class="wodge wodge-s">
        <img src="http://placehold.it/120x120" class="wodge-image" />
		<h4 class="wodge-header">Albuquerque: Reducing Transit-Related 311 Calls</h4>
        <div class="wodge-button">
            <a href="http://www.codeforamerica.org/blog/2013/11/26/spotlight-mark-leech-city-of-albuquerque/" class="button">More</a>
        </div>
	   	<div class="wodge-text">
	        <p>Opening data can reduce the number of phone calls for citizens to obtain information. People calling about Transit issues in Albuquerque were usually waiting for a bus and wanting to know where it was right then. Based on this analysis, the City decided to open up their transit data. Making these datasets available saved about $180,000 in 2013 in calls to the 311 call center alone.</p>
    	</div>
    </div>
    
    <div class="wodge wodge-s">
        <img src="http://placehold.it/120x120" class="wodge-image" />
		<h4 class="wodge-header">Oakland: Streamlining Public Records Requests </h4>
        <div class="wodge-button">
            <a href="http://codeforamerica.org/peer-network-training/03-20-2014/" class="button">More</a>
        </div>
	   	<div class="wodge-text">
	        <p>Oakland launched RecordTrac, a user-friendly system to track and submit public requests that makes all past requests open and publicly available. The app displays every message or record uploaded before prompting users to make new submissions. It has helped the City of Oakland process over 2,000 public requests across all city departments in its first year of use — requests that won’t need to be processed again since the information is now easily available to residents.</p>
    	</div>
    </div>
    
   	<div class="wodge wodge-s">
        <img src="http://placehold.it/120x120" class="wodge-image" />
		<h4 class="wodge-header">Chicago: Eliminating 311 Redundancies</h4>
        <div class="wodge-button">
            <a href="http://digital.cityofchicago.org/index.php/open311-and-seeclickfix-helping-to-reduce-redundant-redundancies/" class="button">More</a>
        </div>
	   	<div class="wodge-text">
	        <p>Chicago opened up its 311 data in a standard format, allowing it to easily integrate the existing 311 system with reporting tool SeeClickFix (a web and mobile app that lets residents report, track, and follow up on non-emergency issues). Doing so eliminated the need for city employees to redundantly, manually enter online requests into the City’s 311 system. With the Open311 integration, online requests are sent automatically and entered into the system.</p>
    	</div>
    </div>
    
    <h3>Transparency and Accountability</h3>
   	<div class="wodge wodge-s">
        <img src="http://placehold.it/120x120" class="wodge-image" />
		<h4 class="wodge-header">Boston: Increasing Trust Between Government and Residents</h4>
        <div class="wodge-button">
            <a href="http://hbswk.hbs.edu/item/7393.html" class="button">More</a>
        </div>
	   	<div class="wodge-text">
	        <p>In Boston, a Harvard Business School study showed that when the City released data to show citizens the status and progress on open 311 service requests, citizens expressed a more positive attitude toward government.</p>
    	</div>
    </div>
	
	<div class="badge-heading badge-gov badge-blue" id="publishing">
	    <h2>Opening and Publishing Data</h3>
	</div>
	
	<h3>Prioritizing data for release</h3>
	<p>Where should you start? We suggest starting small: focusing on a few key datasets for your initial release and ensuring that there is a sustainable publishing process in place, rather than doing a huge one-time data dump that will be hard to keep up to date. Former Philadelphia Chief Data Officer Mark Headd <a href="http://www.socrata.com/blog/national-day-civic-hacking-2014-live-blog/">recommends</a> starting with the "Three Bs": Buses (transit data), Bullets (crime data), and Bucks (budget and expenditure data).</p>
	<p>As your open data initiative matures, you can (and should) continually reevaluate and add more data at a later point.</p>
	
	<h3>Eighteen recommended datasets</h3>
	<p>Code for America, in collaboration with the Sunlight Foundation and Open Knowledge Foundation, has identified eighteen of the most important datasets that we recommend every municipality publish. Of course, you might not be ready to release all of these right away, but it’s a good place to start. View the full list <a href="http://us-city.census.okfn.org/faq/">here</a>.</p>
	
	<h3>Other ways to prioritize</h3>
	<p>Here are some other ways to identify high-priority datasets to release.</p>
	<ul>
		<li>Start with your goals: First of all, you should return to the goals you outlined for your open data initiative. Which datasets will be most conducive to achieving your goals?</li>
		<li>Look for low-hanging fruit: What data sets would be easiest to release? Perhaps some departments already publish certain data online (as PDFs, shapefiles, spreadsheets, or other formats) that would be easy to aggregate in the open data catalog. These can be low-barrier fodder to get your open data catalog up and running, and help build momentum to open up more data later.</li>
		<li>...And quick wins: There are many free, open-source apps that are built to use open municipal data . By prioritizing the release of data sets that can be used by these existing apps, you can demonstrate the immediate tangible benefits of open data to citizens and city staff. For example, by publishing the location of storm drains or fire hydrants in your city, you can fairly easily stand up the Adopta application, making it simple for the average citizen to use and consume that data in a way that’s relevant to them. See <a href="#utility">this section</a> for other examples of apps using municipal data.</li>
		<li>Look for existing demand: Examine city website traffic and public records requests to see what data is most often sought out by the public. By making the most-often requested datasets easily available in an open format, you can satisfy public demand and alleviate burdens on departments who frequently have to supply the same information over and over again.</li>
		<li>Ask the public what they want: The public, in particular your local civic hacker community, likely has ideas about what data would be the most valuable and useful to them. Invite citizens to suggest data sets for publication by conducting a survey or requesting input via social media or tools like Mindmixer or Textizen. This in no way obligates you to publish the requested data, but it can be useful information when deciding what data to prioritize.</li>
		<li>Take cues from other cities: Many US municipalities, large and small, have launched open data catalogs over the last few years. Take a look at their open data catalogs to see what the most viewed or most downloaded of their data sets are.</li>
		<li>Include data resources from parent jurisdictions (county, state, federal): Your local data platform might be a local citizen’s first entry into the open data world -- so include links to locally-relevant data sets available in other jurisdictions, such as the federal Census tract maps and data for your city.  Check out data.gov and your state’s open data catalog for geographically-targeted data that your citizens might find useful.</li>
	</ul>
	
	<div class="alert"><p><strong>Further reading:</strong> The Open Data Handbook includes other useful tips on <a href="http://opendatahandbook.org/en/how-to-open-up-data/choose-datasets.html">how to choose datasets</a> to include.</p>
	</div>
    
    <h3>Select an open data platform</h3>
	<p>Before you can publish data, you’ll need somewhere to put it: an <em>open data catalog</em> or <em>open data portal</em>. This is essentially a website where the city can upload and update datasets, and the public can search and download them.</p>
	<p>As with many software choices, your options can be boiled down to:</p>
	<ul>
		<li>Build your own custom data platform solution</li>
		<li>Buy an off-the-shelf data platform (or rent via an SaaS model)</li>
		<li>Borrow from existing open source offerings</li>
	</ul>
	<p>Every city’s requirements are different, but there are two core features integral to any data platform: 1) ability for staff to upload data sets, and 2) ability for visitors to browse, search for, and download data sets.</p>
	<p>In addition, other features are common in many platforms and can be considered high-priority:</p>
	<ul>
		<li>Integrated data manipulation (“transformation”) tools</li>
		<li>Integrated visualization tools</li>
		<li>API access for integration and interoperability</li>
		<li>Connections to other relevant open data sources (county, state, etc.)</li>
	</ul>
	<p>Important criteria to consider when choosing an open data platform include:</p>
	<ul>
		<li>Feature satisfaction</li>
		<li>Total cost of ownership</li>
		<li>Sustainability of solution by IT (support, maintenance)</li>
		<li>Availability of support options (community, vendors, consultants)</li>
	</ul>
	<p>There are two main models for open data platforms: software-as-a-service (SAAS) and self-hosted deployment. There are benefits and drawbacks to each. SaaS options include support and hosting from the vendor, which allows government staff to focus on publishing data, not maintaining the application. Self-hosted options allow for flexibility. There are no maintenance contracts or vendors to manage, but staff resources will be required to sustain the portal.</p>

    <h3>Comparing major platform options</h3>
	
	<h4><a href="http://ckan.org">CKAN</a> (and <a href="http://nucivic.com/dkan/">DKAN</a>)</h4>
	<p>CKAN -- the Comprehensive Knowledge Archive Network -- is open source software powering open data platforms across the world.  Provided by the Open Knowledge Foundation in the UK, CKAN is used at the local, regional, national, and international levels of government as well as in academia.  The CKAN application is written in the Python programming language.</p>
	<p>CKAN is used for over two dozen official government data portals around the world. Data.gov, the United States Federal Government’s open data catalog, chose CKAN to power its platform. There are pre-deployed instances of CKAN that are available to use free of charge to governments and other data producers at <a href="http://www.civicdata.com/en/home">CivicData.com</a> (powered by Accela) and <a href="http://datahub.io/">DataHub.io</a>.</p>
	<p><a href="http://nucivic.com/dkan/">DKAN</a> is a Drupal-based implementation of CKAN that offers an easier installation and support burden while preserving API compatibility.</p>
	
	<div class="layout-minim">
		<div class="block-gray">
    		<h5>Pros:</h5>
    		<ul>
    			<li>Catalog and repository and visualization platform</li>
    			<li>Ideation and community features</li>
    			<li>Stable and relatively large developer/support community</li>
    			<li>Extensive documentation available</li>
    			<li>Documented instructions for deployment to VirtualBox or Amazon EC2</li>
    			<li>Proven installation base in nations and regions throughout Europe and hopefully soon US</li>
    		</ul>
		</div>
	</div>
	
	<div class="layout-minim">
		<div class="block-gray">
		    <h5>Cons:</h5>
    		<ul>
    			<li>Relatively complex application environment (Python/pylons, nginx, elastic search, etc.)</li>
    			<li>Limited existing US municipal or state success stories</li>
    			<li>Requires ongoing support resources internally to maintain the software unless you use one of the pre-deployed instances mentioned above.</li>
    		</ul>
		</div>
    </div>
    

	<h4><a href="https://github.com/azavea/Open-Data-Catalog">OpenDataCatalog</a></h4>
	<p>OpenDataCatalog (ODC) is open source software originally created by Azavea for the city of Philadelphia.  The software is available for download on Github and a community of developers and implementers continue to work on improving the software. ODC includes options for data owners to submit data for consideration and for registered public users to nominate a type of data they would like to see openly available to the public. ODC is written using Django, Python and PostgreSQL.</p>
	<p>ODC has also been used in <a href="http://www.opendatacincy.org/">Cincinnati</a> and <a href="http://catalog.opensandiego.org/">San Diego</a> for community-launched data catalogs.</a>.</p>
	
	<div class="layout-minim">
		<div class="block-gray">
		    <h5>Pros:</h5>
    		<ul>
    			<li>Multiple success stories in US, creating a community of support among implementers in different cities.</li>
    		</ul>
    	</div>
	</div>

	<div class="layout-minim">
		<div class="block-gray">
    		<h5>Cons:</h5>
    		<ul>
    			<li>Moderately complex application environment (Python base)</li>
    			<li>Limited commercial support options</li>
    			<li>Relatively immature feature set</li>
    			<li>Requires styling out of the box</li>
    			<li>No repository capabilities</li>
    			<li>Requires ongoing support resources internally</li>
    		</ul>
    	</div>
    </div>
    
    
    <h4><a href="http://www.socrata.com">Socrata</a></h4>
    <p>Socrata is the most popular commercial data platform provider in the United States. Socrata offers a turnkey SaaS cloud-hosted data catalog, paid for on a subscription basis. The Socrata platform includes API abilities and sitewide analytics that track consumption and engagement metrics.</p>
    <p>Socrata is used by dozens of municipal governments, including <a href="http://data.baltimorecity.gov">Baltimore</a>, <a href="https://data.austintexas.gov/">Austin</a>, <a href="http://data.cityofchicago.org">Chicago</a>, <a href="http://data.seattle.gov">Seattle</a>, and <a href="http://nyc.gov/data">New York City</a>.</p>
    
    <div class="layout-minim">
    	<div class="block-gray">
	        <h5>Pros:</h5>
    		<ul>
    			<li>Well-supported and relatively turnkey option</li>
    			<li>Lots of experience with municipal government</li>
    			<li>Add-on services like a performance management tool</li>
    		</ul>
    	</div>
    </div>
    
	<div class="layout-minim">
		<div class="block-gray">
    		<h5>Cons:</h5>
    		<ul>
    			<li>Depending on options, can be more costly</li>
    			<li>A more complicated interface</li>
    		</ul>
		</div>
	</div>
	
	
	<h4><a href="http://www.junar.com">Junar</a></h4>
	<p>Junar is another cloud-based SaaS option that includes RESTful API abilities and analytics. Pricing plans for organizations range start at $750 per month.</p>
	<p>Junar is used by the <a href="http://paloalto.opendata.junar.com/dashboards/7539/2010-census-data/">City of Palo Alto</a>.</p>
	
	<div class="layout-minim">
		<div class="block-gray">
		    <h5>Pros:</h5>
    		<ul>
    			<li>Tiered pricing plan starts below $5,000, making it under the procurement threshold for many cities.</li>
    			<li>Easy-to-use interface, helps users easily collect and create datasets by pulling previously disorganized information from a computer</li>
    			<li>White label branding</li>
    		</ul>
    	</div>
	</div>
	
	<div class="layout-minim">
		<div class="block-gray">
    		<h5>Cons:</h5>
    		<ul>
    			<li>Smaller capacity for API calls than Socrata</li>
    			<li>Limited search capabilities</li>
    			<li>Does not provide community participation features</li>
    		</ul>
    	</div>
	</div>
	
    <h4><a href="https://opendata.arcgis.com/about">Esri ArcGIS Open Data</a></h4>
    <p>ArcGIS Open Data is a hosted web application provided by ESRI that allows any organization using ArcGIS Online to easily open up data stored in that system. Data providers can easily enable open data, specify open data groups, and create and publicize their open data without hosting their own site.</p>

    <div class="layout-minim">
    	<div class="block-gray">
	        <h5>Pros:</h5>
	        <ul>
    			<li>Many governments already have an existing relationship with ESRI.</li>
    			<li>Easily integrates with existing systems.</li>
    		</ul>
    	</div>
    </div>
    
	<div class="layout-minim">
		<div class="block-gray">
    		<h5>Cons:</h5>
    		<ul>
    			<li>May be best suited for geographic data.</li>
    			<li>The offering is currently in beta as of June 2014.</li>
    		</ul>
    	</div>
	</div>
	
    <div class="alert"><p><strong>Further reading:</strong> 2014 Code for America Fellows compiled this <a href="https://docs.google.com/a/codeforamerica.org/document/d/1UKttbrp2AdYZOh8dk2fa1x2xbAuuRR04GI_MuqhDueo/edit">summary</a> which further compares features and costs for some of the most common open data platform providers.</p>
    </div>

	<h3>Publish your data</h3>
	
	<p>After choosing what data you are going to publish and choosing where you're going to put it, there are a few steps to make it open. In order to be considered truly open, government data should be:</p>
	
	<ul>
		<li>Open by default</li>
		<li>Freely available in non-proprietary formats</li>
		<li>Openly licensed</li>
		<li>Downloadable in bulk</li>
		<li>Published in common formats, when available</li>
		<li>In digital form and machine readable (such as .csv)</li>
		<li>Placed in centralized, easily accessible location (such as open data portal)</li>
		<li>Accompanied by metadata that attests to the data’s structure, accuracy, assumptions, ownership, completeness, and currency</li>
	</ul>
	
	<div class="alert"><p><strong>Further reading:</strong> The <a href="http://opengovdata.org/">8 Principles of Open Data</a> lays out an in-depth definition of open data.</p></div>
	
	<p>While that might seem like a long, complicated list of requirements, there’s just a few steps to get most of the way there. If you don’t check every one of those boxes, it’s okay! You are still making meaningful progress towards open data. The reality is that there’s always going to be room for improvement. Here’s how to get started once you’ve chosen a dataset to open.</p>
	<p>First of all, do some due diligence to make sure you’ve covered your bases. Do a review of the data to account for its completeness, currency, and accuracy. If it is not perfect, again, that’s okay! It’s better to release some data than nothing at all, as long as it isn’t misleading or factually inaccurate; just make sure to clearly note any omissions or limitations in the metadata (see below) so data consumers understand what they’re looking at.</p>
	<p>If you haven’t already, make sure that any key stakeholders or data owners are aware that the data is going to be released (not only will this keep you out of hot water, but they also might have valuable suggestions about how to structure or position the data). Double-check to make sure there are no restrictions or privacy concerns surrounding the release of the data.</p>
	<p>Adding metadata, or descriptive information about the dataset, is another important step to ensure that users know what the information is, when it was last updated, and what it includes. The <a href="https://docs.google.com/a/codeforamerica.org/document/d/1Kd4AOoRG8q18PVZ0JMusgKWJmgjrWvv3iTdKUjLEdT4/edit">Philadelphia Open Data Guidebook</a> has suggestions about basic metadata to include with any published dataset.</p>
	<p>Next, choose and apply an “open license” that makes the data legally open and freely available for anyone to use and share. The Open Knowledge Foundation <a href="http://opendatahandbook.org/en/how-to-open-up-data/apply-an-open-license.html">Open Data Handbook</a> has some good guidelines on how to choose a license.</p>
	<p>Now, you need to make the data technically open and publish it on your open data platform. The exact steps for this will depend on what format your data currently exists in, and what format you want it to be. Often it will involve an ETL, or “Extract, Transfer, Load” — a bit of code that gets data out of one system, converts it to the desired format, and puts it into another system. Here’s some <a href="https://github.com/daguar/etl-for-america/wiki">useful information and resources</a> about ETLs from former Code for America fellow Dave Guarino (note: this is targeted at technical folks).</p>

	<div class="badge-heading badge-gov badge-blue" id="sustainability">
	    <h2>Planning for Sustainability</h2>
	</div>
	
	<h3>Create an open data policy</h3>
	<p>Eventually, you'll want to make open data publication standard operating procedure via a city ordinance or executive order. This is a key step in becoming truly “open by default.”</p>
	<p>As of June 2014, thirty cities and three counties in the United States have passed open data policies, and the number is growing rapidly. There are many existing examples that you can build off of as you begin drafting an open data policy.</p>
	
	<div class="alert"><p><strong>Further reading:</strong> the Sunlight Foundation has created a living set of open data policy <a href="http://sunlightfoundation.com/opendataguidelines/">guidelines</a> to address what data should be public, how to make data public, and how to implement policy, including sample policy language for each principle.</p></div>
	
	<h4>When is the right time for a policy?</h4>
	<p>In some cities, an open data policy is the first step towards open data. Passing the policy creates an executive mandate that drives momentum around implementing open data. In Los Angeles, for example, Mayor Garcetti <a href="http://www.lamayor.org/garcetti_directs_city_departments_to_collect_data_for_open_data_initiative">issued</a> an Executive Order shortly after entering office in 2013, directing all departments to collect data that they generate and prepare it for release in early 2014. This led to the launch of the city’s open data portal in early 2014. This can be a useful strategy if you have supportive executive leadership, but need leverage to generate buy-in from departments.</p>
	<p>In other cities, the policy actually follows implementation of open data. Louisville Metro Government, for example, had a long-standing open data program and nationally acclaimed data-driven performance management initiative before finally making <a href="http://sunlightfoundation.com/blog/2013/10/21/new-louisville-open-data-policy-insists-open-by-default-is-the-future/">open data official policy</a> in 2013. This can be a useful strategy if you have strong grassroots and departmental-level support and can “bootstrap” an open data initiative; after you have demonstrated value to leadership, passing a policy can be a finishing touch to establish formal, ongoing commitment.</p>
	
	<h4>Example Policies</h4>
	<p>Here are some examples of different kinds of open data policies that you could adapt for your city:</p>
	<ul>
		<li><a href="http://www.ci.south-bend.in.us/sites/default/files/files/Mayor_2013-Open%20Portal%20Exec%20Order.pdf">City of South Bend Executive Order No. 2-2013</a></li>
		<li><a href="http://www.louisvilleky.gov/Mayor/IWantTo/open_data_order.htm">City of Louisville Executive Order No. 1, Series 2013</a></li>
		<li><a href="http://www.ci.austin.tx.us/edims/document.cfm?id=161941">City of Austin Resolution No. 20111208-074</a></li>
	</ul>
	
	<div class="alert"><p><strong>Further reading:</strong> For more examples, the Sunlight Foundation maintains a <a href="http://sunlightfoundation.com/policy/opendatamap/">comprehensive list</a>.</p>
	</div>
	
	<h3>Appoint staff to be responsible for data management</h3>
	<p>For open data to “stick,” there needs to be staff responsible and accountable for implementation. This doesn’t necessarily mean hiring additional staff; responsibility can be delegated to existing employees. In some cities, the internal open data “champion” continues to drive and organize open data throughout the city, even if that’s not necessarily one of their official core job functions, often leading a cross-departmental open data working group. Other cities create a dedicated position to oversee open data implementation, often called a Chief Data Officer. Others require that each department designate a staff member to be their point-person for open data.</p>
	
	<h4>Chief Data Officer</h4>
	<p>The primary responsibility of a Chief Data Officer is to operationalize open data across the government. The White House <a href="http://project-open-data.github.io/cdo/">defines</a> the role as “part data strategist and adviser, part steward for improving data quality, part evangelist for data sharing, part technologist, and part developer of new data products.”</p>
	<p>Not all governments establish a formal Chief Data Officer position, and there are many successful open data initiatives operating without one. However, if it’s possible, appointing a senior-level official to oversee the implementation and execution can go a long way towards making open data useful, sustainable, and actionable.</p>
	<p>Here are a few job descriptions for government Chief Data Officers:</p>
	<ul>
		<li><a href="http://project-open-data.github.io/cdo/">Sample CDO job description</a> from the White House’s Project Open Data</li>
		<li><a href="https://docs.google.com/a/codeforamerica.org/document/d/1z4pfHRiuKgOR6RKMjeHOlucBv6kCXlvHy5d1edpDXG4/edit">Philadelphia</a> Chief Data Officer job description</li>
		<li><a href="https://docs.google.com/a/codeforamerica.org/document/d/1q1cUIe90d3EtqYsyy6Fl-uYKfyGJ4CCdqzELX7at_a4/edit#heading=h.h1v1sgwlh3yq">San Francisco</a> Chief Data Officer job description</li>
	</ul>
	
	<h4>Department coordinators</h4>
	<p>An Open Data Coordinator (ODC) is a government employee designated by a department or agency to coordinate open data efforts for that department. Many open data policies mandate that an ODC be designated in each department and participate in an ongoing, city-wide open data working group chaired by the open data “champion” (whether that is a Chief Data Officer or somebody else).</p>
	<p>Responsibilities might include identifying and publishing of data sets to open data portal, addressing feedback from the public on the department’s public data, and reporting on progress to the broader working group. Some departments have had success in giving this responsibility to the person who is already managing public records requests for the department, as these roles are closely related.</p>
	<p>Several governments have included a requirement to appoint departmental ODCs in their policy, including <a href="https://docs.google.com/a/codeforamerica.org/document/d/16jIQAxABoKx6FXYUFPgdy6NeQo4_R7ufKb-x4gePxNc/edit">Pittsburgh</a>, <a href="http://www.nyc.gov/html/doitt/downloads/pdf/nyc_open_data_tsm.pdf">New York City</a> (see section 3.1.2), and <a href="http://www.cambridgema.gov/itd/opendata/opendatainitative.aspx">Cambridge, MA</a>.</p>

	
	<div class="badge-heading badge-gov badge-blue" id="utility">
	    <h2>Making open data useful</h2>
	</div>
	
	<h3>Use common open data formats</h3>
	<p>We've seen large cities with large budgets do amazing things with in-house technology and predictive analytics teams but making your data useful can be as easy as opening data in common formats.</p>
	<p>Code for America's recommended formats make open data easier to access, use, and move to the applications people already use to make decisions. Aligning with these common standards can be as simple as reformatting data before publishing it.</p>
	<p>When cities across the country format their data in the same way, technologists can build tools that scale across cities at a fraction of the effort and cost. Open data formats streamline the process of finding and using data across city agencies. That means that civic apps can come from technologists with talent and drive, not just big companies with cash on hand.</p>
	<p>A number of high profile tech companies with broad reach want to help government do more with open data:</p>
	<ul>
		<li><a href="https://developers.google.com/transit/gtfs/">General Transit Feed Specification</a> (GTFS): Google thinks data on mass transit helps people stay on time and get where they want to go.</li>
		<li><a href="http://codeforamerica.org/our-work/data-formats/housefacts/index.html">Housefacts Specification</a>: Trulia and Zilllow want to share your residential building inspection data with the 90 million people who visit their site per month because they also want to help people make good choices about their next home.</li>
		<li><a href="http://codeforamerica.org/our-work/data-formats/LIVES/index.html">Local Inspector Value Entry Specification</a> (LIVES): Yelp is eager to share the results of restaurant inspections because they want to help people find restaurants that aren't going to get them sick.</li>
	</ul>
	
	<div class="alert"><p><strong>Further reading:</strong> <a href="http://codeforamerica.org/our-work/data-formats/">Learn more</a> about open data standards that Code for America supports.</p></div>
	
	<h3>Hold a hackathon</h3>
	<p>Civic hackathons serve as a great community engagement tool, bringing together technologists and civic leaders to brainstorm and develop applications using open data. These coding marathons allow people in the civic space and citizens to work with developers to creatively use civic data to address community issues. The success of hackathons, like <a href="http://hackforchange.org/">National Day of Civic Hacking</a>, is contingent on several factors, one being the availability of open data. The applications developed at hackathons are often great outcomes, but hackathons are best approached as a means to increase resident participation and provide a platform for community collaboration.</p>
	<p>Successful hackathons tap into both the civic and local developer communities. So, marketing them is of the utmost importance. Socrata offers a comprehensive <a href="http://www.socrata.com/wp-content/uploads/2013/05/How-to-Run-a-Hackathon.pdf">guide</a> to running, marketing, and managing a hackathon, which suggests contacting local developers, posting in high-traffic forums, and posting fliers at local universities in computer science departments to generate interest. Reaching out to groups like Code for America and Socrata can be key as well, since each group is tied to a large network of technologists in the civic space.</p>
	<p>Support from the local government is key in citizen engagement. Announcing the hackathon at council meetings and getting members within the city government to encourage participation among their constituents is a good way to create a buzz outside of the developer community. Excitement about a hackathon within the local government can serve as a hub of interest for the rest of the community.</p>
	
	<div class="alert"><p><strong>Further reading:</strong> Socrata has a step-by-step guide to <a href="http://www.socrata.com/wp-content/uploads/2013/05/How-to-Run-a-Hackathon.pdf">how to plan a hackathon</a> using open data.</p></div>
	</div>

	<h3>Deploy apps that use open data</h3>
	<p>Citizen-facing apps are a great way to make open data useful for non-technologists. By providing a user-friendly interface to the data through a simple web or mobile app, you get city information directly into the hands of residents. Other cities and civic hackers have built many free, open source civic apps that are available for governments to redeploy for their own communities. (“Open source” means that the software code is freely available for others to use without restrictions, much like open data.)</p>

	<div class="alert"><p><strong>Further reading:</strong> Open source expert Ben Balter has put together a <a href="http://ben.balter.com/open-source-for-government/">guide</a> for government employees who want to learn more about open source and participate in the open source community.</p>
	</div>

	<p>It’s important to note that just because the code is free doesn’t mean there won’t be costs associated with redeployment. Technical resources are needed to customize, launch, and maintain the app. Still, open source civic apps can be useful quick wins to demonstrate the value and use cases of open data. Here are a few recommended open source apps that use open data which you can customize and redeploy for your community.</p>
	
	<h4>Recommended apps</h4>
    <ul>
        <li class="layout-crotchet">
            <article class="teaser teaser-app">
                <header class="teaser-header">
                    <a href="../../../apps/adopt-a-hydrant" title="Adopt-a-Hydrant">
                        <h1 class="teaser-title">Adopt-a-Hydrant</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    <p>Adopt-a-hydrant allows citizens to claim responsibility for shoveling out fire hydrants after heavy snowfall.</p>
                    <h2 class="text-whisper">Environment</h2>
                    <p>Ruby on Rails with Postgres database</p>
                    <h2 class="text-whisper">Redeploy</h2>
                    <p>Use the code in the <a href="https://github.com/codeforamerica/adopt-a-hydrant" title="Github repository">Github repository</a> or <a href="http://www.dobt.co/adopta/" title="DOBT’s hosted Adopta">DOBT’s hosted Adopta</a>.</p>
                    <p><a href="../../../apps/adopt-a-hydrant" title="Learn more about this app">Learn more about this app</a></p>
                </div>
                <footer class="teaser-footer">
                    <a href="../../../apps/adopt-a-hydrant" class="teaser-masthead">
                        <img class="teaser-image" src="../../../media/images/apps/adopt-a-hydrant.png" />
                    </a>
                </footer>
            </article>
        </li>
        <li class="layout-crotchet">
            <article class="teaser teaser-app">
                <header class="teaser-header">
                    <a href="../../../apps/click-that-hood">
                        <h1 class="teaser-title">Click That Hood</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    <p>Click That ‘Hood challenges players to quickly identify various neighborhoods of a city. The game began with a clickable map of just one city, but now includes a growing list of 86 different locations across 11 countries, through an open source community.</p>
                    
                    <h2 class="text-whisper">Environment</h2>
                    <p>ExpressJS + NodeJS application.</p>
                    
                    <h2 class="text-whisper">Redeploy</h2>
                    <p>Follow <a href="https://github.com/codeforamerica/click_that_hood#development-setup">installation instructions in the README</a>, or <a href="https://github.com/codeforamerica/click_that_hood/pulls?direction=desc&amp;page=1&amp;sort=created&amp;state=closed">open a Github pull request</a> with your new geographic quiz.</p>
                    
                    <p><a href="../../../apps/click-that-hood">Learn more about this app</a></p>
                </div>
                <footer class="teaser-footer">
                    <a href="../../../apps/click-that-hood" class="teaser-masthead">
                        <img class="teaser-image" src="../../../media/images/apps/click-that-hood.jpg" />
                    </a>
                </footer>
            </article>
        </li>
        <li class="layout-crotchet">
            <article class="teaser teaser-app">
                <header class="teaser-header">
                    <a href="../../../apps/to-the-trails">
                        <h1 class="teaser-title">To the Trails</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    <p>To The Trails is a responsive web application that helps citizens find information on any trail regardless of jurisdiction or the device they use.</p>
                    
                    <h2 class="text-whisper">Environment</h2>
                    <p></p>
                    
                    <h2 class="text-whisper">Redeploy</h2>
                    <p></p>
                    
                    <p><a href="../../../apps/to-the-trails">Learn more about this app</a></p>
                </div>
                <footer class="teaser-footer">
                    <a href="../../../apps/to-the-trails" class="teaser-masthead">
                        <img class="teaser-image" src="../../../media/images/apps/to-the-trails.jpg" />
                    </a>
                </footer>
            </article>
        </li>
        <li class="layout-crotchet">
            <article class="teaser teaser-app">
                <header class="teaser-header">
                    <a href="../../../apps/look-at-cook" title="Look At Cook">
                        <h1 class="teaser-title">Look at Cook</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    <p>Look at Cook is an open source budget visualization. It allows visitors to browse budgets, by expenditures and appropriations over time, and dive in to breakdowns of every fund, department or agency.</p>
                    
                    <h2 class="text-whisper">Environment</h2>
                    <p>jQuery, Backbone, Bootstrap</p>
                    
                    <h2 class="text-whisper">Redeploy</h2>
                    <p>Use the code in the <a href="https://github.com/open-city/look-at-cook" title="Github repository">Github repository</a> or <a href="http://datamade.us/civic-apps/look-at-cook/" title="contact DataMade for custom deployments">contact DataMade for custom deployments</a>.</p>
                    
                    <p><a href="../../../apps/look-at-cook" title="Learn more about this app">Learn more about this app</a></p>
                </div>
                <footer class="teaser-footer">
                    <a href="../../../apps/look-at-cook" class="teaser-masthead">
                        <img class="teaser-image" src="http://www.codeforamerica.org/blog/wp-content/uploads/2014/06/Screen-Shot-2014-06-30-at-1.40.11-PM.png" />
                    </a>
                </footer>
            </article>
        </li>
        <li class="layout-crotchet">
            <article class="teaser teaser-app">
                <header class="teaser-header">
                    <a href="../../../apps/flu-shot-finder" title="Flu Shot Finder">
                        <h1 class="teaser-title">Flu Shot Finder</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    <p>The Flu Shot Finder is a map-based web application that helps users find nearby clinics offering free flu shots by entering in their address or by using a GPS-enabled mobile device.</p>
                    
                    <h2 class="text-whisper">Environment</h2>
                    <p>HTML/CSS/Javascript web app with Google Fusion Tables</p>
                    
                    <h2 class="text-whisper">Redeploy</h2>
                    <p>Use the code in the <a href="https://github.com/tkompare/flushots2013" title="Github repository">Github repository</a>.</p>
                    
                    <p><a href="../../../apps/flu-shot-finder" title="Learn more about this app">Learn more about this app</a></p>
                </div>
                <footer class="teaser-footer">
                    <a href="../../../apps/flu-shot-finder" class="teaser-masthead">
                        <img class="teaser-image" src="http://www.codeforamerica.org/blog/wp-content/uploads/2014/06/Screen-Shot-2014-06-30-at-5.38.36-PM.png" />
                    </a>
                </footer>
            </article>
        </li>
    </ul>
    
    <div class="alert"><p><strong>Further reading:</strong> More apps using open civic data (both free and paid) can be found on the <a href="http://codeforamerica.org/apps/">Code for America Apps page</a>.</p>
    </div>

	<div class="badge-heading badge-gov badge-blue" id="resources">
	    <h2>Further Resources</h2>
	</div>
	
	<ul class="teasers">
    	<li class="layout-crotchet">
            <article class="teaser">
                <header class="teaser-header">
                    <a href="/library/item/e79acf1d684afe9d">
                        <h1 class="teaser-title">Beyond Transparency: Open Data and the Future of Civic Innovation</h1>
                    </a>
                </header>
                <div class="teaser-body">
                </div>
                <footer class="teaser-footer">
                    <a href="/library/item/e79acf1d684afe9d" class="teaser-masthead">
                        <img class="teaser-image" src="/library/media/images/generic-document.png" style="top: 0px; position: relative">
                        <span class="teaser-type teaser-type-article">Text, 2013</span>
                    </a>
                    <a href="/library/category/Defaulting+to+Open" class="teaser-source">Defaulting to Open</a>
                </footer>
            </article>
        </li>
        <li class="layout-crotchet">
            <article class="teaser">
                <header class="teaser-header">
                    <a href="/library/item/af17f047ed4f8bda">
                        <h1 class="teaser-title">Civic Data Standards in Public Health</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    
                </div>
                <footer class="teaser-footer">
                    <a href="/library/item/af17f047ed4f8bda" class="teaser-masthead">
                        <img class="teaser-image" src="http://img.youtube.com/vi/5EuN2y9Xv44/0.jpg" style="top: -34px; position: relative">
                        <span class="teaser-type teaser-type-article">Video, 2013</span>
                    </a>
                    <a href="/library/category/Defaulting+to+Open" class="teaser-source">Defaulting to Open</a>
                </footer>
            </article>
        </li>
        <li class="layout-crotchet">
            <article class="teaser">
                <header class="teaser-header">
                    <a href="/library/item/01f5990871f6da5b">
                        <h1 class="teaser-title">Government as a Platform: Google Transit &amp; GTFS</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    
                </div>
                <footer class="teaser-footer">
                    <a href="/library/item/01f5990871f6da5b" class="teaser-masthead">
                        <img class="teaser-image" src="http://i.vimeocdn.com/video/247362781_640.jpg" style="top: -34px; position: relative">
                        <span class="teaser-type teaser-type-article">Video, 2011</span>
                    </a>
                    <a href="/library/category/Defaulting+to+Open" class="teaser-source">Defaulting to Open</a>
                </footer>
            </article>
        </li>
        <li class="layout-crotchet">
            <article class="teaser">
                <header class="teaser-header">
                    <a href="/library/item/5022bf668014791a">
                        <h1 class="teaser-title">Open Data in New Orleans</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    
                </div>
                <footer class="teaser-footer">
                    <a href="/library/item/5022bf668014791a" class="teaser-masthead">
                        <img class="teaser-image" src="http://img.youtube.com/vi/vfmnn1xygjw/0.jpg" style="top: -34px; position: relative">
                        <span class="teaser-type teaser-type-article">Video, 2013</span>
                    </a>
                    <a href="/library/category/Defaulting+to+Open" class="teaser-source">Defaulting to Open</a>
                </footer>
            </article>
        </li>
        <li class="layout-crotchet">
            <article class="teaser">
                <header class="teaser-header">
                    <a href="/library/item/open-data-getting-started">
                        <h1 class="teaser-title">Open Data: Getting Started</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    
                </div>
                <footer class="teaser-footer">
                    <a href="/library/item/open-data-getting-started" class="teaser-masthead">
                        <img class="teaser-image" src="http://img.youtube.com/vi/XQJPBzdOrM4/0.jpg" style="top: -34px; position: relative">
                        <span class="teaser-type teaser-type-article">Video, 2013</span>
                    </a>
                    <a href="/library/category/Defaulting+to+Open" class="teaser-source">Defaulting to Open</a>
                </footer>
            </article>
        </li>
        <li class="layout-crotchet">
            <article class="teaser">
                <header class="teaser-header">
                    <a href="/library/item/21df031b688f412b">
                        <h1 class="teaser-title">OpenBaltimore</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    
                </div>
                <footer class="teaser-footer">
                    <a href="/library/item/21df031b688f412b" class="teaser-masthead">
                        <img class="teaser-image" src="http://img.youtube.com/vi/A7Ec7S7hUGE/0.jpg" style="top: -34px; position: relative">
                        <span class="teaser-type teaser-type-article">Video, 2013</span>
                    </a>
                    <a href="/library/category/Defaulting+to+Open" class="teaser-source">Defaulting to Open</a>
                </footer>
            </article>
        </li>
        <li class="layout-crotchet">
            <article class="teaser">
                <header class="teaser-header">
                    <a href="/library/item/0f5609cf81d42b4b">
                        <h1 class="teaser-title">SMS Restaurant Inspection Lookup</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    
                </div>
                <footer class="teaser-footer">
                    <a href="/library/item/0f5609cf81d42b4b" class="teaser-masthead">
                        <img class="teaser-image" src="http://img.youtube.com/vi/MnV5hln6vSA/0.jpg" style="top: -34px; position: relative">
                        <span class="teaser-type teaser-type-article">Video, 2012</span>
                    </a>
                    <a href="/library/category/Defaulting+to+Open" class="teaser-source">Defaulting to Open</a>
                </footer>
            </article>
        </li>
        <li class="layout-crotchet">
            <article class="teaser">
                <header class="teaser-header">
                    <a href="/library/item/45ba47877060d5fa">
                        <h1 class="teaser-title">The Story of Open Data in Santa Cruz</h1>
                    </a>
                </header>
                <div class="teaser-body">
                    
                </div>
                <footer class="teaser-footer">
                    <a href="/library/item/45ba47877060d5fa" class="teaser-masthead">
                        <img class="teaser-image" src="http://img.youtube.com/vi/RH4pI-pX8Es/0.jpg" style="top: -34px; position: relative">
                        <span class="teaser-type teaser-type-article">Video, 2012</span>
                    </a>
                    <a href="/library/category/Defaulting+to+Open" class="teaser-source">Defaulting to Open</a>
                </footer>
            </article>
        </li>
	</ul>
	
	<div class="alert-info"><p><em>This guide is in beta and we'll be continuing to develop it. <a href="https://github.com/codeforamerica/codeforamerica.org/issues?state=open">Help us improve</a> this resource by submitting an issue or pull request on Github, or email us with comments and suggestions: gov-staff [at] codeforamerica [dot] org.</em></p>
	</div>

</section>

<?php include_once('../_includes/footer.php'); ?>

<?php include_once('../_includes/foot.php'); ?>