import { useState } from "react";

function Form() {
    const [weight, setWeight] = useState("");
    return (
        <form>
            <div className="card-body">
                <input type="text" name="weight" placeholder="your weight" onChange={e => setWeight(e.target.value)}/>
                <button type="submit">store</button>
                { weight }
            </div>
        </form>
    );
}

export default Form;
