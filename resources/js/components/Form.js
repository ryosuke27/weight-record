import { useState } from "react";

function Form(props) {
    return (
        <form>
            <div className="card-body">
                <input type="text" name="weight" placeholder="your weight" onChange={e => props.setWeight(e.target.value)}/>
                <button type="submit" onClick={props.getWeight}>store</button>
            </div>
        </form>
    );
}

export default Form;
