import { useEffect, useState } from "react";
import { Link } from "react-router-dom";
import axiosClient from "../axios-client";

export default function Users() {

    // state for user and loading
    const [users, setUser] = useState([]);
    const [loading, setLoading] = useState(false);

    // use effect hook
    useEffect(() => {
        getUsers();
    }, []);

    // get users function collecting users from /user 
    const getUsers = () => {
        setLoading(true);
        axiosClient
            .get("/users")
            .then(({ data }) => {
                setLoading(false);
                console.log(data);
            })
            .catch(() => {
                setLoading(false);
            });
    };
    return (
        <div>
            <div>
                <h1>Users</h1>
                <Link to={}>Add new</Link>
            </div>
        </div>
    );
}
