import { useState } from "react"
import Title from './components/Title';
import Form from './components/Form';
import Result from './components/Result';
import axios from 'axios';

function Index() {
	const [weight, setWeight] = useState("");
	const getWeight = (e) => {
		e.preventDefault();
		// console.log(e);
		// TODO:GraphQLでweightdate取得
		axios.get().then(res => console.log(e))
	}
	return (
		<div className="app">
			<div className="container">
				<div className="row justify-content-center">
					<div className="col-md-8">
						<div className="card"></div>
						<Title />
						<Form setWeight={setWeight} getWeight={getWeight}/>
						<Result />
					</div>
				</div>
			</div>
		</div>
	);
};

export default Index;
