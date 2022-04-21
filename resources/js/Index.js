import { useState } from "react"
import Title from './components/Title';
import Form from './components/Form';
import Result from './components/Result';
import axios from 'axios';

axios.defaults.baseURL = 'http://localhost:8000';
axios.defaults.headers.post['Content-Type'] = 'application/json;charset=utf-8';
axios.defaults.headers.post['Access-Control-Allow-Origin'] = '*';

function Index() {
	const [weight, setWeight] = useState("");
	const [results, setResults] = useState({
		weight: "",
		name: "",
		date: ""
	})
	const getWeight = (e) => {
		e.preventDefault();
		var protocol = location.protocol;
		var url = location.host;
		// TODO:GraphQLでweightdate取得
		axios.get(protocol + '//' + url + '/graphql?query=query+UserQuery{user(id:1){id, email}}').then(res => {
			setResults({
				weight: "res.data.weight",
				name: "res.data.name",
				date: "res.data.date"
			})
		})
	}
	return (
		<div className="app">
			<div className="container">
				<div className="row justify-content-center">
					<div className="col-md-8">
						<div className="card"></div>
						<Title />
						<Form setWeight={setWeight} getWeight={getWeight}/>
						<Result results={results} />
					</div>
				</div>
			</div>
		</div>
	);
};

export default Index;
