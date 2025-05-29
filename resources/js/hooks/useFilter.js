import { useCallback, useEffect } from "react";
import pkg from 'lodash';
import { router } from "@inertiajs/react";

export function UseFilter({route, values, only, wait = 300}){
    const { debounce, pickBy} = pkg;
    const reload = useCallback (
        debounce((query) => {
            router.get(route, pickBy(query), {
                only: only,
                preserveState: true,
                preserveScroll: true,
            });
        }, wait),
        [],
    );
    
    useEffect(()=> reload(values), [values, reload]);

    return{values};
}