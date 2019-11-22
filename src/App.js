import React from 'react';

function App() {
	return (
		<div className="App">
			<div id="main">
				<div className="container">
					<div className="row">

						<div className="col-md-10 col-md-offset-1">
							<div className="col-md-12 page-body">
								<div className="row">


									<div className="sub-title">
										<a href="index.html">
											<h1>I Am Tahmid</h1>
										</a>
										<nav className="nav">
											<a href="about.html" className="">
												<h1>About</h1>
											</a>
											<a href="contact.html" className="">
												<h1>Contact</h1>
											</a>
											<a href="#" className="btn-header-search"><i className="icon-magnifier"></i></a>
										</nav>
									</div>


									<div className="col-md-12 content-page">

										<ul className="tag-nav">
											<li><a href="">PHP</a></li>
											<li><a href="">MYSQL</a></li>
											<li><a href="">JAVASCRIPT</a></li>
											<li><a href="">LARAVEL</a></li>
											<li><a href="">MONGODB</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	);
}

export default App;
