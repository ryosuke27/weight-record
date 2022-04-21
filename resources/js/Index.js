import Title from './components/Title';
import Form from './components/Form';

function Index() {
	return (
		<div className="app">
			<div className="container">
				<div className="row justify-content-center">
					<div className="col-md-8">
						<div className="card"></div>
						<Title />
						<Form />
					</div>
				</div>
			</div>
		</div>
	);
};

export default Index;
