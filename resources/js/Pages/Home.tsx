import Authenticated from "@/Layouts/AuthenticatedLayout";
import { User } from "@/types";
import React from "react";

export default function Home() {
    return (
        <Authenticated
            user={{} as User}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Home
                </h2>
            }
        >
            <div>
                <h1>Home</h1>
            </div>
        </Authenticated>
    );
}
