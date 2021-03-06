import { useState } from "react"
import Title from './components/Title';
import Form from './components/Form';
import Result from './components/Result';
import App from './components/App';
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
	const registerWeight = (e) => {
		e.preventDefault();
		var protocol = location.protocol;
		var url = location.host;
		// TODO:GraphQLでweightdate取得
		axios.get(protocol + '//' + url + '/graphql?query=mutation+record{createRecord(user_id:1, weight:' + weight + '){user_id, weight}}').then(res => {
			setResults({
				weight: res.data.data.createRecord.weight,
				user_id: res.data.data.createRecord.user_id,
				// date: res.data.data.created_at
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
						<Form setWeight={setWeight} registerWeight={registerWeight} />
						<Result results={results} />
						<App results={results}/>
					</div>
				</div>
			</div>
		</div>
	);
};

export default Index;
